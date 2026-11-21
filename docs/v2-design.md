# v2 design contract

v2 requires PHP 8.3-8.6 and is a clean break from v1. Its public services are `CurrencyCatalog`, `ArrayCurrencyCatalog`, `CompositeCurrencyCatalog`, `DefaultCurrencyCatalog`, `MoneyFactory`, and `MoneyFormatter`. Public boundaries validate the documented `BigNumber|int|string` amount and `Currency|int|string` currency inputs at runtime: they use `mixed` signatures to reject weak-mode PHP float coercion before it can change a monetary value.

Catalogs are immutable after construction. They eagerly index canonical uppercase non-empty string codes and unique non-zero numeric codes; code lookup is case-insensitive. Codes are not limited to an enum-shaped alphabet, so application catalogs may use values such as `A1` or `X-CHAIN`. Numeric `0` means no numeric identifier. Duplicate codes or non-zero numeric values fail at bootstrap. `CurrencyCatalogBuilder::replace()` is the only explicit replacement operation and produces a final validated catalog.

`DefaultCurrencyCatalog` obtains ISO metadata from Brick Money and adds exactly the source-controlled 20-currency digital seed. Each seed currency has a stable non-zero numeric identifier (`1001` through `1020`) suitable for persisted catalog references. There is no fiat/crypto classification, no global registry, cache, static construction API, or runtime configuration-file parsing. Direct `Brick\Money\Currency` input bypasses a catalog.

The core has no cache, framework, container, PSR-3, worker-runtime, or PSR-11 dependency and emits no logs. Unknown catalog values throw `Sirix\Money\Exception\UnknownCurrencyException`; duplicate definitions throw `DuplicateCurrencyException`. Brick Math and rounding exceptions are intentionally not wrapped.

Non-goals: exchange rates, tenant context, localization, blockchain identity, mutable registration, and migration support for removed v1 cryptocurrency enum values.
