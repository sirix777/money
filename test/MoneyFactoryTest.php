<?php

declare(strict_types=1);

namespace Sirix\Money\Test;

use Brick\Math\RoundingMode;
use Brick\Money\Context\AutoContext;
use Brick\Money\Currency;
use PHPUnit\Framework\TestCase;
use Sirix\Money\Currency\ArrayCurrencyCatalog;
use Sirix\Money\Exception\InvalidAmountException;
use Sirix\Money\Exception\InvalidArgumentException;
use Sirix\Money\Exception\UnknownCurrencyException;
use Sirix\Money\MoneyFactory;
use Sirix\Money\MoneyFormatter;

final class MoneyFactoryTest extends TestCase
{
    public function testConstructsMoneyAndSupportsDirectCurrencyBypass(): void
    {
        $factory = new MoneyFactory(new ArrayCurrencyCatalog(new Currency('TOK', 0, 'Token', 8)));
        self::assertSame('123.00000000', (string) $factory->ofMinor('12300000000', 'tok')->getAmount());
        self::assertSame('1.25', (new MoneyFormatter())->amount($factory->of('1.2500', new Currency('ONE', 0, 'One', 4))));
    }

    public function testUsesTheDefaultContextWhenNoneIsProvided(): void
    {
        $factory = new MoneyFactory(new ArrayCurrencyCatalog(new Currency('USD', 840, 'US Dollar', 2)));

        self::assertSame('1.23', (string) $factory->of('1.234', 'USD')->getAmount());
        self::assertSame('1.23', (string) $factory->ofMinor('123', 'USD')->getAmount());
    }

    public function testUnknownCatalogCodeIsNotWrapped(): void
    {
        $this->expectException(UnknownCurrencyException::class);
        (new MoneyFactory(new ArrayCurrencyCatalog()))->of('1', 'NONE');
    }

    public function testRejectsFloatAmountsAndCurrencyCodes(): void
    {
        $factory = new MoneyFactory(new ArrayCurrencyCatalog(new Currency('USD', 840, 'US Dollar', 2)));
        $this->expectException(InvalidArgumentException::class);
        $factory->of(10.99, 'USD');
    }

    public function testRejectsFloatCurrencyCodes(): void
    {
        $factory = new MoneyFactory(new ArrayCurrencyCatalog(new Currency('USD', 840, 'US Dollar', 2)));
        $this->expectException(InvalidArgumentException::class);
        $factory->of('10', 840.9);
    }

    public function testWrapsInvalidAmountsInLibraryException(): void
    {
        $factory = new MoneyFactory(new ArrayCurrencyCatalog(new Currency('USD', 840, 'US Dollar', 2)));
        $this->expectException(InvalidAmountException::class);
        $factory->of('not-a-number', 'USD');
    }

    public function testWrapsRoundingErrorsInLibraryException(): void
    {
        $factory = new MoneyFactory(new ArrayCurrencyCatalog(new Currency('USD', 840, 'US Dollar', 2)));
        $this->expectException(InvalidAmountException::class);
        $factory->of('1.234', 'USD', rounding: RoundingMode::Unnecessary);
    }

    public function testUsesAutoContextCompatibleDefaultRounding(): void
    {
        $factory = new MoneyFactory(new ArrayCurrencyCatalog(new Currency('USD', 840, 'US Dollar', 2)));

        self::assertSame('1.25', (string) $factory->of('1.25', 'USD', new AutoContext())->getAmount());
        self::assertSame('1.25', (string) $factory->ofMinor('125', 'USD', new AutoContext())->getAmount());
    }
}
