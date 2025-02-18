<?php

declare(strict_types=1);

namespace Sirix\Money\Test;

use Brick\Money\Currency;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\InvalidArgumentException;
use ReflectionClass;
use ReflectionException;
use Sirix\Money\CurrencyCode;
use Sirix\Money\CurrencyRegistry;
use Sirix\Money\Exception\UnknownCurrencyException;

class CurrencyRegistryPsrCacheTest extends TestCase
{
    /**
     * @throws ReflectionException
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->resetCaches();
    }

    /**
     * @throws ReflectionException
     */
    protected function tearDown(): void
    {
        parent::tearDown();
        $this->resetCaches();
    }

    /**
     * @throws Exception
     * @throws UnknownCurrencyException
     * @throws InvalidArgumentException
     * @throws ReflectionException
     */
    public function testCurrencyIsSavedToPsrCache(): void
    {
        $code = CurrencyCode::Usd->value;
        $cachePool = $this->createMockCachePool();

        $cacheItem = $this->createMockCacheItem();
        $cacheItem->expects($this->once())
            ->method('set')
            ->willReturnSelf()
        ;

        $cacheItem->expects($this->once())
            ->method('expiresAfter')
            ->willReturnSelf()
        ;

        $cachePool->expects($this->once())
            ->method('save')
            ->with($cacheItem)
            ->willReturn(true)
        ;

        $cachePool->expects(
            $this->exactly(2)
        )
            ->method('getItem')
            ->with($this->getCachePrefix() . $code)
            ->willReturn($cacheItem)
        ;

        CurrencyRegistry::getInstance()->setCache($cachePool);
        CurrencyRegistry::getInstance()->get($code);
    }

    /**
     * @throws UnknownCurrencyException
     * @throws Exception
     * @throws InvalidArgumentException
     * @throws ReflectionException
     */
    public function testCurrencyIsLoadedFromPsrCache(): void
    {
        $code = CurrencyCode::Usd->value;
        $currency = new Currency($code, 840, 'US Dollar', 2);

        $cachePool = $this->createMockCachePool();
        $cacheItem = $this->createMockCacheItem();

        $cacheItem->expects($this->once())
            ->method('isHit')
            ->willReturn(true)
        ;

        $cacheItem->expects($this->once())
            ->method('get')
            ->willReturn([
                'currency' => $currency,
            ])
        ;

        $cachePool->expects($this->once())
            ->method('getItem')
            ->with($this->getCachePrefix() . $code)
            ->willReturn($cacheItem)
        ;

        CurrencyRegistry::getInstance()->setCache($cachePool);
        $result = CurrencyRegistry::getInstance()->get($code);

        $this->assertSame($currency, $result);
    }

    /**
     * @throws Exception
     */
    public function testClearAllCachesCallsPsrCacheClear(): void
    {
        $cachePool = $this->createMockCachePool();
        $cachePool->expects($this->once())
            ->method('clear')
            ->willReturn(true)
        ;

        CurrencyRegistry::getInstance()->setCache($cachePool);
        CurrencyRegistry::getInstance()->clearAllCaches();
    }

    /**
     * @throws Exception
     */
    private function createMockCachePool(): CacheItemPoolInterface|MockObject
    {
        return $this->createMock(CacheItemPoolInterface::class);
    }

    /**
     * @throws Exception
     */
    private function createMockCacheItem(): CacheItemInterface|MockObject
    {
        return $this->createMock(CacheItemInterface::class);
    }

    /**
     * @throws ReflectionException
     */
    private function resetCaches(): void
    {
        $reflection = new ReflectionClass(CurrencyRegistry::getInstance());

        $metadata = $reflection->getProperty('cache');
        $metadata->setValue(CurrencyRegistry::getInstance(), null);
    }

    /**
     * @throws ReflectionException
     */
    private function getCachePrefix(): string
    {
        $reflection = new ReflectionClass(CurrencyRegistry::getInstance());
        $method = $reflection->getMethod('getCachePrefix');

        return $method->invoke(CurrencyRegistry::getInstance());
    }
}
