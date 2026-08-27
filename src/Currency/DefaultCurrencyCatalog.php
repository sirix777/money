<?php

declare(strict_types=1);

namespace Sirix\Money\Currency;

use Brick\Money\Currency;
use Brick\Money\CurrencyType;
use Brick\Money\IsoCurrencyProvider;
use Sirix\Money\Exception\DuplicateCurrencyException;
use Sirix\Money\Exception\UnknownCurrencyException;

use function array_filter;
use function array_values;

/** Brick ISO currencies plus the source-controlled v2 digital seed. */
final readonly class DefaultCurrencyCatalog implements CurrencyCatalog
{
    private ArrayCurrencyCatalog $catalog;

    /**
     * @throws DuplicateCurrencyException
     * @throws UnknownCurrencyException
     */
    public function __construct()
    {
        $currencies = array_values(array_filter(
            IsoCurrencyProvider::getInstance()->getAvailableCurrencies(),
            static fn (Currency $currency): bool => CurrencyType::IsoCurrent === $currency->getCurrencyType(),
        ));
        foreach (require __DIR__ . '/Data/popular-digital.php' as $definition) {
            [$code, $numericCode, $name, $fractionDigits] = $definition;
            $currencies[]                                 = new Currency($code, $numericCode, $name, $fractionDigits);
        }
        $this->catalog = new ArrayCurrencyCatalog(...$currencies);
    }

    public function get(mixed $code): Currency
    {
        return $this->catalog->get($code);
    }

    public function has(mixed $code): bool
    {
        return $this->catalog->has($code);
    }

    /** @return array<string, Currency> */
    public function all(): array
    {
        return $this->catalog->all();
    }
}
