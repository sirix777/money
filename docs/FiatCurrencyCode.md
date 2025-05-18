# FiatCurrencyCode Enum

An enum class that defines standardized currency codes for fiat currencies.

## Usage

```php
use Sirix\Money\FiatCurrencyCode;

// Access currency code
$usdCode = FiatCurrencyCode::Usd->value; // Returns "USD"

// Check if currency code exists
$isValid = FiatCurrencyCode::tryFrom('USD') !== null; // Returns true

// Get all available currency codes
$allCases = FiatCurrencyCode::cases();
```

## Available Fiat Currency Codes

For a complete list of available fiat currency codes, refer to the [FullFiatCurrencyList](./FullFiatCurrencyList.md).

## Features

- Strongly typed currency codes
- Case-sensitive string values
- Built-in validation through enum functionality
- Comprehensive coverage of ISO 4217 fiat currencies

## Validation

The enum provides built-in validation through PHP's enum functionality. Invalid currency codes will return `null` when using `tryFrom()`.

## Integration

This enum is designed to work seamlessly with the Sirix Money library's currency handling features. It's particularly useful when:

- Creating new money instances with fiat currencies
- Validating fiat currency codes
- Working with fiat currency transactions
- Implementing currency-specific business logic

## Notes

- All currency codes are stored in uppercase
- The enum is backed by string values
- Currency codes follow the ISO 4217 standard for fiat currencies