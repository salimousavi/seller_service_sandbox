<?php

namespace App\Mock\Variant;

use App\Mock\AMock;

class UpdateVariantStockMockData extends AMock
{
    public const RESPONSE200 = [
        ['message' => 'seller stock updated'],
    ];

    public const ERRORS = [
        'variant_id' => [
            'این قسمت نباید خالی باشد',
            'مقدار وارد شده باید عددی باشد',
        ],
        'seller_stock' => [
            'این قسمت نباید خالی باشد',
            'مقدار وارد شده باید عددی باشد',
        ],
    ];
}