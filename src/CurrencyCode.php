<?php

declare(strict_types=1);

namespace Sirix\Money;

use Sirix\Money\Exception\InvalidArgumentException;

class CurrencyCode
{
    private const CRYPTOCURRENCY_START_FROM = 1000;

    /**
     * @throws InvalidArgumentException
     */
    public static function fromNumericCode(int $numericCode): CryptoCurrencyCode|FiatCurrencyCode
    {
        if ($numericCode >= self::CRYPTOCURRENCY_START_FROM) {
            try {
                return CryptoCurrencyCode::fromNumericCode($numericCode);
            } catch (InvalidArgumentException $e) {
                throw new InvalidArgumentException("Unknown numeric code: {$numericCode}", 0, $e);
            }
        }

        try {
            return FiatCurrencyCode::fromNumericCode($numericCode);
        } catch (InvalidArgumentException $e) {
            throw new InvalidArgumentException("Unknown numeric code: {$numericCode}", 0, $e);
        }
    }
}
