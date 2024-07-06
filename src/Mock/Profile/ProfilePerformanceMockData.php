<?php

namespace App\Mock\Profile;

use App\Mock\AMock;

class ProfilePerformanceMockData extends AMock
{
    public const ITEMS = [
        [
            "five_start_rate" => 3,
            "customer_statisfaction" => [
                "rate" => 77.4,
                "rate_count" => 15,
            ],
            "summary" => [
                "delivered_on_time_percentage" => 100,
                "not_canceled_percentage" => 100,
                "not_returned_percentage" => 83.33,
            ],
        ],
        [
            "five_start_rate" => 0,
            "customer_statisfaction" => [
                "rate" => 0,
                "rate_count" => 0,
            ],
            "summary" => [
                "delivered_on_time_percentage" => 100,
                "not_canceled_percentage" => 100,
                "not_returned_percentage" => 100,
            ],
        ],
        [
            "five_start_rate" => 4.5,
            "customer_statisfaction" => [
                "rate" => 82,
                "rate_count" => 210,
            ],
            "summary" => [
                "delivered_on_time_percentage" => 97.11999999999999,
                "not_canceled_percentage" => 100,
                "not_returned_percentage" => 100,
            ],
        ],
    ];
}