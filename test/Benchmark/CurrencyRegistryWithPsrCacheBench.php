<?php

declare(strict_types=1);

namespace Sirix\Money\Test\Benchmark;

use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use Sirix\Money\CurrencyRegistry;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

#[BeforeMethods('setUp')]
class CurrencyRegistryWithPsrCacheBench
{
    private CurrencyRegistry $registry;
    private FilesystemAdapter $cache;

    public function setUp(): void
    {
        $this->cache = new FilesystemAdapter();
        $this->registry = CurrencyRegistry::getInstance();
        $this->registry->setCache($this->cache);
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
