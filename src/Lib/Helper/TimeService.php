<?php

namespace App\Lib\Helper;

use DateTime;
use DateTimeZone;

class TimeService
{
    public static function Now(): DateTime
    {
        return new DateTime('now', new DateTimeZone('Asia/Tehran'));
    }
}