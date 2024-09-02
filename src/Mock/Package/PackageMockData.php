<?php

namespace App\Mock\Package;

use App\Mock\AMockV2;

class PackageMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "sort_data": {
            "sort_column": "created_at",
            "sort_order": "desc",
            "sort_columns": ["id", "created_at"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 125,
            "total_rows": 1247
          },
          "form_data": [],
          "items": [
            {
              "package_id": 22953482,
              "package_number": "3788641010824001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-08-01T06:56:51.000000+03:30",
              "received_at_forecast": "2024-08-01T12:00:00.000000+03:30",
              "received_at": "2024-08-01T13:46:38.000000+03:30",
              "status": {
                "key": "received",
                "title": "دریافت شده"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 12,
                "end": 13
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22937251,
              "package_number": "3788641310724001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-31T08:50:30.000000+03:30",
              "received_at_forecast": "2024-07-31T11:00:00.000000+03:30",
              "received_at": "2024-07-31T13:59:06.000000+03:30",
              "status": {
                "key": "received",
                "title": "دریافت شده"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 11,
                "end": 12
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22915477,
              "package_number": "3788641300724001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-30T06:51:52.000000+03:30",
              "received_at_forecast": "2024-07-30T11:00:00.000000+03:30",
              "received_at": "2024-07-30T13:11:08.000000+03:30",
              "status": {
                "key": "received",
                "title": "دریافت شده"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 11,
                "end": 12
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22902678,
              "package_number": "3788641290724003",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-29T11:16:40.000000+03:30",
              "received_at_forecast": "2024-07-30T14:00:00.000000+03:30",
              "received_at": "2024-07-29T16:31:54.000000+03:30",
              "status": {
                "key": "partially_received",
                "title": "دریافت ناقص"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 14,
                "end": 15
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22894513,
              "package_number": "3788641290724002",
              "type": {
                "key": "consignment",
                "title": "انبارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "compensation",
                "title": "اپراتور انبار"
              },
              "created_at": "2024-07-29T07:20:25.000000+03:30",
              "received_at_forecast": "",
              "received_at": "2024-07-29T11:54:00.000000+03:30",
              "status": {
                "key": "received",
                "title": "دریافت شده"
              },
              "warehouse": {
                "id": 1,
                "title": "انبار دانش"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": null,
                "end": null
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22889809,
              "package_number": "3788641290724001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-29T00:29:35.000000+03:30",
              "received_at_forecast": "2024-07-29T11:00:00.000000+03:30",
              "received_at": "2024-07-29T16:23:27.000000+03:30",
              "status": {
                "key": "partially_received",
                "title": "دریافت ناقص"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 11,
                "end": 12
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22880949,
              "package_number": "3788641280724001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-28T13:05:29.000000+03:30",
              "received_at_forecast": "2024-07-29T13:00:00.000000+03:30",
              "received_at": "2024-07-28T15:04:57.000000+03:30",
              "status": {
                "key": "partially_received",
                "title": "دریافت ناقص"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 13,
                "end": 14
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22839625,
              "package_number": "3788641270724001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-27T00:07:50.000000+03:30",
              "received_at_forecast": "2024-07-27T12:00:00.000000+03:30",
              "received_at": "2024-07-27T16:10:57.000000+03:30",
              "status": {
                "key": "partially_received",
                "title": "دریافت ناقص"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 12,
                "end": 13
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22823790,
              "package_number": "3788641250724002",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-25T09:16:52.000000+03:30",
              "received_at_forecast": "2024-07-25T09:00:00.000000+03:30",
              "received_at": "2024-07-25T14:47:45.000000+03:30",
              "status": {
                "key": "partially_received",
                "title": "دریافت ناقص"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 9,
                "end": 10
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22817950,
              "package_number": "3788641250724001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-25T02:58:20.000000+03:30",
              "received_at_forecast": "2024-07-25T12:00:00.000000+03:30",
              "received_at": "2024-07-25T14:40:07.000000+03:30",
              "status": {
                "key": "partially_received",
                "title": "دریافت ناقص"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 12,
                "end": 13
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            }
          ],
          "meta_data": {
            "filters": {
              "package_delivery_types": [
                {
                  "key": "seller",
                  "title": "توسط فروشنده"
                },
                {
                  "key": "mobile_hub",
                  "title": "تحویل به انبار سیار"
                },
                {
                  "key": "post",
                  "title": "توسط پست"
                }
              ],
              "package_types": [
                {
                  "key": "order_fulfilment",
                  "title": "سفارش"
                },
                {
                  "key": "consignment",
                  "title": "انبارش"
                }
              ],
              "package_statuses": [
                {
                  "key": "new",
                  "title": "اماده ارسال/تحویل"
                },
                {
                  "key": "received",
                  "title": "دریافت شده"
                },
                {
                  "key": "partially_received",
                  "title": "دریافت ناقص"
                },
                {
                  "key": "rejected",
                  "title": "دریافت نشده"
                },
                {
                  "key": "deleted",
                  "title": "حذف شده"
                }
              ]
            },
            "is_shipment_allowed": false
          }
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "sort_data": {
            "sort_column": "created_at",
            "sort_order": "desc",
            "sort_columns": ["id", "created_at"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 274,
            "total_rows": 2737
          },
          "form_data": [],
          "items": [
            {
              "package_id": 22959094,
              "package_number": "703201010824001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-08-01T10:57:11.000000+03:30",
              "received_at_forecast": "2024-08-01T10:00:00.000000+03:30",
              "received_at": "2024-08-01T17:18:30.000000+03:30",
              "status": {
                "key": "received",
                "title": "دریافت شده"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 10,
                "end": 11
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22944666,
              "package_number": "703201310724002",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-31T17:50:04.000000+03:30",
              "received_at_forecast": "2024-08-01T15:00:00.000000+03:30",
              "received_at": "2024-08-01T17:42:06.000000+03:30",
              "status": {
                "key": "partially_received",
                "title": "دریافت ناقص"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 15,
                "end": 16
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22929856,
              "package_number": "703201310724001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-31T00:04:17.000000+03:30",
              "received_at_forecast": "2024-07-31T14:00:00.000000+03:30",
              "received_at": "2024-07-31T15:41:44.000000+03:30",
              "status": {
                "key": "received",
                "title": "دریافت شده"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 14,
                "end": 15
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22911182,
              "package_number": "703201300724001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-30T00:10:17.000000+03:30",
              "received_at_forecast": "2024-07-30T13:00:00.000000+03:30",
              "received_at": "2024-07-30T15:05:28.000000+03:30",
              "status": {
                "key": "partially_received",
                "title": "دریافت ناقص"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 13,
                "end": 14
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22892079,
              "package_number": "703201290724002",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-29T02:00:07.000000+03:30",
              "received_at_forecast": "2024-07-29T10:00:00.000000+03:30",
              "received_at": "2024-07-29T16:03:23.000000+03:30",
              "status": {
                "key": "partially_received",
                "title": "دریافت ناقص"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 10,
                "end": 11
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22888287,
              "package_number": "703201290724001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-29T00:07:19.000000+03:30",
              "received_at_forecast": "2024-07-29T13:00:00.000000+03:30",
              "received_at": "2024-07-29T16:21:07.000000+03:30",
              "status": {
                "key": "partially_received",
                "title": "دریافت ناقص"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 13,
                "end": 14
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22876022,
              "package_number": "703201280724002",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-28T10:03:10.000000+03:30",
              "received_at_forecast": "2024-07-29T09:00:00.000000+03:30",
              "received_at": "2024-07-29T17:03:06.000000+03:30",
              "status": {
                "key": "received",
                "title": "دریافت شده"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 9,
                "end": 10
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22863613,
              "package_number": "703201280724001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-28T00:18:03.000000+03:30",
              "received_at_forecast": "2024-07-28T12:00:00.000000+03:30",
              "received_at": "2024-07-28T19:01:36.000000+03:30",
              "status": {
                "key": "received",
                "title": "دریافت شده"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 12,
                "end": 13
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22839470,
              "package_number": "703201270724001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-27T00:06:33.000000+03:30",
              "received_at_forecast": "2024-07-27T13:00:00.000000+03:30",
              "received_at": "2024-07-27T14:56:50.000000+03:30",
              "status": {
                "key": "partially_received",
                "title": "دریافت ناقص"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 13,
                "end": 14
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22828115,
              "package_number": "703201250724004",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2024-07-25T11:34:42.000000+03:30",
              "received_at_forecast": "2024-07-26T10:00:00.000000+03:30",
              "received_at": "2024-07-25T17:32:31.000000+03:30",
              "status": {
                "key": "received",
                "title": "دریافت شده"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 10,
                "end": 11
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            }
          ],
          "meta_data": {
            "filters": {
              "package_delivery_types": [
                {
                  "key": "seller",
                  "title": "توسط فروشنده"
                },
                {
                  "key": "mobile_hub",
                  "title": "تحویل به انبار سیار"
                },
                {
                  "key": "post",
                  "title": "توسط پست"
                }
              ],
              "package_types": [
                {
                  "key": "order_fulfilment",
                  "title": "سفارش"
                },
                {
                  "key": "consignment",
                  "title": "انبارش"
                }
              ],
              "package_statuses": [
                {
                  "key": "new",
                  "title": "اماده ارسال/تحویل"
                },
                {
                  "key": "received",
                  "title": "دریافت شده"
                },
                {
                  "key": "partially_received",
                  "title": "دریافت ناقص"
                },
                {
                  "key": "rejected",
                  "title": "دریافت نشده"
                },
                {
                  "key": "deleted",
                  "title": "حذف شده"
                }
              ]
            },
            "is_shipment_allowed": false
          }
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "sort_data": {
            "sort_column": "created_at",
            "sort_order": "desc",
            "sort_columns": ["id", "created_at"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 3,
            "total_rows": 22
          },
          "form_data": [],
          "items": [
            {
              "package_id": 22944903,
              "package_number": "9552741310724001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "mobile_hub",
                "title": "تحویل به انبار سیار"
              },
              "created_at": "2024-07-31T18:30:49.000000+03:30",
              "received_at_forecast": "2024-08-01T10:00:00.000000+03:30",
              "received_at": "2024-08-01T19:40:48.000000+03:30",
              "status": {
                "key": "received",
                "title": "دریافت شده"
              },
              "warehouse": {
                "id": null,
                "title": "تهران،طرشت"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 10,
                "end": 13
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22925697,
              "package_number": "9552741300724001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "mobile_hub",
                "title": "تحویل به انبار سیار"
              },
              "created_at": "2024-07-30T17:43:22.000000+03:30",
              "received_at_forecast": "2024-07-31T10:00:00.000000+03:30",
              "received_at": "2024-08-01T00:33:58.000000+03:30",
              "status": {
                "key": "received",
                "title": "دریافت شده"
              },
              "warehouse": {
                "id": null,
                "title": "تهران،طرشت"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 10,
                "end": 13
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 22857604,
              "package_number": "9552741270724001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "mobile_hub",
                "title": "تحویل به انبار سیار"
              },
              "created_at": "2024-07-27T16:19:00.000000+03:30",
              "received_at_forecast": "2024-07-28T10:00:00.000000+03:30",
              "received_at": "2024-07-28T21:10:58.000000+03:30",
              "status": {
                "key": "received",
                "title": "دریافت شده"
              },
              "warehouse": {
                "id": null,
                "title": "تهران،طرشت"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 10,
                "end": 13
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 13559056,
              "package_number": "9552741051122001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2022-11-05T16:40:51.000000+03:30",
              "received_at_forecast": "2022-11-06T13:00:00.000000+03:30",
              "received_at": "2022-11-06T13:55:06.000000+03:30",
              "status": {
                "key": "received",
                "title": "دریافت شده"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 13,
                "end": 14
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 13491501,
              "package_number": "9552742311022001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "large",
                "title": "بزرگ"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2022-10-31T19:18:57.000000+03:30",
              "received_at_forecast": "2022-11-01T14:00:00.000000+03:30",
              "received_at": "",
              "status": {
                "key": "deleted",
                "title": "حذف شده"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 14,
                "end": 15
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 13491500,
              "package_number": "9552741311022001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2022-10-31T19:18:57.000000+03:30",
              "received_at_forecast": "2022-11-01T14:00:00.000000+03:30",
              "received_at": "2022-11-01T15:27:33.000000+03:30",
              "status": {
                "key": "received",
                "title": "دریافت شده"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 14,
                "end": 15
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 13477766,
              "package_number": "9552742301022001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "large",
                "title": "بزرگ"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2022-10-30T23:37:26.000000+03:30",
              "received_at_forecast": "2022-10-31T15:00:00.000000+03:30",
              "received_at": "",
              "status": {
                "key": "deleted",
                "title": "حذف شده"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 15,
                "end": 16
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 12787627,
              "package_number": "9552742060922001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "large",
                "title": "بزرگ"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2022-09-06T23:05:35.000000+04:30",
              "received_at_forecast": "2022-09-07T13:00:00.000000+04:30",
              "received_at": "",
              "status": {
                "key": "deleted",
                "title": "حذف شده"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 13,
                "end": 14
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 12787626,
              "package_number": "9552741060922001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2022-09-06T23:05:35.000000+04:30",
              "received_at_forecast": "2022-09-07T13:00:00.000000+04:30",
              "received_at": "",
              "status": {
                "key": "deleted",
                "title": "حذف شده"
              },
              "warehouse": {
                "id": 41,
                "title": "انبار شرق 1"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 13,
                "end": 14
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            },
            {
              "package_id": 12714645,
              "package_number": "9552741010922001",
              "type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "created_at": "2022-09-01T12:05:49.000000+04:30",
              "received_at_forecast": "2022-09-01T12:00:00.000000+04:30",
              "received_at": "",
              "status": {
                "key": "deleted",
                "title": "حذف شده"
              },
              "warehouse": {
                "id": 74,
                "title": "انبار استاد معین"
              },
              "is_shippable_by_dk": false,
              "time_cope": {
                "start": 12,
                "end": 13
              },
              "can_delete": false,
              "show_print_label_package": false,
              "show_print_label_serials": false,
              "show_print_receive_receipt": false
            }
          ],
          "meta_data": {
            "filters": {
              "package_delivery_types": [
                {
                  "key": "seller",
                  "title": "توسط فروشنده"
                },
                {
                  "key": "mobile_hub",
                  "title": "تحویل به انبار سیار"
                },
                {
                  "key": "post",
                  "title": "توسط پست"
                }
              ],
              "package_types": [
                {
                  "key": "order_fulfilment",
                  "title": "سفارش"
                },
                {
                  "key": "consignment",
                  "title": "انبارش"
                }
              ],
              "package_statuses": [
                {
                  "key": "new",
                  "title": "اماده ارسال/تحویل"
                },
                {
                  "key": "received",
                  "title": "دریافت شده"
                },
                {
                  "key": "partially_received",
                  "title": "دریافت ناقص"
                },
                {
                  "key": "rejected",
                  "title": "دریافت نشده"
                },
                {
                  "key": "deleted",
                  "title": "حذف شده"
                }
              ]
            },
            "is_shipment_allowed": false
          }
        }
      }';
    }
}