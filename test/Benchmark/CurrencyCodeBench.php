<?php

declare(strict_types=1);

namespace Sirix\Money\Test\Benchmark;

use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use Sirix\Money\CryptoCurrencyCode;

#[BeforeMethods(['setUp'])]
class CurrencyCodeBench
{
    private CryptoCurrencyCode $code;

    public function setUp(): void
    {
        $this->code = CryptoCurrencyCode::Btc;
    }

    #[Revs(1000)]
    #[Iterations(5)]
    public function benchEnumCreation(): void
    {
        $code = CryptoCurrencyCode::Btc;
    }

    #[Revs(1000)]
    #[Iterations(5)]
    public function benchFromString(): void
    {
        $code = CryptoCurrencyCode::from('BTC');
    }

    #[Revs(1000)]
    #[Iterations(5)]
    public function benchTryFrom(): void
    {
        $code = CryptoCurrencyCode::tryFrom('BTC');
    }

    #[Revs(1000)]
    #[Iterations(20)]
    public function benchGetValue(): void
    {
        $value = CryptoCurrencyCode::Btc->value;
    }

    #[Revs(1000)]
    #[Iterations(5)]
    public function benchGetCases(): void
    {
        $cases = CryptoCurrencyCode::cases();
    }

    #[Revs(1000)]
    #[Iterations(20)]
    public function benchComparison(): void
    {
        $result = CryptoCurrencyCode::Btc === $this->code;
    }

    #[Revs(1000)]
    #[Iterations(5)]
    public function benchMatchExpression(): void
    {
        $result = match ($this->code) {
            CryptoCurrencyCode::Btc => true,
            default => false,
        };
    }
}
