<?php

declare(strict_types=1);

namespace Sirix\Money\Test\Benchmark;

use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use Psr\Cache\InvalidArgumentException;
use Sirix\Money\CurrencyRegistry;
use Sirix\Money\Exception\UnknownCurrencyException;

class CurrencyRegistryBench
{
    /**
     * @throws UnknownCurrencyException
     * @throws InvalidArgumentException
     */
    #[Revs(1000)]
    #[Iterations(5)]
    public function benchGetExistingCryptoCurrency(): void
    {
        CurrencyRegistry::getInstance()->get('BTC');
    }

    /**
     * @throws UnknownCurrencyException
     * @throws InvalidArgumentException
     */
    #[Revs(1000)]
    #[Iterations(5)]
    public function benchGetExistingCryptoCurrencyTwice(): void
    {
        // Test caching behavior
        CurrencyRegistry::getInstance()->get('BTC');
        CurrencyRegistry::getInstance()->get('BTC');
    }

    /**
     * @throws UnknownCurrencyException
     */
    #[Revs(1000)]
    #[Iterations(5)]
    public function benchIsCryptoForExistingCurrency(): void
    {
        CurrencyRegistry::getInstance()->isCrypto('BTC');
    }

    /**
     * @throws UnknownCurrencyException
     * @throws InvalidArgumentException
     */
    #[Revs(1000)]
    #[Iterations(5)]
    public function benchGetWithLowercaseCode(): void
    {
        CurrencyRegistry::getInstance()->get('btc');
    }

    /**
     * @throws UnknownCurrencyException
     */
    #[Revs(1000)]
    #[Iterations(5)]
    public function benchMetadataCaching(): void
    {
        CurrencyRegistry::getInstance()->isCrypto('BTC');
        CurrencyRegistry::getInstance()->isCrypto('BTC');
    }

    /**
     * @throws UnknownCurrencyException
     * @throws InvalidArgumentException
     */
    #[Revs(1000)]
    #[Iterations(5)]
    public function benchMultipleCurrencyOperations(): void
    {
        $btc = CurrencyRegistry::getInstance()->get('BTC');
        $eth = CurrencyRegistry::getInstance()->get('ETH');
        CurrencyRegistry::getInstance()->isCrypto('BTC');
        CurrencyRegistry::getInstance()->isCrypto('ETH');
    }
}
