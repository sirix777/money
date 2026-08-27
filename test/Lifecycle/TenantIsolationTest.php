<?php

declare(strict_types=1);

namespace Sirix\Money\Test\Lifecycle;

use Brick\Money\Currency;
use PHPUnit\Framework\TestCase;
use Sirix\Money\Currency\ArrayCurrencyCatalog;
use Sirix\Money\MoneyFactory;

final class TenantIsolationTest extends TestCase
{
    public function testInterleavedScopedCatalogsStayIsolated(): void
    {
        $one = new MoneyFactory(new ArrayCurrencyCatalog(new Currency('ONE', 0, 'One', 2)));
        $two = new MoneyFactory(new ArrayCurrencyCatalog(new Currency('TWO', 0, 'Two', 2)));
        for ($i = 0; $i < 1000; ++$i) {
            self::assertSame('ONE', $one->of('1', 'one')->getCurrency()->getCurrencyCode());
            self::assertSame('TWO', $two->of('1', 'two')->getCurrency()->getCurrencyCode());
        }
    }
}
