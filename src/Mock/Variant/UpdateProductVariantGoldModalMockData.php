<?php

namespace App\Mock\Variant;

use App\Mock\AMock;

class UpdateProductVariantGoldModalMockData extends AMock
{
    public const RESPONSE200 = [
        [
            "status" => "success",
            "did_b2b_deactivate" => false,
        ],
    ];

    public const ERRORS = [
        [
            'variant_id' => [
                'این قسمت نباید خالی باشد',
                'مقدار وارد شده باید عددی باشد',
            ],
            'gold_profit' => [
                'این قسمت نباید خالی باشد',
                'مقدار وارد شده باید اعشاری باشد',
            ],
            'gold_wage' => [
                'این قسمت نباید خالی باشد',
                'مقدار وارد شده باید اعشاری باشد',
            ],
            'order_limit' => [
                'این قسمت نباید خالی باشد',
                'مقدار وارد شده باید عددی باشد',
            ],
        ]
    ];
}