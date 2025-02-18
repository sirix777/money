<?php

declare(strict_types=1);

namespace Sirix\Money\Test;

use Brick\Money\Currency;
use PHPUnit\Framework\TestCase;
use Psr\Cache\InvalidArgumentException;
use ReflectionClass;
use ReflectionException;
use Sirix\Money\CurrencyCode;
use Sirix\Money\CurrencyRegistry;
use Sirix\Money\Exception\UnknownCurrencyException;

class CurrencyRegistryTest extends TestCase
{
    /**
     * @throws UnknownCurrencyException
     * @throws InvalidArgumentException
     */
    public function testGetReturnsCurrencyFromCache(): void
    {
        $currencyCode = CurrencyCode::Usd->value;
        $mockCurrency = new Currency($currencyCode, 840, 'United States Dollar', 2);

        $result = CurrencyRegistry::getInstance()->get($currencyCode);

        $this->assertEquals($mockCurrency, $result);
    }

    /**
     * @throws ReflectionException
     */
    public function testDefaultCachePrefixIsUsedWhenPrefixNotSet(): void
    {
        $registry = CurrencyRegistry::getInstance();

        $reflection = new ReflectionClass($registry);
        $method = $reflection->getMethod('getCachePrefix');

        $cachePrefix = $method->invoke($registry);

        $this->assertSame('sirix_currency_registry_', $cachePrefix);
    }

    /**
     * @throws ReflectionException
     */
    public function testSetCachePrefixUpdatesCachePrefix(): void
    {
        $registry = CurrencyRegistry::getInstance();
        $registry->setCachePrefix('custom_prefix_');

        $reflection = new ReflectionClass($registry);
        $method = $reflection->getMethod('getCachePrefix');

        $cachePrefix = $method->invoke($registry);

        $this->assertSame('custom_prefix_', $cachePrefix);
    }

    /**
     * @throws InvalidArgumentException
     */
    public function testGetReturnsExceptionForNonExistentCurrency(): void
    {
        $currencyCode = 'NON_EXISTENT_CODE';

        $this->expectException(UnknownCurrencyException::class);
        $this->expectExceptionMessage("Can't get Currency with code {$currencyCode}. Unknown currency.");

        CurrencyRegistry::getInstance()->get($currencyCode);
    }

    /**
     * @throws UnknownCurrencyException
     * @throws InvalidArgumentException
     */
    public function testGetReturnsNewCurrencyWhenNotInCache(): void
    {
        $currencyCode = CurrencyCode::Eur->value;

        CurrencyRegistry::getInstance()->clearAllCaches();

        $result = CurrencyRegistry::getInstance()->get($currencyCode);

        $this->assertInstanceOf(Currency::class, $result);
        $this->assertSame($currencyCode, $result->getCurrencyCode());
    }

    /**
     * @throws UnknownCurrencyException
     * @throws InvalidArgumentException
     */
    public function testGetHandlesCryptoCurrenciesFromCurrencyCodeEnum(): void
    {
        $cryptoCurrencyCode = CurrencyCode::Btc->value;

        $result = CurrencyRegistry::getInstance()->get($cryptoCurrencyCode);

        $this->assertInstanceOf(Currency::class, $result);
        $this->assertSame($cryptoCurrencyCode, $result->getCurrencyCode());
    }

    /**
     * @throws InvalidArgumentException
     */
    public function testAddCustomCurrencyStoresCurrencyCorrectly(): void
    {
        $currencyCode = 'XXXX';
        $mockCurrency = new Currency($currencyCode, 999, 'Test Currency', 2);
        $isCrypto = true;

        $registry = CurrencyRegistry::getInstance();
        $registry->addCustomCurrency($mockCurrency, $isCrypto);

        $storedCurrency = $registry->get($currencyCode);

        $this->assertEquals($mockCurrency, $storedCurrency);
        $this->assertTrue($registry->isCrypto($currencyCode));
    }

    /**
     * @throws InvalidArgumentException
     * @throws \Sirix\Money\Exception\InvalidArgumentException
     */
    public function testAddCustomCurrencyRejectsDuplicateCurrency(): void
    {
        $currencyCode = 'XXXXX';
        $mockCurrency = new Currency($currencyCode, 999, 'Test Currency', 2);

        $registry = CurrencyRegistry::getInstance();
        $registry->addCustomCurrency($mockCurrency, false);

        $this->expectException(\Sirix\Money\Exception\InvalidArgumentException::class);
        $this->expectExceptionMessage('Currency code already exists.');

        $registry->addCustomCurrency($mockCurrency, true);
    }

    /**
     * @throws InvalidArgumentException
     * @throws \Sirix\Money\Exception\InvalidArgumentException
     * @throws UnknownCurrencyException
     */
    public function testAddCustomCurrencyHandlesCryptoFlag(): void
    {
        $currencyCode = 'XXXXXX';
        $mockCurrency = new Currency($currencyCode, 999, 'Test Currency', 2);

        $registry = CurrencyRegistry::getInstance();
        $registry->addCustomCurrency($mockCurrency, false);

        $this->assertFalse($registry->isCrypto($currencyCode));

        $registry->addCustomCurrency(new Currency('YYY', 1000, 'Another Test', 2), true);
        $this->assertTrue($registry->isCrypto('YYY'));
    }
}
