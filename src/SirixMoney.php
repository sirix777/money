<?php

declare(strict_types=1);

namespace Sirix\Money;

use Brick\Math\BigNumber;
use Brick\Math\Exception\DivisionByZeroException;
use Brick\Math\Exception\MathException;
use Brick\Math\Exception\NumberFormatException;
use Brick\Math\Exception\RoundingNecessaryException;
use Brick\Math\RoundingMode;
use Brick\Money\Context;
use Brick\Money\Money;
use Sirix\Money\Exception\InvalidAmountException;
use Sirix\Money\Exception\SirixMoneyException;
use Sirix\Money\Exception\UnknownCurrencyException;
use Sirix\Money\Exception\UnsupportedCurrencyException;

use function rtrim;

class SirixMoney
{
    private const DEFAULT_ROUNDING = RoundingMode::HALF_UP;

    /**
     * @throws SirixMoneyException
     */
    public static function of(
        BigNumber|float|int|string $amount,
        CurrencyCode|string $currencyCode,
        ?Context $context = null,
        RoundingMode $rounding = self::DEFAULT_ROUNDING
    ): Money {
        try {
            $currency = CurrencyRegistry::getInstance()->get(self::getCurrencyCode($currencyCode));

            return Money::of(BigNumber::of($amount), $currency, $context, $rounding);
        } catch (MathException $e) {
            throw new InvalidAmountException("Invalid amount: {$amount}. Error: " . $e->getMessage());
        } catch (\Brick\Money\Exception\UnknownCurrencyException|UnknownCurrencyException $e) {
            throw new UnsupportedCurrencyException('Unsupported currency. Error: ' . $e->getMessage());
        }
    }

    /**
     * @throws SirixMoneyException
     */
    public static function ofMinor(
        BigNumber|float|int|string $amount,
        CurrencyCode|string $currencyCode,
        ?Context $context = null,
        RoundingMode $roundingMode = self::DEFAULT_ROUNDING
    ): Money {
        try {
            $currency = CurrencyRegistry::getInstance()->get(self::getCurrencyCode($currencyCode));

            return Money::ofMinor(BigNumber::of($amount), $currency, $context, $roundingMode);
        } catch (\Brick\Money\Exception\UnknownCurrencyException|UnknownCurrencyException $e) {
            throw new UnsupportedCurrencyException('Unsupported currency. Error: ' . $e->getMessage());
        } catch (NumberFormatException $e) {
            throw new SirixMoneyException("Invalid format amount: {$amount}. Error: " . $e->getMessage());
        } catch (RoundingNecessaryException $e) {
            throw new SirixMoneyException('Rounding necessary. Error: ' . $e->getMessage());
        } catch (DivisionByZeroException $e) {
            throw new SirixMoneyException('Division by zero. Error: ' . $e->getMessage());
        }
    }

    /**
     * @throws SirixMoneyException
     */
    public static function isCrypto(string $currencyCode): bool
    {
        try {
            return CurrencyRegistry::getInstance()->isCrypto($currencyCode);
        } catch (UnknownCurrencyException $e) {
            throw new UnsupportedCurrencyException('Unsupported currency. Error: ' . $e->getMessage());
        }
    }

    public static function getAmount(Money $money, bool $withoutTrailingZeros = true): string
    {
        return $withoutTrailingZeros
            ? self::removeTrailingZeros((string) $money->getAmount())
            : (string) $money->getAmount();
    }

    public static function getMinorAmount(Money $money): string
    {
        return (string) $money->getMinorAmount();
    }

    private static function getCurrencyCode(CurrencyCode|string $currencyCode): string
    {
        return $currencyCode instanceof CurrencyCode ? $currencyCode->value : $currencyCode;
    }

    private static function removeTrailingZeros(string $amount): string
    {
        return rtrim(rtrim($amount, '0'), '.');
    }
}
