# Dependency injection

Create immutable shared services once during container or worker bootstrap:

```php
use Sirix\Money\Currency\ArrayCurrencyCatalog;
use Sirix\Money\Currency\CompositeCurrencyCatalog;
use Sirix\Money\Currency\CurrencyCatalogBuilder;
use Sirix\Money\Currency\DefaultCurrencyCatalog;
use Sirix\Money\MoneyFactory;

$catalog = new DefaultCurrencyCatalog();
$money = new MoneyFactory($catalog);
```

For application currencies, compose `new CompositeCurrencyCatalog($catalog, new ArrayCurrencyCatalog(...$currencies))`. Use `CurrencyCatalogBuilder::replace()` only while bootstrapping. No Mezzio bridge is shipped: this generic recipe is sufficient and keeps the core free of PSR-11 and framework dependencies.
