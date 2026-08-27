# Changelog

All notable changes to the Sirix Money library will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.0.0] - 2026-08-27

### Breaking
- Replaced mutable registries, enums, static construction, classification, and mandatory cache support with immutable injected catalogs and `MoneyFactory`.
- Removed float amount input and v1 crypto enum/synthetic-numeric compatibility.

### Changed
- PHP 8.2 is the minimum supported version. ISO metadata now comes from Brick Money; the default digital seed is 20 curated currencies with stable numeric identifiers `1001` through `1020`.
- See [UPGRADING.md](UPGRADING.md) for migration details.

## [1.2.0] - 31/05/2025

### Added
- New `CurrencyCode` utility class for creating currency code enum objects from numeric codes
- Added `fromNumericCode` method to both `CryptoCurrencyCode` and `FiatCurrencyCode` enums
- Updated documentation to include examples of the new functionality

## [1.1.0] - 18/05/2025

### Added
- New `CryptoCurrencyCode` enum for standardized and strongly typed handling of cryptocurrency codes
- New `FiatCurrencyCode` enum for standardized handling of fiat currency codes
- New `CurrencyType` enum to distinguish between fiat and crypto currencies
- Special handling for cryptocurrency codes with numeric prefixes

### Changed
- Simplified cryptocurrency codes that previously had the `_CRYPTO` suffix:
  - `MNT_CRYPTO` is now `MNT` (Mantle)
  - `ERN_CRYPTO` is now `ERN` (Ethernity Chain)
- Updated documentation to reflect the cryptocurrency code changes
- Replaced the old `CurrencyCode` class with separate enums for better type safety

## [1.0.5] - 19/02/2025

### Added
- Initial release of Sirix Money library
- Support for both traditional (fiat) and cryptocurrency values
- Safe and accurate monetary value handling
- Configurable caching system
- Custom currency registration
- Proper handling of minor currency units (cents, satoshi, etc.)
- Strict type checking and comprehensive error handling
- Special handling for currencies with numeric prefixes
- Comprehensive documentation
