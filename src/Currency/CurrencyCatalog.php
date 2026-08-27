<?php

declare(strict_types=1);

namespace Sirix\Money\Currency;

use Brick\Money\Currency;
use Sirix\Money\Exception\InvalidArgumentException;
use Sirix\Money\Exception\UnknownCurrencyException;

interface CurrencyCatalog
{
    /**
     * @param int|string $code
     *
     * @throws InvalidArgumentException
     * @throws UnknownCurrencyException
     */
    public function get(mixed $code): Currency;

    /** @param int|string $code */
    public function has(mixed $code): bool;

    /** @return array<string, Currency> */
    public function all(): array;
}
