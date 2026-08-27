<?php

declare(strict_types=1);

namespace Sirix\Money;

use Brick\Money\Money;

final class MoneyFormatter
{
    public function amount(Money $money, bool $withoutTrailingZeros = true): string
    {
        return (string) $money->getAmount()->strippedOfTrailingZeros();
    }

    public function minorAmount(Money $money): string
    {
        return (string) $money->getMinorAmount();
    }
}
