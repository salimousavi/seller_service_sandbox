<?php

namespace App\Mock\Inventory;

use App\Mock\AMock;

class SellerInventoriesDeadStockMockData extends AMock
{
    public const ITEMS = [
        [
            [
                "item_serial" => "D3EBC5EF",
                "age" => 0,
                "is_passed_discount_period" => "خیر",
                "discount_period" => "30",
                "current_warehouse_title" =>
                    "انبار کالاهای معیوب فروشندگان",
            ],
        ],
        [
            [
                "item_serial" => "A98B4C4C",
                "age" => 0,
                "is_passed_discount_period" => "خیر",
                "discount_period" => "30",
                "current_warehouse_title" =>
                    "انبار پذیرش خدمات پس از فروش",
            ],
        ],
        [
            [
                "item_serial" => "945DC2A3",
                "age" => 0,
                "is_passed_discount_period" => "خیر",
                "discount_period" => "30",
                "current_warehouse_title" =>
                    "انبار دانش",
            ],
            [
                "item_serial" => "5EE96DEB",
                "age" => 3,
                "is_passed_discount_period" => "خیر",
                "discount_period" => "30",
                "current_warehouse_title" =>
                    "انبار کالاهای معیوب فروشندگان",
            ],
        ]
    ];

    public const META_DATA = [
        "product_variant_tile" =>
            "سرم دور چشم بایو آکوآ مدل BALL DESIGN حجم 15 میلی لیتر | گارانتی اصالت و سلامت فیزیکی کالا",
        "product_id" => 4103958,
        "product_variant_id" => 45562176,
        "supplier_code" => null,
        "product_url" =>
            "https://www.digikala.com/product/dkp-4103958/",
        "img_src" =>
            "https://dkstatics-public.digikala.com/digikala-products/b774a9201ec79df8d14c237618662e6db7ee2b53_1609245650.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
    ];
}