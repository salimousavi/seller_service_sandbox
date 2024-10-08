<?php

namespace App\Mock\Variant;

use App\Mock\AMock;

class ProductVariantMockData extends AMock
{
    public const SORT = [
        "sort_column" => "product_variant_id",
        "sort_order" => "desc",
        "sort_columns" => [
            "id",
            "product_variant_id",
            "selling_stock",
            "selling_price",
            "marketplace_seller_stock",
            "warehouse_stock",
        ],
    ];

    public const QUERY_PARAMS = [
        ["archived" => "1"],
    ];

    public const ITEMS = [
        [
            "id" => 123456,
            "image_src" =>
                "https://dkstatics-public.digikala.com/digikala-products/64ce735b8c6e31d323ef62f4c6d4c2955352_1658214735.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
            "seller_id" => 12345,
            "main_category_title" => "محافظ برق",
            "category_id" => 77,
            "product_id" => 12345,
            "product_url" =>
                "https://www.digikala.com/product/dkp-12345/",
            "product_variant_id" => 123456,
            "supplier_code" => null,
            "product_moderation_status" => "approved",
            "title" =>
                "محافظ برق | مشکی براق | سرویس ویژه دیجی کالا: 7 روز تضمین بازگشت کالا",
            "product_title" =>
                "محافظ برق",
            "active" => false,
            "lead_time" => 1,
            "price_list" => 603200,
            "market_price_last_update" => "2024-04-27 04:57:42",
            "price_type" => "recommended",
            "selling_channel_site" => "digikala",
            "price_sale" => 489400,
            "marketplace_seller_stock" => 0,
            "warehouse_stock" => 0,
            "on_the_way_stock" => 0,
            "reservation" => 0,
            "left_consumer" => 0,
            "maximum_per_order" => 3,
            "allowed_count" => 0,
            "ovl_selling_active" => true,
            "b2b_params" => [
                "seller_b2b_active" => true,
                "is_only_b2b" => false,
                "is_b2b_active" => false,
            ],
            "max_lead_time" => 1,
            "buy_box_price" => 603200,
            "is_buy_box_winner" => false,
            "is_seller_buy_box_winner" => false,
            "is_in_buy_box_challenge" => false,
            "min_selling_price_limit" => null,
            "product_selling_chanel" => [
                "active_digikala" => true,
                "active_digistyle" => false,
            ],
            "variant_selling_chanel" => [
                "active_digikala" => false,
                "active_digistyle" => false,
            ],
            "is_in_incredible_promotion" => false,
            "is_in_periodic_promotion" => false,
            "is_in_promotion" => false,
            "promotion_price" => null,
            "shipping_nature_id" => 1,
            "default_selling_chanel_code" => 1,
            "rating" => null,
            "is_promotion_management_visible_for_seller" => true,
            "is_archived" => true,
            "fulfilment_and_delivery_cost" => 100000,
            "seller_reservation" => 0,
            "digikala_reservation" => 0,
            "seller_shipping_lead_time" => 0,
            "shipping_options" => [
                "is_fbs_ability_enable" => true,
                "is_fbd_active" => true,
                "is_fbs_active" => false,
                "is_needed_fbs_setting" => false,
                "is_sbs_module_active" => true,
                "only_sbs" => false,
            ],
        ],
        [
            "id" => 123458,
            "image_src" =>
                "https://dkstatics-public.digikala.com/digikala-products/64ce735b8c6e31d59043f4c6d4c2955352_1658214735.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
            "seller_id" => 12345,
            "main_category_title" => "محافظ صفحه نمایش گوشی",
            "category_id" => 76,
            "product_id" => 12348,
            "product_url" =>
                "https://www.digikala.com/product/dkp-12348/",
            "product_variant_id" => 123458,
            "supplier_code" => null,
            "product_moderation_status" => "approved",
            "title" =>
                "محافظ صفحه نمایش  Redmi Note 9 | مشکی | سرویس ویژه دیجی کالا: 7 روز تضمین بازگشت کالا",
            "product_title" =>
                "محافظ صفحه نمایش  Redmi Note 9",
            "active" => false,
            "lead_time" => 1,
            "price_list" => 603200,
            "market_price_last_update" => "2024-04-27 04:57:42",
            "price_type" => "recommended",
            "selling_channel_site" => "digikala",
            "price_sale" => 1100000,
            "marketplace_seller_stock" => 0,
            "warehouse_stock" => 0,
            "on_the_way_stock" => 0,
            "reservation" => 0,
            "left_consumer" => 0,
            "maximum_per_order" => 3,
            "allowed_count" => 0,
            "ovl_selling_active" => true,
            "b2b_params" => [
                "seller_b2b_active" => true,
                "is_only_b2b" => false,
                "is_b2b_active" => false,
            ],
            "max_lead_time" => 1,
            "buy_box_price" => 603200,
            "is_buy_box_winner" => false,
            "is_seller_buy_box_winner" => false,
            "is_in_buy_box_challenge" => false,
            "min_selling_price_limit" => null,
            "product_selling_chanel" => [
                "active_digikala" => true,
                "active_digistyle" => false,
            ],
            "variant_selling_chanel" => [
                "active_digikala" => false,
                "active_digistyle" => false,
            ],
            "is_in_incredible_promotion" => false,
            "is_in_periodic_promotion" => false,
            "is_in_promotion" => false,
            "promotion_price" => null,
            "shipping_nature_id" => 1,
            "default_selling_chanel_code" => 1,
            "rating" => null,
            "is_promotion_management_visible_for_seller" => true,
            "is_archived" => true,
            "fulfilment_and_delivery_cost" => 100000,
            "seller_reservation" => 0,
            "digikala_reservation" => 0,
            "seller_shipping_lead_time" => 0,
            "shipping_options" => [
                "is_fbs_ability_enable" => true,
                "is_fbd_active" => true,
                "is_fbs_active" => false,
                "is_needed_fbs_setting" => false,
                "is_sbs_module_active" => true,
                "only_sbs" => false,
            ],
        ],
        [
            "id" => 123457,
            "image_src" =>
                "https://dkstatics-public.digikala.com/digikala-products/0947d64a1ba37cc582b6eb8b5456f29_1658297951.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
            "seller_id" => 123,
            "main_category_title" => "محافظ صفحه نمایش گوشی",
            "category_id" => 76,
            "product_id" => 12347,
            "product_url" =>
                "https://www.digikala.com/product/dkp-12347/",
            "product_variant_id" => 123457,
            "supplier_code" => "4018",
            "product_moderation_status" => "approved",
            "title" =>
                "محافظ صفحه نمایش xxxxxx | مشکی براق | سرویس ویژه دیجی کالا: 7 روز تضمین بازگشت کالا",
            "product_title" =>
                "محافظ صفحه نمایش xxxxxx",
            "active" => false,
            "lead_time" => 1,
            "price_list" => 644100,
            "market_price_last_update" => "2024-02-18 15:58:53",
            "price_type" => "recommended",
            "selling_channel_site" => "digikala",
            "price_sale" => 585600,
            "marketplace_seller_stock" => 0,
            "warehouse_stock" => 0,
            "on_the_way_stock" => 0,
            "reservation" => 0,
            "left_consumer" => 0,
            "maximum_per_order" => 3,
            "allowed_count" => 0,
            "ovl_selling_active" => true,
            "b2b_params" => [
                "seller_b2b_active" => true,
                "is_only_b2b" => false,
                "is_b2b_active" => false,
            ],
            "max_lead_time" => 1,
            "buy_box_price" => 644100,
            "is_buy_box_winner" => false,
            "is_seller_buy_box_winner" => false,
            "is_in_buy_box_challenge" => false,
            "min_selling_price_limit" => null,
            "product_selling_chanel" => [
                "active_digikala" => true,
                "active_digistyle" => false,
            ],
            "variant_selling_chanel" => [
                "active_digikala" => false,
                "active_digistyle" => false,
            ],
            "is_in_incredible_promotion" => false,
            "is_in_periodic_promotion" => false,
            "is_in_promotion" => false,
            "promotion_price" => null,
            "shipping_nature_id" => 1,
            "default_selling_chanel_code" => 1,
            "rating" => null,
            "is_promotion_management_visible_for_seller" => true,
            "is_archived" => true,
            "fulfilment_and_delivery_cost" => 100000,
            "seller_reservation" => 0,
            "digikala_reservation" => 0,
            "seller_shipping_lead_time" => 0,
            "shipping_options" => [
                "is_fbs_ability_enable" => true,
                "is_fbd_active" => true,
                "is_fbs_active" => false,
                "is_needed_fbs_setting" => false,
                "is_sbs_module_active" => true,
                "only_sbs" => false,
            ],
        ],
    ];
}