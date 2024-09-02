<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class ProductCreationUploadImageMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
          "isValid": true,
          "data": {
            "id": "5Nco2",
            "url": "https://dkstatics-public.digikala.com/digikala-products/236bab802265f108704694647941bed3bbda98b7_1722462926.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
            "tempFile": true
          }
        }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "isValid": true,
          "data": {
            "id": "5NcnT",
            "url": "https://dkstatics-public.digikala.com/digikala-products/815d2b898bde6a78846c275c1b67feed29e540e1_1722462907.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
            "tempFile": true
          }
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "isValid": true,
          "data": {
            "id": "5NcnK",
            "url": "https://dkstatics-public.digikala.com/digikala-products/bf6d69f1295dd7e52d7a7dc053c178105679513b_1722462899.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
            "tempFile": true
          }
        }
      }';
    }
}