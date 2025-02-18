<?php

declare(strict_types=1);

namespace Benchmark;

use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use Sirix\Money\CurrencyRegistry;

#[BeforeMethods('setUp')]
class CurrencyRegistryWithoutPsrCacheBench
{
    private CurrencyRegistry $registry;

    public function setUp(): void
    {
        $this->registry = CurrencyRegistry::getInstance();
    }

    #[Revs(1000)]
    #[Iterations(5)]
    public function benchGetCurrencyOnce(): void
    {
        $this->registry->get('USD');
    }

    #[Revs(1000)]
    #[Iterations(5)]
    public function benchGetCurrencyTwice(): void
    {
        $this->registry->get('USD');
        $this->registry->get('USD');
    }

    #[Revs(1000)]
    #[Iterations(5)]
    public function benchGetMultipleDifferentCurrencies(): void
    {
        $this->registry->get('USD');
        $this->registry->get('EUR');
        $this->registry->get('GBP');
    }
}
