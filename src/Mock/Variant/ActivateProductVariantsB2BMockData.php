<?php

namespace App\Mock\Variant;

use App\Mock\AMock;

class ActivateProductVariantsB2BMockData extends AMock
{
    public const RESPONSE200 = [
        ["message" => "success"]
    ];

    public const ERRORS = [
        [
            "55125857" => ["B2B not activated yet!"],
            "53526030" => ["B2B not activated yet!"],
            "53526031" => ["B2B not activated yet!"],
        ],
    ];
}