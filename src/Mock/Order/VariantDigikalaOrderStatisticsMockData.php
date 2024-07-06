<?php

namespace App\Mock\Order;

use App\Mock\AMock;

class VariantDigikalaOrderStatisticsMockData extends AMock
{
    public const ITEMS = [
        [
            "tomorrow_commitments_count" => 1,
            "is_committed_tomorrow_orders_per_day" => [
                "2024-07-06" => 1,
            ],
            "package_creation_date" => "7",
        ],
        [
            "tomorrow_commitments_count" => 2,
            "is_committed_tomorrow_orders_per_day" => [
                "2024-07-04" => 2,
            ],
            "package_creation_date" => "7",
        ],
        [
            "tomorrow_commitments_count" => 2,
            "is_committed_tomorrow_orders_per_day" => [
                "2024-07-04" => 1,
                "2024-07-06" => 1,
            ],
            "package_creation_date" => "7",
        ],
    ];
}