<?php

declare(strict_types=1);

namespace Sirix\Money\Test\Currency;

use Brick\Money\Currency;
use PHPUnit\Framework\TestCase;
use Sirix\Money\Currency\ArrayCurrencyCatalog;
use Sirix\Money\Exception\DuplicateCurrencyException;
use Sirix\Money\Exception\InvalidArgumentException;
use Sirix\Money\Exception\UnknownCurrencyException;

use function array_keys;

final class ArrayCurrencyCatalogTest extends TestCase
{
    public function testIndexesCanonicalAndNumericCodes(): void
    {
        $catalog = new ArrayCurrencyCatalog(new Currency('usd', 840, 'Dollar', 2));
        self::assertSame('USD', $catalog->get('uSd')->getCurrencyCode());
        self::assertSame('USD', $catalog->get(840)->getCurrencyCode());
        self::assertSame(['USD'], array_keys($catalog->all()));
    }

    public function testAcceptsNonEnumShapedStringCodes(): void
    {
        $catalog = new ArrayCurrencyCatalog(new Currency('a-1', 9001, 'Application token', 2));

        self::assertSame('A-1', $catalog->get(' A-1 ')->getCurrencyCode());
        self::assertSame('A-1', $catalog->get(9001)->getCurrencyCode());
    }

    public function testRejectsDuplicatesAndEmptyLookup(): void
    {
        $this->expectException(DuplicateCurrencyException::class);
        new ArrayCurrencyCatalog(new Currency('USD', 840, 'Dollar', 2), new Currency('usd', 0, 'Other', 2));
    }

    public function testUnknownValuesUseCatalogException(): void
    {
        $catalog = new ArrayCurrencyCatalog();
        self::assertFalse($catalog->has(' '));
        $this->expectException(UnknownCurrencyException::class);
        $catalog->get(0);
    }

    public function testRejectsInvalidLookupCodeWithLibraryException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        (new ArrayCurrencyCatalog())->get(840.0);
    }
}
