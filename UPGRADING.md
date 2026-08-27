# Upgrading to 2.0

v2 is a deliberate breaking release. Replace `SirixMoney::of()`/`ofMinor()` with an injected `MoneyFactory`; replace `SirixMoney::getAmount()` and `getMinorAmount()` with `MoneyFormatter`. Amounts accept `BigNumber|int|string`: convert floats to decimal strings before calling the API.

`FiatCurrencyCode`, `CryptoCurrencyCode`, `CurrencyCode`, `CurrencyRegistry`, registration, cache setters, `clearAllCaches()`, and `isCrypto()` are removed without replacement. Use `Brick\Money\Currency`, `DefaultCurrencyCatalog`, `ArrayCurrencyCatalog`, and `CompositeCurrencyCatalog` instead. Numeric lookup resolves unique ISO, built-in digital, or explicitly application-defined non-zero identifiers. The v2 digital seed uses stable numeric identifiers `1001` through `1020`, so they can be used for persisted currency references.

The v1 cryptocurrency enum and its PHP API are removed without a compatibility layer. v2 includes only the curated 20-code digital seed; `MNT` and `ERN` now unambiguously resolve to their ISO currencies. ISO metadata comes from Brick Money, including corrected UYI/UYW fraction digits. Caching is removed because immutable in-process arrays are the fast path.
