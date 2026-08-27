<?php

declare(strict_types=1);

// Machine-readable retained v1 behavior. Cryptocurrency enum values are deliberately absent.
return [
    'iso'     => [
        'USD' => [
            'numeric'         => 840,
            'fraction_digits' => 2,
        ],
        'EUR' => [
            'numeric'         => 978,
            'fraction_digits' => 2,
        ],
        'UYI' => [
            'fraction_digits' => 2,
        ],
        'UYW' => [
            'fraction_digits' => 4,
        ],
    ],
    'money'   => [
        'rounding'     => 'HALF_UP',
        'amount_input' => ['BigNumber', 'int', 'string'],
        'formatting'   => [
            'trim_trailing_zeros' => true,
        ],
    ],
    'removed' => ['FiatCurrencyCode', 'CryptoCurrencyCode', 'CurrencyCode', 'CurrencyRegistry', 'SirixMoney'],
];
