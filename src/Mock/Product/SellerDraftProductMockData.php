<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class SellerDraftProductMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "asc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 1,
            "total_rows": 3
          },
          "form_data": [],
          "items": [
            {
              "id": 583319,
              "category_id": 6167,
              "category_name": "جعبه و کیف ابزار",
              "division_id": null,
              "model": null,
              "brand_id": 719,
              "brand_name": "متفرقه",
              "product_type_ids": null,
              "general_mefa_id": null,
              "package_width": null,
              "package_height": null,
              "package_length": null,
              "package_weight": null,
              "platforms": null,
              "title_en": "",
              "title_fa": "کیف ابزار مدل کیف ابزار",
              "remaining_day": 23,
              "marketplace_seller_id": 1525882,
              "marketplace_seller_name": "ابززززااارررر",
              "is_created_by_cf": false,
              "next_step": {
                "name": "step_image",
                "translate": "عکس"
              },
              "step": "step_title"
            },
            {
              "id": 577119,
              "category_id": 6167,
              "category_name": "جعبه و کیف ابزار",
              "division_id": null,
              "model": null,
              "brand_id": 719,
              "brand_name": "متفرقه",
              "product_type_ids": null,
              "general_mefa_id": null,
              "package_width": null,
              "package_height": null,
              "package_length": null,
              "package_weight": null,
              "platforms": null,
              "title_en": "",
              "title_fa": "کیف ابزار مدل کیف ابزار",
              "remaining_day": 22,
              "marketplace_seller_id": 1525882,
              "marketplace_seller_name": "ابززززااارررر",
              "is_created_by_cf": false,
              "next_step": {
                "name": "step_image",
                "translate": "عکس"
              },
              "step": "step_title"
            },
            {
              "id": 521362,
              "category_id": 6167,
              "category_name": "جعبه و کیف ابزار",
              "division_id": null,
              "model": null,
              "brand_id": 719,
              "brand_name": "متفرقه",
              "product_type_ids": null,
              "general_mefa_id": null,
              "package_width": null,
              "package_height": null,
              "package_length": null,
              "package_weight": null,
              "platforms": null,
              "title_en": "",
              "title_fa": "کیف ابزار مدل کیف ابزار لاچین",
              "remaining_day": 16,
              "marketplace_seller_id": 1525882,
              "marketplace_seller_name": "ابززززااارررر",
              "is_created_by_cf": false,
              "next_step": {
                "name": "step_image",
                "translate": "عکس"
              },
              "step": "step_title"
            }
          ],
          "meta_data": {
            "filters": {
              "brands": {
                "719": "متفرقه"
              },
              "categories": {
                "6167": "جعبه و کیف ابزار"
              }
            }
          }
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '';
    }

    protected static function response3(): ?string
    {
        return '';
    }
}