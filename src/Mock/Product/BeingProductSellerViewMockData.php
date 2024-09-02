<?php

namespace App\Mock\Product;

use App\Mock\AMock;
use App\Mock\AMockV2;

class BeingProductSellerViewMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "name": "کتاب See Me اثر Nicholas Sparks انتشارات Grand Central Publishing",
          "brand": "متفرقه",
          "productId": 8751011,
          "commission": {
            "canSell": true,
            "commission": 0.09
          },
          "productURL": "https://www.digikala.com/product/dkp-8751011/",
          "referencePrice": 3519000,
          "productImage": "https://dkstatics-public.digikala.com/digikala-products/ca19ba1ed4c977e1f9997bc11d1779c581a7b849_1655241262.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
          "fulfillmentAndDeliveryCost": {
            "factor": 0,
            "minimum_cost": 65000,
            "maximum_cost": 800000
          },
          "category": {
            "id": 10143,
            "title": "کتاب چاپی غیر فارسی",
            "theme": "no_color_no_size"
          },
          "site": "digikala",
          "product_dimension": {
            "width": 17,
            "length": 22,
            "height": 3,
            "weight": 560
          },
          "price_type": "recommended"
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "name": "برچسب ماهوت مدل Leafs مناسب برای ساعت هوشمند هوآوی Watch 2",
          "brand": "ماهوت",
          "productId": 9057309,
          "commission": {
            "canSell": true,
            "commission": 0.05
          },
          "productURL": "https://www.digikala.com/product/dkp-9057309/",
          "referencePrice": 935200,
          "productImage": "https://dkstatics-public.digikala.com/digikala-products/d8fdf953dd4cdea6853d45ca3d6f6ba943f8ef9c_1658694073.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
          "fulfillmentAndDeliveryCost": {
            "factor": 0,
            "minimum_cost": 100000,
            "maximum_cost": 1000000
          },
          "category": {
            "id": 5872,
            "title": "لوازم جانبی ساعت و مچ بند هوشمند",
            "theme": "colored"
          },
          "site": "digikala",
          "product_dimension": {
            "width": 11,
            "length": 18,
            "height": 1,
            "weight": 20
          },
          "price_type": "recommended"
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "name": "پاوربانک شیائومی مدل Mi PB3018ZM ظرفیت 30000 میلی آمپر ساعت",
          "brand": "شیائومی",
          "productId": 8271775,
          "commission": {
            "canSell": true,
            "commission": 0.02
          },
          "productURL": "https://www.digikala.com/product/dkp-8271775/",
          "referencePrice": 11295964,
          "productImage": "https://dkstatics-public.digikala.com/digikala-products/14155ce9e04976a002cf4cb7434a484208719997_1649921710.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
          "fulfillmentAndDeliveryCost": {
            "factor": 0,
            "minimum_cost": 100000,
            "maximum_cost": 1000000
          },
          "category": {
            "id": 1272,
            "title": "پاوربانک (شارژر همراه)",
            "theme": "colored"
          },
          "site": "digikala",
          "product_dimension": {
            "width": 10,
            "length": 15,
            "height": 5,
            "weight": 900
          }
        },
        "price_type": "recommended"
      }';
    }
}