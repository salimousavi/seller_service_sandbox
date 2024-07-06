<?php

namespace App\Mock\Variant;

use App\Mock\AMock;

class UpdateProductVariantB2BPricesMockData extends AMock
{
    public const RESPONSE200 = [
        ["message" => "success"],
    ];

    public const ERRORS = [
        [
            "قیمت وارد شده در بازه قیمت مجاز قرار ندارد.",
        ],
        [
            "variant_id" => [
                'این قسمت نباید خالی باشد',
                'مقدار وارد شده باید عددی باشد',
                "تنوع کالایی معتبر نیست",
            ],
            'b2b_prices' => [
                'این قسمت نباید خالی باشد',

            ],
            'active' => [
                'این قسمت نباید خالی باشد',
            ],
        ]
    ];
}