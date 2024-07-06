<?php

namespace App\Mock\Order;

use App\Mock\AMock;

class SellerOVLMockData extends AMock
{
    public const ITEMS = [
        [
            "ovl" => [
                "limit" => null,
                "is_active" => true,
                "daily_sales" => 0
            ],
        ],
        [
            "ovl" => [
                "limit" => 10,
                "is_active" => false,
                "daily_sales" => 2
            ],
        ]
    ];
}