<?php

declare(strict_types=1);

namespace Sirix\Money\Test\Benchmark;

use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use Sirix\Money\CurrencyCode;

#[BeforeMethods(['setUp'])]
class CurrencyCodeBench
{
    private CurrencyCode $code;

    public function setUp(): void
    {
        $this->code = CurrencyCode::Btc;
    }

    #[Revs(1000)]
    #[Iterations(5)]
    public function benchEnumCreation(): void
    {
        $code = CurrencyCode::Btc;
    }

    #[Revs(1000)]
    #[Iterations(5)]
    public function benchFromString(): void
    {
        $code = CurrencyCode::from('BTC');
    }

    #[Revs(1000)]
    #[Iterations(5)]
    public function benchTryFrom(): void
    {
        $code = CurrencyCode::tryFrom('BTC');
    }

    #[Revs(1000)]
    #[Iterations(20)]
    public function benchGetValue(): void
    {
        $value = CurrencyCode::Btc->value;
    }

    #[Revs(1000)]
    #[Iterations(5)]
    public function benchGetCases(): void
    {
        $cases = CurrencyCode::cases();
    }

    #[Revs(1000)]
    #[Iterations(20)]
    public function benchComparison(): void
    {
        $result = CurrencyCode::Btc === $this->code;
    }

    #[Revs(1000)]
    #[Iterations(5)]
    public function benchMatchExpression(): void
    {
        $result = match ($this->code) {
            CurrencyCode::Btc => true,
            default => false,
        };
    }
}
