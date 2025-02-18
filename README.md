# Sirix Money

A PHP library for handling monetary values with support for both traditional (fiat) and cryptocurrencies. Built on top of [brick/money](https://github.com/brick/money) with additional features and safeguards.

## Features

- Safe and accurate monetary value handling
- Support for both traditional and cryptocurrency values
- Configurable caching system
- Custom currency registration
- Proper handling of minor currency units (cents, satoshi, etc.)
- Strict type checking and comprehensive error handling

## Requirements

- PHP 8.1 or higher
- [brick/money](https://github.com/brick/money)
- [psr/cache](https://github.com/php-fig/cache) (for caching support)

## Installation

Install via Composer:

```bash
composer require sirix/money
```

## Basic Usage

### Creating Monetary Values

```php
use Brick\Money\Context\AutoContext;
use Brick\Money\Context\CustomContext;
use Sirix\Money\CurrencyCode;
use Sirix\Money\SirixMoney;
use Brick\Math\RoundingMode;

// Basic usage with default context and rounding
$amount = SirixMoney::of(10.99, CurrencyCode::Usd);

// Advanced usage with custom context and rounding mode
$amount = SirixMoney::of(
    amount: 10.99,
    currencyCode: CurrencyCode::Usd,
    context: new CustomContext(scale: 5), // Custom context
    rounding: RoundingMode::UP
);

// Create from minor units (cents) with default settings
$cents = SirixMoney::ofMinor(1099, CurrencyCode::Usd);

// Create from minor units with custom context and rounding
$cents = SirixMoney::ofMinor(
    amount: 1099,
    currencyCode: 'USD',
    context: new AutoContext(),
    roundingMode: RoundingMode::DOWN
);

// Check if currency is crypto
$isCrypto = SirixMoney::isCrypto('BTC'); // returns true

// Create a money object with trailing zeros
$money = SirixMoney::of('10.90', CurrencyCode::Bch);

// Get amount with trailing zeros removed (default behavior)
$withoutZeros = SirixMoney::getAmount($money); // returns "10.9"

// Get amount keeping trailing zeros
$withZeros = SirixMoney::getAmount($money, withoutTrailingZeros: false); // returns "10.90000000"

// Example with more decimal places
$precise = SirixMoney::of('10.50000', CurrencyCode::Bch);
echo SirixMoney::getAmount($precise); // displays: "10.5"
echo SirixMoney::getAmount($precise, false); // displays: "10.50000000"

// Minor amounts are always returned as full integers
$minorAmount = SirixMoney::getMinorAmount($money); // returns "1050000000"

```

### Currency Registry Configuration

```php
use Sirix\Money\CurrencyRegistry;
use Brick\Money\Currency;

// Get the registry instance
$registry = CurrencyRegistry::getInstance();

// Configure caching
$registry->setCache($psr6CacheImplementation);
$registry->setCachePrefix('custom_prefix_'); //change cache prefix (if necessary)
$registry->setCacheTtl(7200); //set cache ttl (default: 86400 sec)
// Add custom currency
$customCurrency = new Currency('XYZ', 999, 'Custom Currency', 2);
$registry->addCustomCurrency($customCurrency, true); // true for crypto, false for fiat
```

## Error Handling

The library uses specific exceptions for different error cases:

- `UnknownCurrencyException` - When using an unsupported currency
- `InvalidAmountException` - When providing invalid monetary amounts
- `UnsupportedCurrencyException` - When attempting to use an unsupported currency
- `CacheException` - When cache operations fail
- `SirixMoneyException` - Base exception class for general errors

## Features in Detail

### Default Rounding Mode

The library uses `RoundingMode::HALF_UP` as the default rounding mode. This can be overridden by passing a different rounding mode to the `of()` or `ofMinor()` methods.

### Context Support

Both `of()` and `ofMinor()` methods support an optional `Context` parameter, allowing you to specify custom decimal places and other context-specific settings.

### Cache Integration

The library supports PSR-6 compatible cache implementations:

```php
$registry = CurrencyRegistry::getInstance();
$registry->setCache($cachePool);
$registry->setCachePrefix('my_app_');
```

# CurrencyCode Enum

An enum class that defines standardized currency codes for cryptocurrencies.

## Special Naming Conventions

### _CRYPTO Suffix
When a cryptocurrency code conflicts with an existing fiat currency code, the suffix `_CRYPTO` is appended to differentiate it. For example:
- `MNT_CRYPTO` - The cryptocurrency version of MNT (to distinguish from Mongolian Tugrik)
- `SOS_CRYPTO` - The cryptocurrency version of SOS (to distinguish from Somali Shilling)
- `ERN_CRYPTO` - The cryptocurrency version of ERN (to distinguish from Eritrean Nakfa)

### Numeric Prefix Handling
For cryptocurrency codes that begin with numbers (like `1INCH`), the enum case name uses a descriptive word format instead of the number for PHP compatibility:
- Case name: `OneInch`
- Actual value: `'1INCH'`

This is because PHP enum cases cannot start with a number, so we use a readable word representation while preserving the actual cryptocurrency code value.

## Documentation
For complete information about working with currencies in the Sirix Money library, including how to handle both cryptocurrency and fiat currency values, please refer to the [CurrencyCode enum documentation](./docs/CurrencyCode.md).

## Related Resources
- [README.md](README.md) - Main library documentation and usage examples
- [CurrencyCode.md](./docs/CurrencyCode.md) - Detailed documentation about currency codes and their usage
- [FullCryptoCurrencyList.md](./docs/FullCryptoCurrencyList.md) - Complete List of Available Cryptocurrency Codes
- [FullFiatCurrencyList.md](./docs/FullFiatCurrencyList.md) - Complete List of Available Fiat Currency Codes


## License

MIT License
