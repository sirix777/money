# CryptoCurrencyCode Enum

An enum class that defines standardized currency codes for cryptocurrencies.

## Usage

```php
use Sirix\Money\CryptoCurrencyCode;

// Access currency code
$btcCode = CryptoCurrencyCode::Btc->value; // Returns "BTC"

// Check if currency code exists
$isValid = CryptoCurrencyCode::tryFrom('BTC') !== null; // Returns true

// Get all available currency codes
$allCases = CryptoCurrencyCode::cases();

// Create from numeric code
$btc = CryptoCurrencyCode::fromNumericCode(1004); // Returns CryptoCurrencyCode::Btc

// Alternative: use CurrencyCode utility class
use Sirix\Money\CurrencyCode;
$btc = CurrencyCode::fromNumericCode(1004); // Returns CryptoCurrencyCode::Btc
```

## Available Cryptocurrency Codes

For a complete list of available cryptocurrency codes, refer to the [FullCryptoCurrencyList](./FullCryptoCurrencyList.md).

## Features

- Strongly typed currency codes
- Case-sensitive string values
- Built-in validation through enum functionality
- Comprehensive coverage of major cryptocurrencies and tokens

## Special Naming Conventions

### Numeric Prefix Handling
For cryptocurrency codes that begin with numbers (like `1INCH`), the enum case name uses a descriptive word format instead of the number for PHP compatibility:
- Case name: `OneInch`
- Actual value: `'1INCH'`

This is because PHP enum cases cannot start with a number, so we use a readable word representation while preserving the actual cryptocurrency code value.

## Validation

The enum provides built-in validation through PHP's enum functionality. Invalid currency codes will return `null` when using `tryFrom()`.

## Integration

This enum is designed to work seamlessly with the Sirix Money library's currency handling features. It's particularly useful when:

- Creating new money instances with cryptocurrencies
- Validating cryptocurrency codes
- Working with cryptocurrency transactions
- Implementing currency-specific business logic

## Notes

- All currency codes are stored in uppercase
- The enum is backed by string values
- Currency codes follow common cryptocurrency exchange conventions
