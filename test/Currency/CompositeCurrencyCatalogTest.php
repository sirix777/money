<?php

declare(strict_types=1);

namespace Sirix\Money\Test\Currency;

use Brick\Money\Currency;
use PHPUnit\Framework\TestCase;
use Sirix\Money\Currency\ArrayCurrencyCatalog;
use Sirix\Money\Currency\CompositeCurrencyCatalog;
use Sirix\Money\Currency\CurrencyCatalogBuilder;
use Sirix\Money\Exception\DuplicateCurrencyException;

final class CompositeCurrencyCatalogTest extends TestCase
{
    public function testComposesCustomCatalogsAndBuilderReplacesExplicitly(): void
    {
        $base   = new ArrayCurrencyCatalog(new Currency('APP', 0, 'Old', 2));
        $custom = new ArrayCurrencyCatalog(new Currency('TOK', 0, 'Token', 18));
        self::assertSame('TOK', (new CompositeCurrencyCatalog($base, $custom))->get('tok')->getCurrencyCode());
        self::assertSame('New', (new CurrencyCatalogBuilder($base))->replace(new Currency('APP', 0, 'New', 2))->build()->get('APP')->getName());
    }

    public function testRejectsAmbiguityRegardlessOfOrder(): void
    {
        $this->expectException(DuplicateCurrencyException::class);
        new CompositeCurrencyCatalog(new ArrayCurrencyCatalog(new Currency('APP', 0, 'One', 2)), new ArrayCurrencyCatalog(new Currency('APP', 0, 'Two', 2)));
    }

    public function testBuilderRejectsImplicitReplacement(): void
    {
        $this->expectException(DuplicateCurrencyException::class);
        new CurrencyCatalogBuilder(
            new ArrayCurrencyCatalog(new Currency('APP', 0, 'One', 2)),
            new ArrayCurrencyCatalog(new Currency('APP', 0, 'Two', 2))
        );
    }
}
