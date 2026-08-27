<?php

declare(strict_types=1);

namespace Sirix\Money;

use Brick\Math\BigNumber;
use Brick\Math\Exception\MathException;
use Brick\Math\RoundingMode;
use Brick\Money\Context;
use Brick\Money\Context\AutoContext;
use Brick\Money\Context\DefaultContext;
use Brick\Money\Currency;
use Brick\Money\Money;
use Sirix\Money\Currency\CurrencyCatalog;
use Sirix\Money\Exception\InvalidAmountException;
use Sirix\Money\Exception\InvalidArgumentException;
use Sirix\Money\Exception\UnknownCurrencyException;

use function is_int;
use function is_string;

final readonly class MoneyFactory
{
    public function __construct(private CurrencyCatalog $currencies) {}

    /**
     * @param BigNumber|int|string $amount
     * @param Currency|int|string  $currency
     *
     * @throws InvalidAmountException
     * @throws InvalidArgumentException
     * @throws UnknownCurrencyException
     */
    public function of(mixed $amount, mixed $currency, ?Context $context = null, ?RoundingMode $rounding = null): Money
    {
        try {
            $context = $this->contextFor($context);

            return Money::of($this->assertAmount($amount), $this->resolve($currency), $context, $this->roundingFor($context, $rounding));
        } catch (MathException $exception) {
            throw new InvalidAmountException($exception->getMessage(), previous: $exception);
        } catch (\Brick\Money\Exception\UnknownCurrencyException $exception) {
            throw new UnknownCurrencyException($exception->getMessage(), previous: $exception);
        }
    }

    /**
     * @param BigNumber|int|string $amount
     * @param Currency|int|string  $currency
     *
     * @throws InvalidAmountException
     * @throws InvalidArgumentException
     * @throws UnknownCurrencyException
     */
    public function ofMinor(mixed $amount, mixed $currency, ?Context $context = null, ?RoundingMode $rounding = null): Money
    {
        try {
            $context = $this->contextFor($context);

            return Money::ofMinor(
                $this->assertAmount($amount),
                $this->resolve($currency),
                $context,
                $this->roundingFor($context, $rounding),
            );
        } catch (MathException $exception) {
            throw new InvalidAmountException($exception->getMessage(), previous: $exception);
        } catch (\Brick\Money\Exception\UnknownCurrencyException $exception) {
            throw new UnknownCurrencyException($exception->getMessage(), previous: $exception);
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownCurrencyException
     */
    private function resolve(mixed $currency): Currency
    {
        if ($currency instanceof Currency) {
            return $currency;
        }

        if (! is_int($currency) && ! is_string($currency)) {
            throw new InvalidArgumentException('Currency must be a Brick Money Currency, integer, or string.');
        }

        return $this->currencies->get($currency);
    }

    /**
     * @throws InvalidAmountException
     * @throws InvalidArgumentException
     */
    private function assertAmount(mixed $amount): BigNumber
    {
        if (! ($amount instanceof BigNumber) && ! is_int($amount) && ! is_string($amount)) {
            throw new InvalidArgumentException('Amount must be a Brick Math BigNumber, integer, or string; floats are not supported.');
        }

        try {
            return BigNumber::of($amount);
        } catch (MathException $exception) {
            throw new InvalidAmountException($exception->getMessage(), previous: $exception);
        }
    }

    private function contextFor(?Context $context): Context
    {
        return $context ?? new DefaultContext();
    }

    private function roundingFor(Context $context, ?RoundingMode $rounding): RoundingMode
    {
        if (null !== $rounding) {
            return $rounding;
        }

        return $context instanceof AutoContext ? RoundingMode::Unnecessary : RoundingMode::HalfUp;
    }
}
