<?php

namespace App\Mock\Variant;

use App\Mock\AMock;

class ProductVariantB2BModalMockData extends AMock
{
    public const ITEMS = [
        [
            "active" => true,
            "buckets" => [
                ["min" => 15, "max" => null, "sellingPrice" => 5900000],
            ],
        ],
        [
            "active" => false,
            "buckets" => [],
        ],
        [
            "active" => false,
            "buckets" => [
                ["min" => 1, "max" => null, "sellingPrice" => 70039000],
            ],
        ],
    ];
}