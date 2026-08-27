<?php

declare(strict_types=1);

namespace Sirix\Money\Currency;

use Brick\Money\Currency;
use Sirix\Money\Exception\DuplicateCurrencyException;
use Sirix\Money\Exception\UnknownCurrencyException;

use function sprintf;

final readonly class CompositeCurrencyCatalog implements CurrencyCatalog
{
    private ArrayCurrencyCatalog $catalog;

    /**
     * @throws DuplicateCurrencyException
     * @throws UnknownCurrencyException
     */
    public function __construct(CurrencyCatalog ...$catalogs)
    {
        $currencies   = [];
        $codes        = [];
        $numericCodes = [];
        foreach ($catalogs as $index => $catalog) {
            $source = (int) $index + 1;
            foreach ($catalog->all() as $code => $currency) {
                if (isset($codes[$code])) {
                    throw new DuplicateCurrencyException(sprintf('Duplicate currency code "%s" from catalogs %d and %d.', $code, $codes[$code], $source));
                }
                $codes[$code] = $source;
                $numericCode  = $currency->getNumericCode();
                if (0 !== $numericCode) {
                    if (isset($numericCodes[$numericCode])) {
                        throw new DuplicateCurrencyException(sprintf('Duplicate numeric currency code %d from catalogs %d and %d.', $numericCode, $numericCodes[$numericCode], $source));
                    }
                    $numericCodes[$numericCode] = $source;
                }
                $currencies[] = $currency;
            }
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
