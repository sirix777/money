<?php

declare(strict_types=1);

namespace Sirix\Money\Test;

use PHPUnit\Framework\TestCase;
use Sirix\Money\CryptoCurrencyCode;
use Sirix\Money\CurrencyCode;
use Sirix\Money\Exception\InvalidArgumentException;
use Sirix\Money\FiatCurrencyCode;

class CurrencyCodeTest extends TestCase
{
    public function testFromNumericCodeReturnsFiatCurrencyCode(): void
    {
        $usdCode = 840;
        $eurCode = 978;

        $usd = CurrencyCode::fromNumericCode($usdCode);
        $eur = CurrencyCode::fromNumericCode($eurCode);

        $this->assertInstanceOf(FiatCurrencyCode::class, $usd);
        $this->assertInstanceOf(FiatCurrencyCode::class, $eur);
        $this->assertEquals(FiatCurrencyCode::Usd, $usd);
        $this->assertEquals(FiatCurrencyCode::Eur, $eur);
    }

    public function testFromNumericCodeReturnsCryptoCurrencyCode(): void
    {
        $btcCode = 1004;
        $ethCode = 1007;

        $btc = CurrencyCode::fromNumericCode($btcCode);
        $eth = CurrencyCode::fromNumericCode($ethCode);

        $this->assertInstanceOf(CryptoCurrencyCode::class, $btc);
        $this->assertInstanceOf(CryptoCurrencyCode::class, $eth);
        $this->assertEquals(CryptoCurrencyCode::Btc, $btc);
        $this->assertEquals(CryptoCurrencyCode::Eth, $eth);
    }

    public function testFromNumericCodeThrowsExceptionForUnknownFiatCode(): void
    {
        $unknownFiatCode = 999;

        $this->expectException(InvalidArgumentException::class);
        CurrencyCode::fromNumericCode($unknownFiatCode);
    }

    public function testFromNumericCodeThrowsExceptionForUnknownCryptoCode(): void
    {
        $unknownCryptoCode = 9999;

        $this->expectException(InvalidArgumentException::class);
        CurrencyCode::fromNumericCode($unknownCryptoCode);
    }
}
