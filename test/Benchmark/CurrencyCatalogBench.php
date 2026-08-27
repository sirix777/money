<?php

declare(strict_types=1);

namespace Sirix\Money\Test\Benchmark;

use Brick\Money\Currency;
use Sirix\Money\Currency\ArrayCurrencyCatalog;
use Sirix\Money\Currency\CompositeCurrencyCatalog;

/** @Revs(1000) @Iterations(10) */
final class CurrencyCatalogBench
{
    public function benchColdConstruction(): void
    {
        new ArrayCurrencyCatalog(new Currency('TOK', 0, 'Token', 8));
    }

    public function benchStringLookup(): void
    {
        (new ArrayCurrencyCatalog(new Currency('TOK', 1, 'Token', 8)))->get('TOK');
    }

    public function benchLowercaseLookup(): void
    {
        (new ArrayCurrencyCatalog(new Currency('TOK', 1, 'Token', 8)))->get('tok');
    }

    public function benchNumericLookup(): void
    {
        (new ArrayCurrencyCatalog(new Currency('TOK', 1, 'Token', 8)))->get(1);
    }

    public function benchComposition(): void
    {
        new CompositeCurrencyCatalog(new ArrayCurrencyCatalog(new Currency('A', 0, 'A', 0)), new ArrayCurrencyCatalog(new Currency('B', 0, 'B', 0)));
    }
}
