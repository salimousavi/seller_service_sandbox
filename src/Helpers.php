<?php

namespace App;

use App\Lib\Helper\CalendarService;
use App\Lib\Helper\CryptService;
use App\Lib\Helper\PhoneService;
use App\Lib\Helper\TextService;
use App\Lib\Helper\TimeService;

trait Helpers
{
    public function serviceTime(): TimeService
    {
        return new TimeService();
    }

    public function serviceCalendar(): CalendarService
    {
        return new CalendarService();
    }

    public function servicePhone(): PhoneService
    {
        return new PhoneService();
    }

    public function serviceText(): TextService
    {
        return new TextService();
    }

    public function serviceCrypt(): CryptService
    {
        return new CryptService();
    }
}