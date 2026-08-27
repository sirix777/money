<?php

declare(strict_types=1);

namespace Sirix\Money\Test\Lifecycle;

use PHPUnit\Framework\TestCase;
use Sirix\Money\Currency\DefaultCurrencyCatalog;
use Sirix\Money\MoneyFactory;

use function memory_get_usage;

final class PersistentWorkerTest extends TestCase
{
    public function testSharedServicesHaveNoRequestTimeMutation(): void
    {
        $catalog = new DefaultCurrencyCatalog();
        $factory = new MoneyFactory($catalog);
        $before  = memory_get_usage();
        for ($i = 0; $i < 100000; ++$i) {
            self::assertSame('USD', $factory->of('1', 'usd')->getCurrency()->getCurrencyCode());
        }
        self::assertLessThan(2_000_000, memory_get_usage() - $before);
    }
}
