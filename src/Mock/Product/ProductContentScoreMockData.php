<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class ProductContentScoreMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
          "status": "ok",
          "data": {
            "score": {
              "max": 30,
              "current": 18
            },
            "scores": {
              "category": {
                "max": 1,
                "current": 1
              },
              "brand": {
                "max": 1,
                "current": 1
              },
              "type": {
                "max": 1,
                "current": 1
              },
              "model": {
                "max": 1,
                "current": 1
              },
              "originality": {
                "max": 1,
                "current": 1
              },
              "division": {
                "max": 1,
                "current": 1
              },
              "mefa": {
                "max": 1,
                "current": 1
              },
              "dimension": {
                "max": 1,
                "current": 1
              },
              "description": {
                "max": 2,
                "current": 0
              },
              "advantage": {
                "max": 2,
                "current": 0
              },
              "disadvantage": {
                "max": 2,
                "current": 0
              },
              "attribute_88": {
                "max": 1,
                "current": 1
              },
              "attribute_26": {
                "max": 1,
                "current": 1
              },
              "attribute_160": {
                "max": 1,
                "current": 1
              },
              "attribute_50": {
                "max": 1,
                "current": 1
              },
              "attribute_231": {
                "max": 1,
                "current": 1
              },
              "attribute_200": {
                "max": 1,
                "current": 1
              },
              "attribute_193": {
                "max": 1,
                "current": 1
              },
              "title_fa": {
                "max": 1,
                "current": 1
              },
              "title_en": {
                "max": 2,
                "current": 0
              },
              "photo": {
                "max": 6,
                "current": 2
              }
            }
          }
        }';
    }
}