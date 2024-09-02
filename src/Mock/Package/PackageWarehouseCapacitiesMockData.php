<?php

namespace App\Mock\Package;

use App\Mock\AMockV2;

class PackageWarehouseCapacitiesMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "capacities": [
            {
              "capacity_id": 418427,
              "starts_at": 9,
              "ends_at": 10,
              "date": null,
              "disabled": true,
              "remained_size_chunk": null
            },
            {
              "capacity_id": 418428,
              "starts_at": 10,
              "ends_at": 11,
              "date": null,
              "disabled": true,
              "remained_size_chunk": null
            },
            {
              "capacity_id": 418429,
              "starts_at": 11,
              "ends_at": 12,
              "date": null,
              "disabled": true,
              "remained_size_chunk": null
            },
            {
              "capacity_id": 418430,
              "starts_at": 12,
              "ends_at": 13,
              "date": null,
              "disabled": true,
              "remained_size_chunk": null
            },
            {
              "capacity_id": 418431,
              "starts_at": 13,
              "ends_at": 14,
              "date": null,
              "disabled": true,
              "remained_size_chunk": null
            }
          ],
          "price": null
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "capacities": [
            {
              "capacity_id": 418053,
              "starts_at": 12,
              "ends_at": 13,
              "date": null,
              "disabled": true,
              "remained_size_chunk": null
            }
          ],
          "price": null
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "capacities": [
            {
              "capacity_id": 418427,
              "starts_at": 9,
              "ends_at": 10,
              "date": null,
              "disabled": true,
              "remained_size_chunk": null
            },
            {
              "capacity_id": 418428,
              "starts_at": 10,
              "ends_at": 11,
              "date": null,
              "disabled": true,
              "remained_size_chunk": null
            },
            {
              "capacity_id": 418429,
              "starts_at": 11,
              "ends_at": 12,
              "date": null,
              "disabled": true,
              "remained_size_chunk": null
            },
            {
              "capacity_id": 418430,
              "starts_at": 12,
              "ends_at": 13,
              "date": null,
              "disabled": true,
              "remained_size_chunk": null
            },
            {
              "capacity_id": 418431,
              "starts_at": 13,
              "ends_at": 14,
              "date": null,
              "disabled": true,
              "remained_size_chunk": null
            }
          ],
          "price": null
        }
      }';
    }
}