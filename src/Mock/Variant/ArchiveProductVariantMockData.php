<?php

namespace App\Mock\Variant;

use App\Mock\AMock;

class ArchiveProductVariantMockData extends AMock
{
    public const RESPONSE200 = [
        ["message" => "success"],
    ];

    public const ERRORS = [
        [
            'archive' => [
                'این قسمت نباید خالی باشد',
            ],
            'variant_id' => [
                'این قسمت نباید خالی باشد',
                'مقدار وارد شده باید عددی باشد',
            ],
        ]
    ];
}