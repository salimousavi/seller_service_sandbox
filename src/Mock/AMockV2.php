<?php

namespace App\Mock;

use App\Lib\Resolver\APIRequest;

abstract class AMockV2
{
    public static function build(): array
    {
        $responses = [];
        static::response1() && $responses[] = static::response1();
        static::response2() && $responses[] = static::response2();
        static::response3() && $responses[] = static::response3();
        $randomKey = array_rand($responses);
        return json_decode($responses[$randomKey], true) ?? [];
    }

    abstract protected static function response1(): ?string;

    protected static function response2(): ?string
    {
        return null;
    }

    protected static function response3(): ?string
    {
        return null;
    }
}