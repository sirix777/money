<?php

declare(strict_types=1);

namespace Sirix\Money;

/**
 * Enum representing the type of currency (fiat, crypto, etc.).
 */
enum CurrencyType: string
{
    case Fiat = 'fiat';
    case Crypto = 'crypto';

    /**
     * Returns a human-readable description of the currency type.
     */
    public function description(): string
    {
        return match ($this) {
            self::Fiat => 'Fiat Currency',
            self::Crypto => 'Cryptocurrency',
        };
    }
}
