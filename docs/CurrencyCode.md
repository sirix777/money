# CurrencyCode Utility Class

A utility class for creating currency code enum objects from numeric codes.

## Usage

```php
use Sirix\Money\CurrencyCode;
use Sirix\Money\FiatCurrencyCode;
use Sirix\Money\CryptoCurrencyCode;

// Create a FiatCurrencyCode from a numeric code
$usd = CurrencyCode::fromNumericCode(840); // Returns FiatCurrencyCode::Usd

// Create a CryptoCurrencyCode from a numeric code
$btc = CurrencyCode::fromNumericCode(1004); // Returns CryptoCurrencyCode::Btc

// The class automatically determines the correct type based on the numeric code
$result = CurrencyCode::fromNumericCode(978); // Returns FiatCurrencyCode::Eur
$result = CurrencyCode::fromNumericCode(1007); // Returns CryptoCurrencyCode::Eth
```

## Features

- Automatically determines whether to create a FiatCurrencyCode or CryptoCurrencyCode based on the numeric code
- Provides a unified interface for creating currency code enum objects from numeric codes
- Handles exceptions and provides meaningful error messages

## How It Works

The `CurrencyCode` class uses the following logic to determine which type of currency code to create:

- Numeric codes < 1000 are treated as fiat currencies and passed to `FiatCurrencyCode::fromNumericCode()`
- Numeric codes >= 1000 are treated as cryptocurrencies and passed to `CryptoCurrencyCode::fromNumericCode()`

If the numeric code is not recognized by either enum, an `InvalidArgumentException` is thrown.

## Integration

This class is designed to work seamlessly with the Sirix Money library's currency handling features. It's particularly useful when:

- Working with numeric currency codes from external systems
- Implementing currency conversion logic
- Building interfaces that need to handle both fiat and crypto currencies
- Simplifying code that needs to determine the type of currency from a numeric code

## Related Resources

- [FiatCurrencyCode.md](./FiatCurrencyCode.md) - Detailed documentation about fiat currency codes
- [CryptoCurrencyCode.md](./CryptoCurrencyCode.md) - Detailed documentation about cryptocurrency codes