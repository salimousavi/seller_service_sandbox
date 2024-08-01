<?php

namespace App\Mock\Product;

use App\Mock\AMock;
use App\Mock\AMockV2;

class ProductSearchSuggestionV2MockData extends AMockV2
{

    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "asc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 50,
            "total_pages": 0,
            "total_rows": 0
          },
          "form_data": {
            "keyword": "تیشرت آستین کوتاه دخترانه او وی اس "
          },
          "items": {
            "categories": [],
            "auto_complete": []
          },
          "meta_data": []
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "asc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 50,
            "total_pages": 0,
            "total_rows": 0
          },
          "form_data": {
            "keyword": "شانه مو "
          },
          "items": {
            "categories": [
              {
                "keyword": "شانه مو",
                "category": {
                  "id": 2400,
                  "title_fa": "برس مو",
                  "title_en": "برس مو",
                  "code": "brush"
                }
              },
              {
                "keyword": "شانه مو زنانه",
                "category": {
                  "id": 9398,
                  "title_fa": "اکسسوری مو زنانه",
                  "title_en": "WOMEN HAIR ACCESSORIES",
                  "code": "women-hair-accessories"
                }
              },
              {
                "keyword": "شانه مو چوبی",
                "category": {
                  "id": 10926,
                  "title_fa": "شانه مو",
                  "title_en": "شانه مو",
                  "code": "comb"
                }
              }
            ],
            "auto_complete": [
              {
                "keyword": "شانه مو"
              },
              {
                "keyword": "شانه مو زنانه"
              },
              {
                "keyword": "شانه مو چوبی"
              },
              {
                "keyword": "شانه رنگ مو"
              },
              {
                "keyword": "شانه مو مدل"
              }
            ]
          },
          "meta_data": []
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "asc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 50,
            "total_pages": 0,
            "total_rows": 0
          },
          "form_data": {
            "keyword": "تیشرت "
          },
          "items": {
            "categories": [
              {
                "keyword": "تیشرت",
                "category": {
                  "id": 9470,
                  "title_fa": "تی شرت مردانه",
                  "title_en": "MEN TEE-SHIRTS",
                  "code": "men-tee-shirts"
                }
              },
              {
                "keyword": "تی شرت بچگانه",
                "category": {
                  "id": 9929,
                  "title_fa": "تی شرت و پولوشرت دخترانه و پسرانه",
                  "title_en": "UniKids-Tshirts-polos",
                  "code": "unikids-tshirts-polos"
                }
              },
              {
                "keyword": "تیشرت زنانه",
                "category": {
                  "id": 9347,
                  "title_fa": "تی شرت زنانه",
                  "title_en": "WOMEN TEE-SHIRTS",
                  "code": "women-tee-shirts"
                }
              }
            ],
            "auto_complete": [
              {
                "keyword": "تیشرت"
              },
              {
                "keyword": "تی شرت"
              },
              {
                "keyword": "تی شرت بچگانه"
              },
              {
                "keyword": "تیشرت مردانه"
              },
              {
                "keyword": "تیشرت استین بلند مردانه"
              }
            ]
          },
          "meta_data": []
        }
      }';
    }
}