<?php

declare(strict_types=1);

namespace Sirix\Money\Test\Lifecycle;

use PHPUnit\Framework\TestCase;
use Sirix\Money\Currency\DefaultCurrencyCatalog;

use function memory_get_usage;

final class MemoryStabilityTest extends TestCase
{
    public function testRepeatedReadsDoNotGrowCatalogState(): void
    {
        $catalog = new DefaultCurrencyCatalog();
        $before  = memory_get_usage();
        for ($i = 0; $i < 100000; ++$i) {
            $catalog->get('BTC');
        }
        self::assertLessThan(1_000_000, memory_get_usage() - $before);
    }
}
