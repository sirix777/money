<?php

declare(strict_types=1);

namespace Sirix\Money\Currency;

use Brick\Money\Currency;
use Sirix\Money\Exception\DuplicateCurrencyException;
use Sirix\Money\Exception\InvalidArgumentException;
use Sirix\Money\Exception\UnknownCurrencyException;

use function is_int;
use function is_string;
use function ksort;
use function sprintf;
use function strtoupper;
use function trim;

/** Immutable, eagerly-indexed catalog for application-defined currencies. */
final readonly class ArrayCurrencyCatalog implements CurrencyCatalog
{
    /** @var array<string, Currency> */
    private array $byCode;

    /** @var array<int, Currency> */
    private array $byNumericCode;

    /**
     * @throws DuplicateCurrencyException
     * @throws UnknownCurrencyException
     */
    public function __construct(Currency ...$currencies)
    {
        $byCode        = [];
        $byNumericCode = [];
        foreach ($currencies as $currency) {
            $code = self::canonicalize($currency->getCurrencyCode());
            if (isset($byCode[$code])) {
                throw new DuplicateCurrencyException(sprintf('Duplicate currency code "%s" in array catalog.', $code));
            }

            $numericCode = $currency->getNumericCode();
            if (null !== $numericCode && 0 !== $numericCode && isset($byNumericCode[$numericCode])) {
                throw new DuplicateCurrencyException(sprintf('Duplicate numeric currency code %d in array catalog.', $numericCode));
            }

            $catalogCurrency = $code === $currency->getCurrencyCode()
                ? $currency
                : new Currency($code, $numericCode, $currency->getName(), $currency->getDefaultFractionDigits());
            $byCode[$code] = $catalogCurrency;

            if (null !== $numericCode && 0 !== $numericCode) {
                $byNumericCode[$numericCode] = $catalogCurrency;
            }
        }
        ksort($byCode);
        $this->byCode        = $byCode;
        $this->byNumericCode = $byNumericCode;
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownCurrencyException
     */
    public function get(mixed $code): Currency
    {
        self::assertLookupCode($code);
        if (is_int($code)) {
            if (isset($this->byNumericCode[$code])) {
                return $this->byNumericCode[$code];
            }
        } else {
            $code = self::canonicalize($code);
            if (isset($this->byCode[$code])) {
                return $this->byCode[$code];
            }
        }

        throw new UnknownCurrencyException(sprintf('Unknown currency "%s".', (string) $code));
    }

    public function has(mixed $code): bool
    {
        return $this->hasCode($code);
    }

    /** @return array<string, Currency> */
    public function all(): array
    {
        return $this->byCode;
    }

    private function hasCode(mixed $code): bool
    {
        if (! is_int($code) && ! is_string($code)) {
            return false;
        }

        if (is_int($code)) {
            return isset($this->byNumericCode[$code]);
        }

        try {
            return isset($this->byCode[self::canonicalize($code)]);
        } catch (UnknownCurrencyException) {
            return false;
        }
    }

    /**
     * @throws UnknownCurrencyException
     */
    /** @return non-empty-string */
    private static function canonicalize(string $code): string
    {
        $code = strtoupper(trim($code));
        if ('' === $code) {
            throw new UnknownCurrencyException('Currency code must not be empty.');
        }

        return $code;
    }

    /** @throws InvalidArgumentException */
    private static function assertLookupCode(mixed $code): void
    {
        if (! is_int($code) && ! is_string($code)) {
            throw new InvalidArgumentException('Currency lookup code must be an integer or string.');
        }
    }
}
