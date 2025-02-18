# CurrencyCode Enum

An enum class that defines standardized currency codes for cryptocurrencies.

## Usage

```php
use Sirix\Money\CurrencyCode;

// Access currency code
$btcCode = CurrencyCode::Btc->value; // Returns "BTC"

// Check if currency code exists
$isValid = CurrencyCode::tryFrom('BTC') !== null; // Returns true

// Get all available currency codes
$allCases = CurrencyCode::cases();
```


## Available Cryptocurrency Codes

For a complete list of available cryptocurrency codes, refer to the [FullCryptoCurrencyList](./FullCryptoCurrencyList.md).

For a complete list of available fiat currency codes, refer to the [FullFiatCurrencyList](./FullFiatCurrencyList.md).

## Features

- Strongly typed currency codes
- Case-sensitive string values
- Built-in validation through enum functionality
- Comprehensive coverage of major cryptocurrencies and tokens


## Validation

The enum provides built-in validation through PHP's enum functionality. Invalid currency codes will return `null` when using `tryFrom()`.

## Integration

This enum is designed to work seamlessly with the Sirix Money library's currency handling features. It's particularly useful when:

- Creating new money instances
- Validating currency codes
- Working with cryptocurrency transactions
- Implementing currency-specific business logic

## Notes

- All currency codes are stored in uppercase
- The enum is backed by string values
- Currency codes follow common cryptocurrency exchange conventions
