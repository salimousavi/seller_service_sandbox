<?php

namespace App\Mock\Order;

use App\Mock\AMock;

class VariantOrdersMockData extends AMock
{
    public const SORT = [
        "sort_column" => "commitment_date",
        "sort_order" => "asc",
        "sort_columns" => [
            "commitment_date",
            "order_created_at",
        ],
    ];

    public const ITEMS = [
        [
            [
                "order_id" => 250904246,
                "order_item_id" => 793585065,
                "order_item_created_at" =>
                    "2024-07-02T18:31:46.000000+03:30",
                "warehouse_status_at" =>
                    "2024-07-02T18:33:01.000000+03:30",
                "quantity" => 1,
                "commitment_date" =>
                    "2024-07-03T00:00:00.000000+03:30",
                "selling_price" => 530000,
                "amazing_discount" => 0,
                "total_price" => 530000,
                "can_be_canceled" => true,
            ],
        ],
        [
            [
                "order_id" => 250781310,
                "order_item_id" => 793200782,
                "order_item_created_at" =>
                    "2024-07-01T18:42:47.000000+03:30",
                "warehouse_status_at" =>
                    "2024-07-01T18:46:57.000000+03:30",
                "quantity" => 1,
                "commitment_date" =>
                    "2024-07-02T00:00:00.000000+03:30",
                "selling_price" => 1262900,
                "amazing_discount" => 0,
                "total_price" => 1262900,
                "can_be_canceled" => true,
            ],
            [
                "order_id" => 250861026,
                "order_item_id" => 793453562,
                "order_item_created_at" =>
                    "2024-07-02T12:38:25.000000+03:30",
                "warehouse_status_at" =>
                    "2024-07-02T12:41:05.000000+03:30",
                "quantity" => 1,
                "commitment_date" =>
                    "2024-07-03T00:00:00.000000+03:30",
                "selling_price" => 1262900,
                "amazing_discount" => 0,
                "total_price" => 1262900,
                "can_be_canceled" => true,
            ],
            [
                "order_id" => 220784977,
                "order_item_id" => 695643330,
                "order_item_created_at" =>
                    "2023-11-21T15:10:45.000000+03:30",
                "warehouse_status_at" => null,
                "quantity" => 1,
                "commitment_date" => null,
                "selling_price" => 990000,
                "amazing_discount" => 0,
                "total_price" => 990000,
                "can_be_canceled" => false,
            ],
        ],
        [
            [
                "order_id" => 250910604,
                "order_item_id" => 793604330,
                "order_item_created_at" =>
                    "2024-07-02T19:34:45.000000+03:30",
                "warehouse_status_at" =>
                    "2024-07-02T22:44:31.000000+03:30",
                "quantity" => 1,
                "commitment_date" =>
                    "2024-07-03T00:00:00.000000+03:30",
                "selling_price" => 662400,
                "amazing_discount" => 0,
                "total_price" => 662400,
                "can_be_canceled" => true,
            ],
            [
                "order_id" => 250951079,
                "order_item_id" => 793736630,
                "order_item_created_at" =>
                    "2024-07-03T02:53:46.000000+03:30",
                "warehouse_status_at" =>
                    "2024-07-03T02:53:53.000000+03:30",
                "quantity" => 1,
                "commitment_date" =>
                    "2024-07-04T00:00:00.000000+03:30",
                "selling_price" => 662400,
                "amazing_discount" => 0,
                "total_price" => 662400,
                "can_be_canceled" => true,
            ],
            [
                "order_id" => 250981069,
                "order_item_id" => 793824404,
                "order_item_created_at" =>
                    "2024-07-03T12:33:39.000000+03:30",
                "warehouse_status_at" =>
                    "2024-07-03T12:35:25.000000+03:30",
                "quantity" => 1,
                "commitment_date" =>
                    "2024-07-04T00:00:00.000000+03:30",
                "selling_price" => 662400,
                "amazing_discount" => 0,
                "total_price" => 662400,
                "can_be_canceled" => true,
            ],
            [
                "order_id" => 250988799,
                "order_item_id" => 793846665,
                "order_item_created_at" =>
                    "2024-07-03T13:39:17.000000+03:30",
                "warehouse_status_at" =>
                    "2024-07-03T13:40:21.000000+03:30",
                "quantity" => 1,
                "commitment_date" =>
                    "2024-07-06T00:00:00.000000+03:30",
                "selling_price" => 662400,
                "amazing_discount" => 0,
                "total_price" => 662400,
                "can_be_canceled" => true,
            ],
        ],

    ];

    public const META_DATA = [
        "filters" => [
            "today_and_past_commitments_count" => 0,
            "tomorrow_commitments_count" => 0,
        ],
        "cancellation_reasons" => [
            "30" => [
                "key" => "A-4 Wrong pricing",
                "title" => "قیمت گذاری اشتباه",
            ],
            "39" => [
                "key" => "A-7 Seller suspended",
                "title" => "قطع همکاری",
            ],
            "-1" => [
                "key" => "out of stock",
                "title" => "ناموجود بودن کالا",
            ],
        ],
        "product_image_url" =>
            "https://dkstatics-public.digikala.com/digikala-products/a67c8dc53f6b66183be3540ed425ce5316974900_1606031753.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
        "product_id" => 3820881,
        "product_title" =>
            " لاستیک تیغه برف پاک کن مدل 04L-20-20 مناسب برای ساندرو بسته دو عددی",
        "product_url" =>
            "https://www.digikala.com/product/dkp-3820881?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjEwMTY2NSwicHJvZHVjdF9pZCI6MzgyMDg4MSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA3LTAzIDE4OjE0OjE5In0.altovaNyzrpHUjbTMGLFJ3C40F17dGzFJ9zKCV-8Y6w",
        "variant_id" => 12456116,
        "variant_url" =>
            "/pwa/variant-management?filterSearchIn=search_term&filterSearchQuery=12456116&page=1",
        "supplier_code" => "1505",
    ];
}