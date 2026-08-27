<?php

declare(strict_types=1);

namespace Sirix\Money\Test\Benchmark;

use Brick\Money\Currency;
use Sirix\Money\Currency\ArrayCurrencyCatalog;
use Sirix\Money\MoneyFactory;

/** @Revs(1000) @Iterations(10) */
final class MoneyFactoryBench
{
    private MoneyFactory $factory;

    public function __construct()
    {
        $this->factory = new MoneyFactory(new ArrayCurrencyCatalog(new Currency('TOK', 0, 'Token', 8)));
    }

    public function benchOf(): void
    {
        $this->factory->of('1.25', 'TOK');
    }

    public function benchOfMinor(): void
    {
        $this->factory->ofMinor('125000000', 'TOK');
    }
}
