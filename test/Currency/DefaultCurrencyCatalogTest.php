<?php

declare(strict_types=1);

namespace Sirix\Money\Test\Currency;

use PHPUnit\Framework\TestCase;
use Sirix\Money\Currency\DefaultCurrencyCatalog;

final class DefaultCurrencyCatalogTest extends TestCase
{
    public function testContainsBrickIsoAndExactlyTwentyDigitalSeedCurrencies(): void
    {
        $catalog = new DefaultCurrencyCatalog();
        self::assertSame(0, $catalog->get('UYI')->getDefaultFractionDigits());
        self::assertSame(4, $catalog->get('UYW')->getDefaultFractionDigits());
        $seed = require __DIR__ . '/../../src/Currency/Data/popular-digital.php';
        self::assertCount(20, $seed);
        self::assertSame(1001, $catalog->get('btc')->getNumericCode());
        self::assertSame('BTC', $catalog->get(1001)->getCurrencyCode());
        self::assertSame('DAI', $catalog->get(1020)->getCurrencyCode());
        self::assertSame('XCG', $catalog->get(532)->getCurrencyCode());
        self::assertSame('Tugrik', $catalog->get('MNT')->getName());
        self::assertSame('Nakfa', $catalog->get('ERN')->getName());
    }
}
