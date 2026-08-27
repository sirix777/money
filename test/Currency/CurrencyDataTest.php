<?php

declare(strict_types=1);

namespace Sirix\Money\Test\Currency;

use PHPUnit\Framework\TestCase;

use function array_column;
use function range;

final class CurrencyDataTest extends TestCase
{
    public function testDigitalSeedHasTwentyStableNumericIdentifiers(): void
    {
        $seed = require __DIR__ . '/../../src/Currency/Data/popular-digital.php';

        self::assertCount(20, $seed);
        self::assertSame(
            ['BTC', 'ETH', 'USDT', 'BNB', 'USDC', 'XRP', 'SOL', 'TRX', 'DOGE', 'ADA', 'LINK', 'XMR', 'XLM', 'BCH', 'LTC', 'AVAX', 'SUI', 'SHIB', 'HBAR', 'DAI'],
            array_column($seed, 0),
        );
        self::assertSame(range(1001, 1020), array_column($seed, 1));
    }
}
