# Sirix Money

Flexible, framework-agnostic currency catalogs and money factories for [Brick Money](https://github.com/brick/money). It provides a small, explicit application boundary around Brick's precise monetary types: resolve currencies from immutable catalogs, create money in major or minor units, and format amounts without coupling the application to a framework or global registry.

## Why Sirix Money

- **Safe monetary input** - accepts `BigNumber`, integers, and decimal strings while rejecting floats before their binary precision can alter a value.
- **Application-owned currencies** - use the built-in ISO and digital currencies, define a complete custom catalog, or compose both with clear duplicate detection.
- **Explicit, predictable construction** - create `Money` through `MoneyFactory` with documented rounding behaviour and support for major and minor units.
- **Framework and worker friendly** - immutable catalogs have no cache, container, or static global state, so they can be created once at bootstrap and shared safely.

Requires PHP 8.3-8.6 and `brick/money`.

## Install

```bash
composer require sirix/money:^2.0
```

For a source checkout, install the package normally. Development tools are opt-in:

```bash
composer install
composer tools
```

## Quick start

```php
use Sirix\Money\Currency\DefaultCurrencyCatalog;
use Sirix\Money\MoneyFactory;
use Sirix\Money\MoneyFormatter;

$factory = new MoneyFactory(new DefaultCurrencyCatalog());
$usd = $factory->of('10.90', 'usd');
echo (new MoneyFormatter())->amount($usd); // 10.9

```

`MoneyFactory` uses `HALF_UP` by default, except that `AutoContext` uses Brick's required `UNNECESSARY` rounding mode when no mode is supplied. Amounts must be `BigNumber`, `int`, or decimal `string`; floats are rejected even for applications that do not enable strict PHP types.

## Build your own catalog

An `ArrayCurrencyCatalog` can be the complete currency universe for an application. Use numeric code `0` when a custom currency has no numeric identifier.

```php
use Brick\Money\Currency;
use Sirix\Money\Currency\ArrayCurrencyCatalog;
use Sirix\Money\MoneyFactory;

$catalog = new ArrayCurrencyCatalog(
    new Currency('POINT', 0, 'Reward points', 0),
    new Currency('CREDIT', 9001, 'Store credit', 2),
);

$money = (new MoneyFactory($catalog))->of('12.50', 'CREDIT');
```

To add application currencies to the built-in ISO and digital seed, compose catalogs explicitly. Duplicate canonical string or non-zero numeric codes fail at bootstrap. String codes are not restricted to enum-shaped names.

```php
use Brick\Money\Currency;
use Sirix\Money\Currency\ArrayCurrencyCatalog;
use Sirix\Money\Currency\CompositeCurrencyCatalog;
use Sirix\Money\Currency\DefaultCurrencyCatalog;
use Sirix\Money\MoneyFactory;

$catalog = new CompositeCurrencyCatalog(
    new DefaultCurrencyCatalog(),
    new ArrayCurrencyCatalog(new Currency('POINT', 0, 'Reward points', 0)),
);

$factory = new MoneyFactory($catalog);
$points = $factory->of(100, 'POINT');
```

Use `CurrencyCatalogBuilder::replace()` only during bootstrap when deliberately replacing an existing definition.

## Major and minor units

`of()` accepts a major-unit decimal amount. `ofMinor()` accepts an integer amount in the currency's smallest unit. Use strings for values that may exceed PHP integer range.

```php
use Sirix\Money\Currency\DefaultCurrencyCatalog;
use Sirix\Money\MoneyFactory;
use Sirix\Money\MoneyFormatter;

$factory = new MoneyFactory(new DefaultCurrencyCatalog());
$formatter = new MoneyFormatter();

$usd = $factory->ofMinor('1099', 'USD');
echo $formatter->amount($usd);       // 10.99
echo $formatter->minorAmount($usd);  // 1099

$bitcoin = $factory->ofMinor('123456789', 'BTC');
echo $formatter->amount($bitcoin);   // 1.23456789
```

Catalogs are immutable and safe to construct at a long-running worker's bootstrap.

## Documentation

| Guide | Description |
| --- | --- |
| [v2 design](docs/v2-design.md) | Public contract and deliberate breaking changes |
| [Dependency injection](docs/integrations/dependency-injection.md) | Container and persistent-worker wiring |
| [Built-in currencies](docs/currencies.md) | The source-controlled digital seed and ISO metadata source |
| [Upgrading to v2](UPGRADING.md) | Migration from the v1 API |

## License

MIT. See [LICENSE](LICENSE).
