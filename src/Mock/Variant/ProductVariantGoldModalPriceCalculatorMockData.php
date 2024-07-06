<?php

namespace App\Mock\Variant;

use App\Mock\AMock;

class ProductVariantGoldModalPriceCalculatorMockData extends AMock
{
    public const QUERY_PARAMS = [
        [
            "gold_wage" => "0.17",
            "gold_profit" => "0.05",
            "none_gold_cost" => "0",
            "none_gold_wage" => "0",
            "id" => "46473275",
        ],
        [
            "gold_wage" => "0.15",
            "gold_profit" => "0.07",
            "none_gold_cost" => "0",
            "none_gold_wage" => "0",
            "id" => "54027251",
        ],
        [
            "gold_wage" => "0.32",
            "gold_profit" => "0.07",
            "none_gold_cost" => "0",
            "none_gold_wage" => "0",
            "id" => "54761269",
        ],
    ];

    public const ITEMS = [
        [
            "price" => [
                "variantId" => 46473275,
                "sellingPrice" => 2158500,
                "isActive" => true,
                "hasStock" => true,
                "isWinnerBuyBox" => true,
                "isGold" => true,
            ],
        ],
        [
            "price" => [
                "variantId" => 54027251,
                "sellingPrice" => 598576700,
                "isActive" => true,
                "hasStock" => true,
                "isWinnerBuyBox" => false,
                "isGold" => true,
            ],
        ],
        [
            "price" => [
                "variantId" => 54761269,
                "sellingPrice" => 77964400,
                "isActive" => true,
                "hasStock" => true,
                "isWinnerBuyBox" => true,
                "isGold" => true,
            ],
        ],
    ];
}