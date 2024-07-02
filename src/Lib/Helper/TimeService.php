<?php

namespace App\Lib\Helper;

use DateTime;
use DateTimeInterface;
use DateTimeZone;
use Westsworld\TimeAgo;

class TimeService
{
    const SECOND = 1;
    const MINUTE = 60;
    const HOUR = 3600;
    const DAY = 86400;
    const WEEK = 604800;
    const MONTH = 2592000;
    const YEAR = 31104000;

    const NAMES = [
        self::SECOND => 'second',
        self::MINUTE => 'minute',
        self::HOUR => 'hour',
        self::DAY => 'day',
        self::WEEK => 'week',
        self::MONTH => 'month',
        self::YEAR => 'year',
    ];

    const FORMAT_HI = 'H:i';
    const FORMAT_GI = 'G:i';
    const FORMAT_YMD = 'Y-m-d';
    const FORMAT_YMDHIS = 'Y-m-d H:i:s';
    const FORMAT_YMDHISU = 'Y-m-d H:i:s.u';
    const FORMAT_YMDHISM = 'Y-m-d\TH:i:s.vO';
    const FORMAT_YMDHISTZ = 'Y-m-d\TH:i:s\Z';
    const FORMAT_YMDHIST = 'Y-m-d\TH:i:s';
    const FORMAT_H = 'H';
    const FORMAT_I = 'i';
    const FORMAT_D = 'D';
    const ISO8601 = 'Y-m-d\TH:i:sO';

    const FORMAT_YMDHIS_START_OF_DAY = 'Y-m-d 00:00:00';
    const FORMAT_YMDHIS_END_OF_DAY = 'Y-m-d 23:59:59';

    private $timeSwift = 0;

    public static function getPeriodName(int $seconds)
    {
        return self::NAMES[$seconds];
    }

    public function getNow(): DateTimeInterface
    {
        return $this->getFromString('now');
    }

    public function getCurrentTimeMillis(): int
    {
        return round(microtime(true) * 1000);
    }

    public function getNowFormatted(string $format = 'Y-m-d H:i:s'): string
    {
        return $this->getNow()->format($format);
    }

    public function getYesterday(): DateTimeInterface
    {
        return $this->getFromString('yesterday');
    }

    public function getToday(): DateTimeInterface
    {
        return $this->getFromString('today');
    }

    public function getTomorrow(): DateTimeInterface
    {
        return $this->getFromString('tomorrow');
    }

    public function getDaysAfterTomorrow(int $days): DateTimeInterface
    {
        return $this->getFromString('tomorrow + ' . $days . 'days');
    }

    public function getPreviousMonth(): DateTimeInterface
    {
        return $this->getFromString('previous month');
    }

    public function isBetween(DateTimeInterface $date, ?DateTimeInterface $start, ?DateTimeInterface $end)
    {
        $start = $start ? $start->getTimestamp() : 0;
        $end = $end ? $end->getTimestamp() : PHP_INT_MAX;
        $t = $date->getTimestamp();
        return $t >= $start && $t <= $end;
    }

    public function isOlderThan(?DateTimeInterface $time, int $seconds)
    {
        $ts = $time ? $time->getTimestamp() : 0;
        $now = $this->getNow()->getTimestamp();
        return $ts + $seconds < $now;
    }

    public function getFromString(string $dateTime): DateTimeInterface
    {
        $date = new DateTime($dateTime, new DateTimeZone('Asia/Tehran'));
        if ($this->timeSwift) {
            $this->addSeconds($date, $this->timeSwift);
        }
        return $date;
    }

    /**
     * @param string|int|float $dateTime
     * @return DateTime
     */
    public function getFromStringOrExcel($dateTime): DateTimeInterface
    {
        if (is_numeric($dateTime)) {
            return $this->getFromExcelFormat($dateTime);
        } else {
            return $this->getFromString($dateTime);
        }
    }

    /**
     * @param int|float $excelDaysFromOrigin the Excel origin is 1900-01-01
     * @return DateTime
     */
    public function getFromExcelFormat($excelDaysFromOrigin): DateTimeInterface
    {
        $gapDays = 25569;// the days between 1900-01-01 and 1970-01-01
        $standardTimeStamp = ($excelDaysFromOrigin - $gapDays) * self::DAY;
        $date = new DateTime("@$standardTimeStamp", new DateTimeZone('Asia/Tehran'));
        if ($this->timeSwift) {
            $this->addSeconds($date, $this->timeSwift);
        }
        return $this->getFromString($date->format('Y-m-d H:i:s'));
    }

    public function getFromUTCString(string $dateTime): DateTimeInterface
    {
        $date = new DateTime($dateTime, new DateTimeZone('UTC'));
        $date->setTimezone(new DateTimeZone('Asia/Tehran'));
        if ($this->timeSwift) {
            $this->addSeconds($date, $this->timeSwift);
        }
        return $date;
    }

    public function getFromTimestamp(int $timestamp): DateTimeInterface
    {
        $date = new DateTime('now', new DateTimeZone('Asia/Tehran'));
        $date->setTimestamp($timestamp);
        return $date;
    }

    public function addHours(DateTimeInterface $date, int $hours): DateTimeInterface
    {
        return $this->addSeconds($date, $hours * 3600);
    }

    public function addSeconds(DateTimeInterface $date, int $seconds): DateTimeInterface
    {
        $date = clone($date);
        $date->modify("$seconds seconds");
        return $date;
    }

    public function addMinutes(DateTimeInterface $date, int $minutes): DateTimeInterface
    {
        return $this->addSeconds($date, $minutes * 60);
    }

    public function subMinutes(DateTimeInterface $date, int $minutes): DateTimeInterface
    {
        return $this->subSeconds($date, $minutes * 60);
    }

    public function subHours(DateTimeInterface $date, int $hours): DateTimeInterface
    {
        return $this->subSeconds($date, $hours * 60 * 60);
    }

    public function subSeconds(DateTimeInterface $date, int $seconds): DateTimeInterface
    {
        $date = clone($date);
        $date->setTimestamp($date->getTimestamp() - $seconds);
        return $date;
    }

    public function subDays(DateTimeInterface $date, int $days): DateTimeInterface
    {
        $date = clone($date);
        $date->modify("-$days day");
        return $date;
    }

    public function addDays(DateTimeInterface $date, int $days): DateTimeInterface
    {
        $date = clone($date);
        $date->modify("$days day");
        return $date;
    }

    public function addDaysTillEndOfDay(DateTimeInterface $date, int $days): DateTimeInterface
    {
        $date = $this->addDays($date, $days);

        return new DateTime($date->format('Y-m-d 23:59:59'));
    }

    public function addMonths(DateTimeInterface $date, int $months): DateTimeInterface
    {
        $date = clone($date);
        $date->modify("$months month");
        return $date;
    }

    public function subMonths(DateTimeInterface $date, int $months): DateTimeInterface
    {
        $date = clone($date);
        $date->modify("-$months month");
        return $date;
    }

    public function subWeeks(DateTimeInterface $date, int $weeks): DateTimeInterface
    {
        $date = clone($date);
        $date->modify("-$weeks week");
        return $date;
    }

    public function subYear(DateTimeInterface $date, int $years): DateTimeInterface
    {
        $date = clone($date);
        $date->modify("-$years year");
        return $date;
    }

    public function addYear(DateTimeInterface $date, int $years): DateTimeInterface
    {
        $date = clone($date);
        $date->modify("$years year");
        return $date;
    }

    public function setHour(int $hour)
    {
        $this->getNow()->setTime($hour, 0);
    }

    public function addSecondsToNow(int $seconds): DateTimeInterface
    {
        return $this->addSeconds($this->getNow(), $seconds);
    }

    public function addDaysToNow(int $days): DateTimeInterface
    {
        return $this->addDays($this->getNow(), $days);
    }

    public function subSecondsFromNow(int $seconds): DateTimeInterface
    {
        return $this->subSeconds($this->getNow(), $seconds);
    }

    public function subHoursFromNow(int $hours): DateTimeInterface
    {
        return $this->subHours($this->getNow(), $hours);
    }

    public function subDaysFromNow(int $days): DateTimeInterface
    {
        return $this->subDays($this->getNow(), $days);
    }

    public function subWeekFromNow(int $weeks): DateTimeInterface
    {
        return $this->subDays($this->getNow(), $weeks * 7);
    }

    public function subYearFromNow(int $years): DateTimeInterface
    {
        return $this->subDays($this->getNow(), $years * 365);
    }

    public function getSecondsToNow(DateTimeInterface $date, bool $allowBelowZero = false): int
    {
        $cd = $date->getTimestamp() - ($this->getNow())->getTimestamp();
        return $allowBelowZero ? $cd : max(0, $cd);
    }

    public function getDaysDiff(DateTimeInterface $time1, DateTimeInterface $time2, bool $allowBelowZero = false): int
    {
        return $allowBelowZero ? $time1->diff($time2)->format("%r%a") : $time1->diff($time2)->format("%a");
    }

    public function getYearsDiff(DateTimeInterface $time1, DateTimeInterface $time2, bool $allowBelowZero = false): int
    {
        return $allowBelowZero ? $time1->diff($time2)->format("%r%y") : $time1->diff($time2)->format("%y");
    }

    public function getSignedDaysDiff(DateTimeInterface $time1, DateTimeInterface $time2, bool $allowBelowZero = false): int
    {
        $unsignedDiff = $this->getDaysDiff($time1, $time2);
        return ($time1 < $time2 ? -1 : +1) * $unsignedDiff;
    }

    public function getDiffHours(DateTimeInterface $startTime, DateTimeInterface $endTime): int
    {
        $diff = $endTime->diff($startTime);
        return $diff->days * 24 + $diff->h;
    }

    public function getDiffMinutes(DateTimeInterface $time1, DateTimeInterface $time2): int
    {
        $diff = date_diff($time1, $time2);

        if ($time1 > $time2) {
            $isMinus = true;
        } else {
            $isMinus = false;
        }

        $minutes = ((($diff->d * self::DAY) + ($diff->h * self::HOUR)) / self::MINUTE) + $diff->i;
        if ($isMinus) {
            return $minutes * -1;
        }
        return $minutes;
    }

    public function getDiffSeconds(DateTimeInterface $dateTime1, DateTimeInterface $dateTime2): int
    {
        return $dateTime1->getTimestamp() - $dateTime2->getTimestamp();
    }

    /**
     * Returns true if date not set or time interval to now is <= 0
     *
     * @param DateTimeInterface $time
     * @return bool
     */
    public function isReady(?DateTimeInterface $time): bool
    {
        if (!$time || $this->getSecondsToNow($time, false) <= 0) {
            return true;
        }
        return false;
    }

    public function getCountDown(?DateTimeInterface $time): int
    {
        if (!$time) {
            return 0;
        }
        return $this->getSecondsToNow($time);
    }

    public function decorateInterval(int $seconds): string
    {
        $precision = 1;

        $sign = '+';
        if ($seconds < 0) {
            $sign = '-';
            $seconds = -$seconds;
        }

        if ($seconds > 3600 * 24 * 2) {
            return $sign . round($seconds / (3600 * 24), $precision) . 'd';
        }
        if ($seconds > 3600 * 2) {
            return $sign . round($seconds / (3600), $precision) . 'h';
        }
        if ($seconds > 60 * 2) {
            return $sign . round($seconds / 60, $precision) . 'min';
        }
        return $sign . $seconds . 'sec';
    }

    public function secondsToFormattedTime(int $seconds): string
    {
        return gmdate("H:i:s", $seconds);
    }

    public function getTimeAgo(DateTimeInterface $dateTime, $level = 1, string $timeZone = 'Asia/Tehran'): array
    {
        $dateTimeZone = new DateTimeZone($timeZone);
        $now = new DateTime('now', $dateTimeZone);
        $ago = $dateTime->setTimezone($dateTimeZone);
        $diff = $now->diff($ago);

        $diffDays = (float)$diff->format("%R%a");

        if ($diffDays == -1) {
            return ['yesterday' => 'yesterday'];
        }

        if ($diffDays >= +1) {
            return ['scheduled' => 'scheduled'];
        }

        $weeks = (int)floor($diff->d / 7);
        $days = $diff->d - ($weeks * 7);

        $diffs = [
            'year' => $diff->y,
            'month' => $diff->m,
            'week' => $weeks,
            'day' => $days,
            'hour' => $diff->h,
            'minute' => $diff->i,
            'second' => $diff->s,
        ];

        $timeAgo = [];
        foreach ($diffs as $key => $value) {
            if ($value) {
                $timeAgo[$key] = $value;
            }
        }

        return array_slice($timeAgo, 0, $level);
    }

    public function getTimeDifference(DateTimeInterface $startDateTime, DateTimeInterface $endDateTime, $level = 2): array
    {
        $diff = $endDateTime->diff($startDateTime);

        $weeks = (int)floor($diff->d / 7);
        $days = $diff->d - ($weeks * 7);

        $diffs = [
            'year' => $diff->y,
            'month' => $diff->m,
            'week' => $weeks,
            'day' => $days,
            'hour' => $diff->h,
            'minute' => $diff->i,
            'second' => $diff->s,
        ];

        $timeDiff = [];
        foreach ($diffs as $key => $value) {
            if ($value) {
                $timeDiff[$key] = $value;
            }
        }

        return array_slice($timeDiff, 0, $level);
    }

    public function validateDateFormat($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }

    /**
     * @param string $fromTime format 08:00
     * @param string $toTime format 22:00
     * @param DateTime|null $startFrom default NOW
     * @return int Return timestamp for current time if is in allowed time window or timestamp in next moment when its allowed
     */
    public function getTimestampInAllowedTimeWindow(string $fromTime, string $toTime, ?DateTimeInterface $startFrom = null): int
    {
        if ($startFrom === null) {
            $send = $this->getNow();
        } else {
            $send = $startFrom;
        }

        $sendTimeStamp = $send->getTimestamp();

        $date = $send->format('Y-m-d');
        $send2359 = strtotime($date . ' 23:59:59.999');
        $send2200 = strtotime($date . ' ' . $toTime);
        $send0800 = strtotime($date . ' ' . $fromTime);
        $send0000 = strtotime($date . ' 00:00');


        if ($sendTimeStamp <= $send2359 && $sendTimeStamp >= $send2200) {
            $sendTimeStamp = $send->modify('+1 day')->setTime(...explode(':', $fromTime))->getTimestamp();
        } elseif ($sendTimeStamp <= $send0800 && $sendTimeStamp >= $send0000) {
            $sendTimeStamp = $send->setTime(...explode(':', $fromTime))->getTimestamp();
        }

        return $sendTimeStamp;
    }

    public function getStartOfDay(DateTimeInterface $dateTime): DateTimeInterface
    {
        return $this->getFromString($dateTime->format('Y-m-d') . ' 00:00:00.000');
    }

    public function getEndOfDay(DateTimeInterface $dateTime): DateTimeInterface
    {
        return $this->getFromString($dateTime->format('Y-m-d') . ' 23:59:59.999');
    }

    public function getDayOfWeek(DateTimeInterface $datetime)
    {
        return date("w", strtotime($datetime->format('Y-m-d')));
    }

    public function isLeapYear(DateTimeInterface $datetime): bool
    {
        return date('L', $datetime) === 1;
    }

    public function getNumberOfDaysInYear(DateTimeInterface $date)
    {
        return 365 + date('L', $date);
    }

    public function isNowGreaterThan(string $dateTime): bool
    {
        return $this->getNow()->getTimestamp() > $this->getFromString($dateTime)->getTimestamp();
    }

    public function isNowGreaterThanOrEqualTo(string $dateTime): bool
    {
        return $this->getNow()->getTimestamp() >= $this->getFromString($dateTime)->getTimestamp();
    }

    public function isNowLessThan(string $dateTime): bool
    {
        return $this->getNow()->getTimestamp() < $this->getFromString($dateTime)->getTimestamp();
    }

    public function isNowLessThanOrEqualTo(string $dateTime): bool
    {
        return $this->getNow()->getTimestamp() <= $this->getFromString($dateTime)->getTimestamp();
    }

    public function isNowBetween(DateTimeInterface $startDateTime, DateTimeInterface $endDateTime): bool
    {
        $now = $this->getNow();
        return $startDateTime < $now && $now <= $endDateTime;
    }

    public function getRoundedUpDiffInDays(DateTimeInterface $dateTime1, DateTimeInterface $dateTime2)
    {
        return intval(ceil(abs($dateTime1->getTimestamp() - $dateTime2->getTimestamp()) / 60 / 60 / 24));
    }

    public function getRoundedUpDiffInDaysNotAbs(DateTimeInterface $dateTime1, DateTimeInterface $dateTime2)
    {
        if ($dateTime1 < $dateTime2) {
            return 0;
        }
        return intval(ceil(abs($dateTime1->getTimestamp() - $dateTime2->getTimestamp()) / 60 / 60 / 24));
    }

    public function getDaysInHours(int $days): int
    {
        return $days * 24;
    }

    public function convertDatetimeToTzForm(DateTimeInterface $dateTime): string
    {
        return $dateTime->format('Y-m-d').'T'.$dateTime->format('H:i:s').'Z';
    }

    public function addFloatHours(DateTimeInterface $dateTime, $time): DateTimeInterface
    {
        $hour = floor($time);
        $minutes = $time - $hour;
        $DateTimeInterface = $this->addHours($dateTime, $hour);
        $DateTimeInterface = $this->addMinutes($dateTime, $minutes * 60);
        return $dateTime;
    }

    public function convertFloatNumberToHour($number): string
    {
        $floor = floor($number);
        $hour = ($floor < 10) ? '0'. $floor : $floor;
        $minutes = ((int)(($number - $floor) * 60) == 0) ? '00' : (int)(($number - $floor) * 60);
        return $hour . ':' . $minutes;
    }

    /**
     * @param DateTimeInterface $start
     * @param DateTimeInterface $end
     * @param bool $includeEnd
     * @return DateTime[]
     */
    public function getDatesInRange(DateTimeInterface $start, DateTimeInterface $end, bool $includeEnd = false)
    {
        $dates = [];

        $start = $this->getFromString($start->format(self::FORMAT_YMD));
        $end = $this->getFromString($end->format(self::FORMAT_YMD));

        if ($end < $start) {
            return $dates;
        }

        $date = $start;
        while ($date < $end) {
            array_push($dates, $date);
            $date = $this->addDays($date, 1);
        }

        if ($includeEnd) {
            array_push($dates, $end);
        }

        return $dates;
    }

    public function getHour(DateTimeInterface $dateTime): int
    {
        return $dateTime->format(TimeService::FORMAT_H);
    }

    public function getNowHour(): int
    {
        return $this->getHour($this->getNow());
    }

    function relativeTime(int $unixTime): string
    {

        $d[0] = array(1,"second");
        $d[1] = array(60,"minute");
        $d[2] = array(3600,"hour");
        $d[3] = array(86400,"day");
        $d[4] = array(604800,"week");
        $d[5] = array(2592000,"month");
        $d[6] = array(31104000,"year");

        $w = array();

        $return = "";
        $now = time();
        $diff = ($now-$unixTime);
        $secondsLeft = $diff;

        for($i=6;$i>-1;$i--)
        {
            $w[$i] = intval($secondsLeft/$d[$i][0]);
            $secondsLeft -= ($w[$i]*$d[$i][0]);
            if($w[$i]!=0)
            {
                $return.= abs($w[$i]) . " " . $d[$i][1] . (($w[$i]>1)?'s':'') ." ";
            }

        }

        $return .= ($diff>0)?"ago":"left";
        return $return;
    }

    public function getTimeDifferenceInWords(DateTimeInterface $pointedTime, DateTimeInterface $referenceTime = null): string
    {
        if (null === $referenceTime) {
            $referenceTime = $this->getNow();
        }

        return (new TimeAgo())->inWords($pointedTime, $referenceTime);
    }
}