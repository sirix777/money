<?php

declare(strict_types=1);

namespace Sirix\Money\Test\Documentation;

use Brick\Money\Currency;
use PHPUnit\Framework\TestCase;
use Sirix\Money\Currency\ArrayCurrencyCatalog;
use Sirix\Money\Currency\CompositeCurrencyCatalog;
use Sirix\Money\Currency\DefaultCurrencyCatalog;
use Sirix\Money\MoneyFactory;
use Sirix\Money\MoneyFormatter;

final class ExamplesTest extends TestCase
{
    public function testReadmeExamplesExecute(): void
    {
        $factory = new MoneyFactory(new DefaultCurrencyCatalog());
        self::assertSame('10.9', (new MoneyFormatter())->amount($factory->of('10.90', 'usd')));
        self::assertSame('POINT', (new MoneyFactory(new ArrayCurrencyCatalog(new Currency('POINT', 0, 'Points', 0))))->of(100, 'POINT')->getCurrency()->getCurrencyCode());
        self::assertSame('10.99', (new MoneyFormatter())->amount($factory->ofMinor('1099', 'USD')));
        self::assertSame('1.23456789', (new MoneyFormatter())->amount($factory->ofMinor('123456789', 'BTC')));
        self::assertSame('POINT', (new MoneyFactory(new CompositeCurrencyCatalog(new DefaultCurrencyCatalog(), new ArrayCurrencyCatalog(new Currency('POINT', 0, 'Points', 0)))))->of(100, 'POINT')->getCurrency()->getCurrencyCode());
    }
}
