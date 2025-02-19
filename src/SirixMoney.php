<?php

declare(strict_types=1);

namespace Sirix\Money;

use Brick\Math\BigNumber;
use Brick\Math\RoundingMode;
use Brick\Money\Context;
use Brick\Money\Money;
use Sirix\Money\Exception\CacheException;
use Sirix\Money\Exception\InvalidArgumentException;
use Sirix\Money\Exception\SirixMoneyException;
use Sirix\Money\Exception\UnknownCurrencyException;
use Throwable;

use function rtrim;
use function str_contains;

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
        RoundingMode $rounding = self::DEFAULT_ROUNDING,
    ): Money {
        try {
            $currency = CurrencyRegistry::getInstance()->get(self::getCurrencyCode($currencyCode));

            return Money::of(BigNumber::of($amount), $currency, $context, $rounding);
        } catch (Throwable $e) {
            throw self::wrapException($e, "Failed to create Money instance with amount: {$amount}");
        }
    }

    /**
     * @throws SirixMoneyException
     */
    public static function ofMinor(
        BigNumber|float|int|string $amount,
        CurrencyCode|string $currencyCode,
        ?Context $context = null,
        RoundingMode $roundingMode = self::DEFAULT_ROUNDING,
    ): Money {
        try {
            $currency = CurrencyRegistry::getInstance()->get(self::getCurrencyCode($currencyCode));

            return Money::ofMinor(BigNumber::of($amount), $currency, $context, $roundingMode);
        } catch (Throwable $e) {
            throw self::wrapException($e, "Failed to create Money instance from minor units with amount: {$amount}");
        }
    }

    /**
     * @throws SirixMoneyException
     */
    public static function isCrypto(string $currencyCode): bool
    {
        try {
            return CurrencyRegistry::getInstance()->isCrypto($currencyCode);
        } catch (Throwable $e) {
            throw self::wrapException($e, "Failed to determine if currency is crypto: {$currencyCode}");
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
        if (str_contains($amount, '.')) {
            return rtrim(rtrim($amount, '0'), '.');
        }

        return $amount;
    }

    private static function wrapException(Throwable $exception, string $message): SirixMoneyException
    {
        return match ($exception::class) {
            CacheException::class => new CacheException(
                $message . '. Error: ' . $exception->getMessage(),
                $exception->getCode(),
                $exception
            ),
            InvalidArgumentException::class => new InvalidArgumentException(
                $message . '. Error: ' . $exception->getMessage(),
                $exception->getCode(),
                $exception,
            ),
            UnknownCurrencyException::class => new UnknownCurrencyException(
                $message . '. Error: ' . $exception->getMessage(),
                $exception->getCode(),
                $exception,
            ),
            default => new SirixMoneyException($message . '. Error: ' . $exception->getMessage(), $exception->getCode(), $exception),
        };
    }
}
