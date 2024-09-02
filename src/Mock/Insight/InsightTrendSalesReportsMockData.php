<?php

namespace App\Mock\Insight;

use App\Mock\AMockV2;

class InsightTrendSalesReportsMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
          "status": "ok",
          "data": {
            "sort_data": {
              "sort_column": "id",
              "sort_order": "asc",
              "sort_columns": [
                "id",
                "created_at",
                "status"
              ]
            },
            "pager": {
              "page": 1,
              "item_per_page": 10,
              "total_pages": 100,
              "total_rows": 100
            },
            "form_data": [
              null
            ],
            "items": [
              {
                "net_sales": {
                  "amount": 0,
                  "percentage": -100
                },
                "net_item_sold": {
                  "count": 0,
                  "percentage": -100
                },
                "visit_count": {
                  "count": 673682,
                  "percentage": -6.22
                },
                "satisfaction": {
                  "amount": "Infinity",
                  "percentage": "Infinity"
                },
                "order_count": {
                  "count": 0,
                  "percentage": -100
                },
                "net_sales_credit_method": {
                  "amount": 0,
                  "percentage": 0
                },
                "chart": [
                  {
                    "marketplace_seller_id": 12345,
                    "date": "2024-08-07T00:00:00",
                    "net_sales_amount": 1000,
                    "net_item_sold": 1,
                    "gross_sales_amount": 10000,
                    "gross_item_sold": 2,
                    "visit_count": 137402,
                    "order_count": 12,
                    "main_category_id": 1,
                    "product_satisfaction_numerator": 0,
                    "product_satisfaction_denominator": 0,
                    "product_satisfaction_rate": 12,
                    "net_sales_amount_credit_method": 12,
                    "net_item_sold_credit_method": 12
                  }
                ],
                "chart_avg": {
                  "net_sales_amount": 1000,
                  "net_item_sold": 1,
                  "gross_sales_amount": 10000,
                  "gross_item_sold": 2,
                  "visit_count": 137402,
                  "order_count": 12,
                  "main_category_id": 0,
                  "product_satisfaction_numerator": 0,
                  "product_satisfaction_denominator": 0,
                  "product_satisfaction_rate": 0,
                  "net_sales_amount_credit_method": 0,
                  "net_item_sold_credit_method": 0
                }
              }
            ],
            "meta_data": {
              "categories": {
                "114": "کتاب آموزش عکاسی و راهنمای دوربین",
                "150": "فیلم سینمایی"
              }
            }
          }
        }';
    }
}