<?php

declare(strict_types=1);

namespace Sirix\Money\Test;

use Brick\Math\BigNumber;
use Brick\Math\RoundingMode;
use Brick\Money\Currency;
use Brick\Money\Exception\UnknownCurrencyException;
use Brick\Money\Money;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use Sirix\Money\CurrencyRegistry;
use Sirix\Money\Exception\CacheException;
use Sirix\Money\Exception\InvalidAmountException;
use Sirix\Money\Exception\SirixMoneyException;
use Sirix\Money\Exception\UnsupportedCurrencyException;
use Sirix\Money\SirixMoney;

class SirixMoneyTest extends TestCase
{
    private CurrencyRegistry $currencyRegistryMock;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->currencyRegistryMock = $this->createMock(CurrencyRegistry::class);
        $reflection = new ReflectionClass(CurrencyRegistry::class);
        $instanceProperty = $reflection->getProperty('instance');
        $instanceProperty->setValue($reflection, $this->currencyRegistryMock);
    }

    /**
     * @throws InvalidAmountException
     * @throws UnsupportedCurrencyException
     * @throws UnknownCurrencyException
     * @throws SirixMoneyException
     */
    public function testOfCreatesMoneySuccessfully(): void
    {
        $amount = '1000';
        $currencyCode = 'USD';
        $rounding = RoundingMode::DOWN;

        $currency = Currency::of($currencyCode);

        $this->currencyRegistryMock
            ->method('get')
            ->with($currencyCode)
            ->willReturn($currency)
        ;

        $money = SirixMoney::of($amount, $currencyCode, null, $rounding);

        $this->assertInstanceOf(Money::class, $money);
        $this->assertEquals($amount, $money->getAmount());
        $this->assertEquals($currency, $money->getCurrency());
    }

    /**
     * @throws SirixMoneyException
     * @throws UnknownCurrencyException
     */
    public function testOfThrowsInvalidAmountExceptionForInvalidAmount(): void
    {
        $amount = 'invalid_amount';
        $currencyCode = 'USD';

        $this->currencyRegistryMock
            ->method('get')
            ->with($currencyCode)
            ->willReturn(Currency::of($currencyCode))
        ;

        $this->expectException(SirixMoneyException::class);
        SirixMoney::of($amount, $currencyCode);
    }

    /**
     * @throws SirixMoneyException
     */
    public function testOfThrowsUnsupportedCurrencyExceptionForUnknownCurrency(): void
    {
        $this->currencyRegistryMock
            ->method('get')
            ->willThrowException(new SirixMoneyException())
        ;

        $this->expectException(SirixMoneyException::class);
        SirixMoney::of('100', 'XYZ');
    }

    /**
     * @throws UnsupportedCurrencyException
     * @throws SirixMoneyException
     * @throws InvalidAmountException
     */
    public function testOfThrowsCacheExceptionForCacheError(): void
    {
        $currencyCode = 'USD';

        $this->currencyRegistryMock
            ->method('get')
            ->willThrowException(new CacheException('Cache issue encountered.'))
        ;

        $this->expectException(CacheException::class);
        SirixMoney::of('100', $currencyCode);
    }

    /**
     * @throws UnsupportedCurrencyException
     * @throws SirixMoneyException
     */
    #[DataProvider('validAmountProvider')]
    public function testOfHandlesAllPossibleAmountValuesSuccessfully(BigNumber|float|int|string $amount): void
    {
        $currencyCode = 'ETH';
        $rounding = RoundingMode::HALF_UP;

        $currency = new Currency($currencyCode, 1000, 'Ethereum', 18);

        $this->currencyRegistryMock
            ->method('get')
            ->with($currencyCode)
            ->willReturn($currency)
        ;

        $money = SirixMoney::of($amount, $currencyCode, null, $rounding);

        $this->assertInstanceOf(Money::class, $money);
        $this->assertEquals((string) $amount, $money->getAmount());
        $this->assertEquals($currency, $money->getCurrency());
    }

    /**
     * @throws UnsupportedCurrencyException
     * @throws SirixMoneyException
     * @throws InvalidAmountException
     */
    public function testGetAmountReturnsAmountString(): void
    {
        $amount = '10.00000000002';
        $amountWithTrailingZeros = '10.000000000020000000';
        $currencyCode = 'ETH';

        $currency = new Currency($currencyCode, 1000, 'Ethereum', 18);

        $this->currencyRegistryMock
            ->method('get')
            ->with($currencyCode)
            ->willReturn($currency)
        ;
        $money = SirixMoney::of($amount, $currencyCode);
        $this->assertEquals($amount, SirixMoney::getAmount($money));
        $this->assertEquals($amountWithTrailingZeros, SirixMoney::getAmount($money, false));
    }

    /**
     * @throws UnsupportedCurrencyException
     * @throws SirixMoneyException
     * @throws InvalidAmountException
     */
    public function testGetMinorAmountReturnsMinorAmountString(): void
    {
        $amount = '10.00000000002';
        $minorAmount = '10000000000020000000';

        $currencyCode = 'ETH';

        $currency = new Currency($currencyCode, 1000, 'Ethereum', 18);

        $this->currencyRegistryMock
            ->method('get')
            ->with($currencyCode)
            ->willReturn($currency)
        ;

        $money = SirixMoney::of($amount, $currencyCode);
        $this->assertEquals($minorAmount, SirixMoney::getMinorAmount($money));
    }

    /**
     * Provides valid and edge-case amounts for testing.
     *
     * @return array<float|int|string>
     */
    public static function validAmountProvider(): array
    {
        return [
            ['0'],
            ['0.01'],
            ['0.000000000000000001'],
            [0.000000000000000001],
            [0.01],
            [0.00003000071],
            ['0.00003000071'],
            [10.00e18],
            [0.e501],
            ['0.e501'],
            ['0.E501'],
            ['-0.01'],
            ['100'],
            ['100'],
            ['-100'],
            ['9999999999999999999.123456789876543212'],
            ['99999999999999999999999999.123456789876543212'],
            [99999999999999999999999999.123456789876543212],
            ['-9999999999999999999.07'],
            [999999999999999999999999999999999.0243354325454357],
            [-999999999999999999999999999999999.0243354325454357],
        ];
    }
}
