<?php

declare(strict_types=1);

namespace Sirix\Money\Currency;

use Brick\Money\Currency;
use Sirix\Money\Exception\DuplicateCurrencyException;
use Sirix\Money\Exception\UnknownCurrencyException;

use function sprintf;
use function strtoupper;
use function trim;

/** Bootstrap-only helper for explicit catalog replacement. */
final class CurrencyCatalogBuilder
{
    /** @var array<string, Currency> */
    private array $currencies = [];

    /** @var array<int, string> */
    private array $numericCodes = [];

    /**
     * @throws DuplicateCurrencyException
     */
    public function __construct(CurrencyCatalog ...$catalogs)
    {
        foreach ($catalogs as $catalog) {
            foreach ($catalog->all() as $code => $currency) {
                $this->add($code, $currency);
            }
        }
    }

    /**
     * @throws DuplicateCurrencyException
     */
    public function replace(Currency $currency): self
    {
        $copy = clone $this;
        $code = strtoupper(trim($currency->getCurrencyCode()));
        if (isset($copy->currencies[$code])) {
            $previousNumericCode = $copy->currencies[$code]->getNumericCode();
            if (null !== $previousNumericCode && 0 !== $previousNumericCode) {
                unset($copy->numericCodes[$previousNumericCode]);
            }
            unset($copy->currencies[$code]);
        }
        $copy->add($code, $currency);

        return $copy;
    }

    /**
     * @throws DuplicateCurrencyException
     * @throws UnknownCurrencyException
     */
    public function build(): CurrencyCatalog
    {
        return new ArrayCurrencyCatalog(...$this->currencies);
    }

    /**
     * @throws DuplicateCurrencyException
     */
    private function add(string $code, Currency $currency): void
    {
        if (isset($this->currencies[$code])) {
            throw new DuplicateCurrencyException(sprintf('Duplicate currency code "%s" requires replace().', $code));
        }

        $numericCode = $currency->getNumericCode();
        if (null !== $numericCode && 0 !== $numericCode && isset($this->numericCodes[$numericCode])) {
            throw new DuplicateCurrencyException(sprintf(
                'Duplicate numeric currency code %d requires explicit replacement.',
                $numericCode,
            ));
        }

        $this->currencies[$code] = $currency;
        if (null !== $numericCode && 0 !== $numericCode) {
            $this->numericCodes[$numericCode] = $code;
        }
    }
}
