<?php

namespace App\Mock\Profile;

use App\Mock\AMock;

class ProfileBusinessMockData extends AMock
{
    public const ITEMS =
        [
            [
                "business_type" => "private",
                "first_name" => "تست شماره ۱",
                "last_name" => "تست شماره ۱",
                "national_id" => "0123456789",
                "register_phone" => "989197100000",
                "mobile_phone" => null,
                "email" => "test1@gmail.com",
                "verification_status" => [
                    "national_id" => true,
                    "mobile_phone" => false,
                    "register_phone" => true,
                    "email" => true
                ]
            ],
            [
                "business_type" => "private",
                "first_name" => "تست شماره 2",
                "last_name" => "تست شماره 2",
                "national_id" => "0123456788",
                "register_phone" => "989197100002",
                "mobile_phone" => "989197100001",
                "email" => "test2@gmail.com",
                "verification_status" => [
                    "national_id" => true,
                    "mobile_phone" => true,
                    "register_phone" => true,
                    "email" => true,
                ]
            ],
            [
                "business_type" => "private",
                "first_name" => "تست شماره 3",
                "last_name" => "تست شماره 3",
                "national_id" => "0123456787",
                "register_phone" => "989197100003",
                "mobile_phone" => "989197100003",
                "email" => "test3@yahoo.com",
                "verification_status" => [
                    "national_id" => true,
                    "mobile_phone" => true,
                    "register_phone" => true,
                    "email" => true,
                ]
            ],
            [
                "business_type" => "private",
                "first_name" => "تست شماره ۴",
                "last_name" => "تست شماره ۴",
                "national_id" => "0013334445",
                "register_phone" => "989199999999",
                "mobile_phone" => null,
                "email" => "test4@gmail.com",
                "verification_status" => [
                    "national_id" => true,
                    "mobile_phone" => false,
                    "register_phone" => true,
                    "email" => true,
                ]
            ]
        ];
}