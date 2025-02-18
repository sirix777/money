<?php

declare(strict_types=1);

namespace Sirix\Money;

use Brick\Money\Currency;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\InvalidArgumentException;
use Sirix\Money\Exception\CacheException;
use Sirix\Money\Exception\SirixMoneyException;
use Sirix\Money\Exception\UnknownCurrencyException;

use function strtoupper;

class CurrencyRegistry
{
    private const DEFAULT_CACHE_PREFIX = 'sirix_currency_registry_';
    private const CACHE_TTL = 86400;

    private static ?self $instance = null;
    private ?CacheItemPoolInterface $cache = null;
    private ?string $cachePrefix = null;
    private ?int $cacheTtl = null;

    /** @var array<string, array<string, mixed>> */
    private ?array $customCurrencies = null;

    public static function getInstance(): self
    {
        if (self::$instance instanceof self) {
            return self::$instance;
        }

        return self::$instance = new self();
    }

    public function setCache(CacheItemPoolInterface $cache): void
    {
        $this->cache = $cache;
    }

    public function setCachePrefix(string $prefix): void
    {
        $this->cachePrefix = $prefix;
    }

    public function setCacheTtl(int $ttl): void
    {
        $this->cacheTtl = $ttl;
    }

    /**
     * @throws SirixMoneyException
     */
    public function get(string $code): Currency
    {
        $code = strtoupper($code);

        if (isset($this->customCurrencies[$code])) {
            return $this->returnCurrency($this->customCurrencies[$code]);
        }

        if (null !== $cachedCurrency = $this->findCurrencyInCache($code)) {
            return $this->returnCurrency($cachedCurrency);
        }

        if (null === CurrencyCode::tryFrom($code)) {
            throw new UnknownCurrencyException("Can't get Currency with code {$code}. Unknown currency.");
        }

        $currency = $this->createCurrency($code);
        $this->cacheCurrency($currency);

        return $currency;
    }

    /**
     * @throws SirixMoneyException
     */
    public function addCustomCurrency(Currency $currency, bool $isCrypto): void
    {
        if (null !== CurrencyCode::tryFrom($currency->getCurrencyCode()) || isset($this->customCurrencies[$currency->getCurrencyCode()])) {
            throw new Exception\InvalidArgumentException('Currency code already exists.');
        }

        $this->customCurrencies[$currency->getCurrencyCode()]['currency'] = $currency;
        $this->customCurrencies[$currency->getCurrencyCode()]['isCrypto'] = $isCrypto;

        $this->cacheCurrency($currency, $isCrypto);
    }

    /**
     * @throws SirixMoneyException
     */
    public function isCrypto(string $code): bool
    {
        if (isset($this->customCurrencies[$code])) {
            return $this->returnIsCrypto($this->customCurrencies[$code]);
        }

        if (null !== $cachedCurrency = $this->findCurrencyInCache($code)) {
            if (isset($cachedCurrency['isCrypto'])) {
                return $this->returnIsCrypto($cachedCurrency);
            }
        }

        $params = $this->getParams($code);

        return (bool) $params['isCrypto'];
    }

    public function clearAllCaches(): void
    {
        $this->cache?->clear();
    }

    /**
     * @return array<string, bool|int|string>
     *
     * @throws SirixMoneyException
     */
    public function getParams(string $code): array
    {
        $params = CurrencyCode::tryFrom($code)?->getParams() ?? null;

        if (null === $params) {
            throw new UnknownCurrencyException("Can't get Currency with code {$code}. Unknown currency.");
        }

        return $params;
    }

    /**
     * @throws SirixMoneyException
     */
    private function createCurrency(string $code): Currency
    {
        $params = $this->getParams($code);

        return new Currency(
            $code,
            (int) $params['numericCode'],
            (string) $params['name'],
            (int) $params['digits'],
        );
    }

    /**
     * @throws SirixMoneyException
     */
    private function cacheCurrency(Currency $currency, ?bool $isCrypto = null): void
    {
        if (null === $this->cache) {
            return;
        }

        try {
            $cacheItem = $this->cache->getItem($this->getCachePrefix() . $currency->getCurrencyCode());
        } catch (InvalidArgumentException $e) {
            throw new CacheException('Cache error: ' . $e->getMessage());
        }

        $cacheItem->set(
            [
                'currency' => $currency,
                'isCrypto' => $isCrypto,
            ],
        );
        $cacheItem->expiresAfter($this->getCacheTtl());
        $this->cache->save($cacheItem);
    }

    /**
     * @return null|array<string, mixed>
     *
     * @throws SirixMoneyException
     */
    private function findCurrencyInCache(string $code): ?array
    {
        if (null == $this->cache) {
            return null;
        }

        try {
            $cacheItem = $this->cache->getItem($this->getCachePrefix() . $code);
        } catch (InvalidArgumentException $e) {
            throw new CacheException('Cache error: ' . $e->getMessage());
        }
        if ($cacheItem->isHit()) {
            return $cacheItem->get();
        }

        return null;
    }

    /**
     * @param array<string, mixed> $cachedData
     */
    private function returnCurrency(array $cachedData): Currency
    {
        return $cachedData['currency'];
    }

    /**
     * @param array<string, mixed> $cachedData
     */
    private function returnIsCrypto(array $cachedData): bool
    {
        return $cachedData['isCrypto'];
    }

    private function getCachePrefix(): string
    {
        return $this->cachePrefix ?? self::DEFAULT_CACHE_PREFIX;
    }

    private function getCacheTtl(): int
    {
        return $this->cacheTtl ?? self::CACHE_TTL;
    }
}
