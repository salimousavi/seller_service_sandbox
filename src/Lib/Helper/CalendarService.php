<?php

namespace App\Lib\Helper;

use App\Helpers;
use App\Lib\Calendar\PersianCalendar;
use App\Lib\Calendar\PersianDate;
use DateTime;
use DateTimeInterface;

class CalendarService
{
    use Helpers;

    const SUNDAY = 'یکشنبه';
    const MONDAY = 'دو‌شنبه';
    const TUESDAY = 'سه‌شنبه';
    const WEDNESDAY = 'چهار‌شنبه';
    const THURSDAY = 'پنج‌شنبه';
    const FRIDAY = 'جمعه';
    const SATURDAY = 'شنبه';
    const WEEK_DAYS = [
        self::SUNDAY,
        self::MONDAY,
        self::TUESDAY,
        self::WEDNESDAY,
        self::THURSDAY,
        self::FRIDAY,
        self::SATURDAY,
    ];

    const SUNDAY_EN = 'sunday';
    const MONDAY_EN = 'monday';
    const TUESDAY_EN = 'tuesday';
    const WEDNESDAY_EN = 'wednesday';
    const THURSDAY_EN = 'thursday';
    const FRIDAY_EN = 'friday';
    const SATURDAY_EN = 'saturday';
    const WEEK_DAYS_EN = [
        self::SUNDAY_EN,
        self::MONDAY_EN,
        self::TUESDAY_EN,
        self::WEDNESDAY_EN,
        self::THURSDAY_EN,
        self::FRIDAY_EN,
        self::SATURDAY_EN,
    ];
    const WEEK_DAYS_EN_TO_INTEGER = [
        self::SUNDAY_EN => 0,
        self::MONDAY_EN => 1,
        self::TUESDAY_EN => 2,
        self::WEDNESDAY_EN => 3,
        self::THURSDAY_EN => 4,
        self::FRIDAY_EN => 5,
        self::SATURDAY_EN => 6,
    ];

    const MONTH_FARVARDIN = 'فروردین';
    const MONTH_ORDIBEHESHT = 'اردیبهشت';
    const MONTH_KHORDAD = 'خرداد';
    const MONTH_TIR = 'تیر';
    const MONTH_MORDAD = 'مرداد';
    const MONTH_SHAHRIVAR = 'شهریور';
    const MONTH_MEHR = 'مهر';
    const MONTH_ABAN = 'آبان';
    const MONTH_AZAR = 'آذر';
    const MONTH_DEY = 'دی';
    const MONTH_BAHMAN = 'بهمن';
    const MONTH_ESFAND = 'اسفند';

    const MONTH_ALL = [
        '1' => self::MONTH_FARVARDIN,
        '2' => self::MONTH_ORDIBEHESHT,
        '3' => self::MONTH_KHORDAD,
        '4' => self::MONTH_TIR,
        '5' => self::MONTH_MORDAD,
        '6' => self::MONTH_SHAHRIVAR,
        '7' => self::MONTH_MEHR,
        '8' => self::MONTH_ABAN,
        '9' => self::MONTH_AZAR,
        '10' => self::MONTH_DEY,
        '11' => self::MONTH_BAHMAN,
        '12' => self::MONTH_ESFAND,
    ];

    const FRIDAY_DAY_NUMBER = 5;

    public function getPersianDate(DateTimeInterface $dto): PersianDate
    {
        $bind = $this->gregorianToMds(
            $dto->format('Y'),
            $dto->format('m'),
            $dto->format('d')
        );

        return new PersianDate($bind[0], $bind[1], $bind[2], null, null, null, $dto->format('w'));
    }

    public function isEndOfPersianMonth(DateTimeInterface $date)
    {
        return $this->getEndOfPersianMonth($date) == $date;
    }

    public function getPersianDateTime(DateTimeInterface $dto): PersianDate
    {
        $bind = $this->gregorianToMdsTime(
            $dto->format('Y'),
            $dto->format('m'),
            $dto->format('d'),
            $dto->format('H'),
            $dto->format('i'),
            $dto->format('s')
        );

        return new PersianDate($bind[0], $bind[1], $bind[2], $bind[3], $bind[4], $bind[5], $dto->format('w'));
    }

    public function getHumanReadablePersianDateTime(?DateTimeInterface $dto): ?string
    {
        return $dto ? $this->getPersianDateTime($dto)
            ->getYMDTime('/', ':', ' ', true) : null;
    }

    public function getHumanReadablePersianDate(?DateTimeInterface $dto): ?string
    {
        return $dto ? $this->getPersianDateTime($dto)->getYMD() : null;
    }

    public function getPersianDateNow(): PersianDate
    {
        return $this->getPersianDate($this->serviceTime()->getNow());
    }

    public function getPersianDateTimeStringFromGeorgianString(string $georgianString): string
    {
        return $georgianString != '' ?
            $this->serviceCalendar()->getPersianDateTime(
                $this->serviceTime()->getFromString($georgianString)
            )->getYMDTime() : '';
    }

    public function getPersianDateStringFromGeorgianString(string $georgianString): string
    {
        return $georgianString != '' ?
            $this->serviceCalendar()->getPersianDateTime(
                $this->serviceTime()->getFromString($georgianString)
            ) : '';
    }

    public function getPersianDateTimeNow(): PersianDate
    {
        return $this->getPersianDateTime($this->serviceTime()->getNow());
    }

    public function isValidPersianYear(int $year): bool
    {
        return ($year >= 1300 && $year <= $this->getPersianDateNow()->getYear());
    }

    public function getDateFromPersianDateString(?string $date, string $delimiter = '/'): ?DateTimeInterface
    {
        if (empty($date)) return null;

        $date = explode($delimiter, $date);

        if (count($date) != 3) {
            return null;
        }

        foreach ($date as &$dateItem) {
            $dateItem = $this->serviceText()->convertToInternationalNumbers($dateItem);
        }

        $ymd = $this->mdsToGregorian((int)$date[0], (int)$date[1], (int)$date[2]);

        return $this->serviceTime()->getFromString($ymd[0] . '-' . $ymd[1] . '-' . $ymd[2]);
    }

    public function getDateTimeFromPersianDateString($date, string $dateDelimiter = '/'): ?DateTimeInterface
    {
        $dateTime = explode(' ', $date);

        if (count($dateTime) != 2) {
            return null;
        }

        $time = explode(':', $dateTime[1]);

        if (count($time) < 2) {
            return null;
        }

        $date = $this->getDateFromPersianDateString($date, $dateDelimiter);

        foreach ($time as &$timeItem) {
            $timeItem = $this->serviceText()->convertToInternationalNumbers($timeItem);
        }

        $returnValue = null;
        if ($date) {
            $returnValue = $date->setTime($time[0], $time[1], $time[2] ?? 0);
        }
        return $returnValue === false ? null : $returnValue;
    }

    public function getDateFromPersianDate(PersianDate $date): DateTimeInterface
    {
        return $this->getDateTimeFromPersianYMD($date->getYear(), $date->getMonth(), $date->getDay());
    }

    public function getDateTimeFromPersianYMD($year, $month, $day): DateTimeInterface
    {
        $ymd = $this->mdsToGregorian($year, $month, $day);
        return $this->serviceTime()->getFromString($ymd[0] . '-' . $ymd[1] . '-' . $ymd[2]);
    }

    public function getPersianMonthsWithDaysDropdown()
    {
        $months = [];

        foreach (PersianCalendar::getMonths() as $key => $label) {
            $months[$key] = [
                'label' => $label,
                'normal' => PersianCalendar::getDaysInMonth($key),
                'leap' => $key != 12 ? PersianCalendar::getDaysInMonth($key) : PersianCalendar::getDaysInMonth($key) + 1
            ];
        }
        return $months;
    }

    public function getPersianYearsPeriodBeforeNowDropdown(int $yearsBefore, int $yearBeforeNow = 0): array
    {
        $currentYear = $this->getPersianDateNow()->getYear();
        $from = $currentYear - $yearsBefore;
        $to = $currentYear - $yearBeforeNow;

        $years = [];

        foreach ($this->getPersianYearsPeriod($from, $to) as $key => $value) {
            $data = !PersianCalendar::isLeapYear($key) ? $key : ['label' => $key, 'leap' => true];
            $years[$key] = $data;
        }

        return $years;
    }

    public function getPersianYearsPeriodBeforeNow(int $yearsBefore, int $yearBeforeNow = 0): array
    {
        $currentYear = $this->getPersianDateNow()->getYear();
        $from = $currentYear - $yearsBefore;
        $to = $currentYear - $yearBeforeNow;

        return $this->getPersianYearsPeriod($from, $to);
    }

    public function getPersianYearsPeriod($from, $to)
    {
        $range = range($from, $to);
        return array_combine($range, $range);
    }

    public function getPersianDaysInMonth(int $month = null, int $year = null): int
    {
        return PersianCalendar::getDaysInMonth($month, $year);
    }

    public function getDayNumberOfWeek(DateTimeInterface $date): int
    {
        return date('w', strtotime($date->format('Y-m-d')));
    }

    public function getDayNameOfWeek(DateTimeInterface $date): string
    {
        $dayNumber = $this->getDayNumberOfWeek($date);
        return self::WEEK_DAYS[$dayNumber];
    }

    private function div($a, $b): int
    {
        return (int)($a / $b);
    }

    private function gregorianToMds($gY, $gM, $gD)
    {
        $gDaysInMonth = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        $mDaysInMonth = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);


        $gy = $gY - 1600;
        $gm = $gM - 1;
        $gd = $gD - 1;

        $gDayNo = 365 * $gy + $this->div($gy + 3, 4) - $this->div($gy + 99, 100) + $this->div($gy + 399, 400);

        for ($i = 0; $i < $gm; ++$i) {
            $gDayNo += $gDaysInMonth[$i];
        }
        if ($gm > 1 && (($gy % 4 == 0 && $gy % 100 != 0) || ($gy % 400 == 0))) {
            /* leap and after Feb */
            $gDayNo++;
        }
        $gDayNo += $gd;

        $mDayNo = $gDayNo - 79;

        $jNp = $this->div($mDayNo, 12053); /* 12053 = 365*33 + 32/4 */
        $mDayNo = $mDayNo % 12053;

        $jy = 979 + 33 * $jNp + 4 * $this->div($mDayNo, 1461); /* 1461 = 365*4 + 4/4 */

        $mDayNo %= 1461;

        if ($mDayNo >= 366) {
            $jy += $this->div($mDayNo - 1, 365);
            $mDayNo = ($mDayNo - 1) % 365;
        }

        for ($i = 0; $i < 11 && $mDayNo >= $mDaysInMonth[$i]; ++$i) {
            $mDayNo -= $mDaysInMonth[$i];
        }
        $jm = $i + 1;
        $jd = $mDayNo + 1;

        return array($jy, $jm, $jd);
    }

    private function gregorianToMdsTime($gY, $gM, $gD, $gH, $gI, $gS)
    {
        $gDaysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        $mDaysInMonth = [31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29];


        $gy = $gY - 1600;
        $gm = $gM - 1;
        $gd = $gD - 1;

        $gDayNo = 365 * $gy + $this->div($gy + 3, 4) - $this->div($gy + 99, 100) + $this->div($gy + 399, 400);

        for ($i = 0; $i < $gm; ++$i) {
            $gDayNo += $gDaysInMonth[$i];
        }
        if ($gm > 1 && (($gy % 4 == 0 && $gy % 100 != 0) || ($gy % 400 == 0))) {
            /* leap and after Feb */
            $gDayNo++;
        }
        $gDayNo += $gd;

        $mDayNo = $gDayNo - 79;

        $jNp = $this->div($mDayNo, 12053); /* 12053 = 365*33 + 32/4 */
        $mDayNo = $mDayNo % 12053;

        $jy = 979 + 33 * $jNp + 4 * $this->div($mDayNo, 1461); /* 1461 = 365*4 + 4/4 */

        $mDayNo %= 1461;

        if ($mDayNo >= 366) {
            $jy += $this->div($mDayNo - 1, 365);
            $mDayNo = ($mDayNo - 1) % 365;
        }

        for ($i = 0; $i < 11 && $mDayNo >= $mDaysInMonth[$i]; ++$i) {
            $mDayNo -= $mDaysInMonth[$i];
        }
        $jm = $i + 1;
        $jd = $mDayNo + 1;

        return [$jy, $jm, $jd, (int)$gH, (int)$gI, (int)$gS];
    }

    private function mdsToGregorian($mY, $jM, $mD)
    {
        $gDaysInMonth = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        $mDaysInMonth = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);


        $jy = $mY - 979;
        $jm = $jM - 1;
        $jd = $mD - 1;

        $mDayNo = 365 * $jy + $this->div($jy, 33) * 8 + $this->div($jy % 33 + 3, 4);
        for ($i = 0; $i < $jm; ++$i) {
            $mDayNo += $mDaysInMonth[$i];
        }

        $mDayNo += $jd;

        $gDayNo = $mDayNo + 79;

        $gy = 1600 + 400 * $this->div($gDayNo, 146097); /* 146097 = 365*400 + 400/4 - 400/100 + 400/400 */
        $gDayNo = $gDayNo % 146097;

        $leap = true;
        if ($gDayNo >= 36525) { /* 36525 = 365*100 + 100/4 */
            $gDayNo--;
            $gy += 100 * $this->div($gDayNo, 36524); /* 36524 = 365*100 + 100/4 - 100/100 */
            $gDayNo = $gDayNo % 36524;
            if ($gDayNo >= 365) {
                $gDayNo++;
            } else {
                $leap = false;
            }
        }

        $gy += 4 * $this->div($gDayNo, 1461); /* 1461 = 365*4 + 4/4 */
        $gDayNo %= 1461;

        if ($gDayNo >= 366) {
            $leap = false;

            $gDayNo--;
            $gy += $this->div($gDayNo, 365);
            $gDayNo = $gDayNo % 365;
        }

        for ($i = 0; $gDayNo >= $gDaysInMonth[$i] + ($i == 1 && $leap); $i++) {
            $gDayNo -= $gDaysInMonth[$i] + ($i == 1 && $leap);
        }
        $gm = $i + 1;
        $gd = $gDayNo + 1;

        return array($gy, $gm, $gd);
    }

    public function getPersianLastMonthPeriod(DateTimeInterface $dateTime): array
    {
        $persianDate = $this->getPersianDate($dateTime);

        $month = $persianDate->getMonth();
        $year = $persianDate->getYear();

        $prevMonth = null;
        $prevYear = null;

        if ($month == 1) {
            $prevMonth = 12;
            $prevYear = $year - 1;
        } else {
            $prevMonth = $month - 1;
            $prevYear = $year;
        }

        $startDate = $this->getDateFromPersianDate((new PersianDate($prevYear, $prevMonth, 1)));
        $endDate = $this->getDateFromPersianDate((new PersianDate($year, $month, 1)));

        return [$startDate, $this->serviceTime()->subDays($endDate, 1)];
    }

    public function getPersianMonthPeriod(DateTimeInterface $dateTime): array
    {
        $persianDate = $this->getPersianDate($dateTime);

        $month = $persianDate->getMonth();
        $year = $persianDate->getYear();

        $nextMonth = null;
        $nextYear = null;

        if ($month == 12) {
            $nextMonth = 1;
            $nextYear = $year + 1;
        } else {
            $nextMonth = $month + 1;
            $nextYear = $year;
        }

        $startDate = $this->getDateFromPersianDate((new PersianDate($year, $month, 1)));
        $endDate = $this->getDateFromPersianDate((new PersianDate($nextYear, $nextMonth, 1)));

        return [$startDate, $this->serviceTime()->subDays($endDate, 1)];
    }

    public function getPersianWeekPeriod(DateTimeInterface $dateTime)
    {
        $dayOfWeek = (int)$dateTime->format('w');

        $firstDayDelta = 0;
        $lastDayDelta = 0;

        if ($dayOfWeek != 6) {
            $firstDayDelta = $dayOfWeek + 1;
        }

        if (5 - $dayOfWeek > 0) {
            $lastDayDelta = 5 - $dayOfWeek;
        } elseif ($dayOfWeek != 5) {
            $lastDayDelta = 6;
        }

        return [$this->serviceTime()->subDays($dateTime, $firstDayDelta), $this->serviceTime()->addDays($dateTime, $lastDayDelta)];
    }

    public function getPersianDaysDropDown(): array
    {
        $days = [];
        for ($i = 1; $i <= 31; $i++) {
            $days[$i] = $this->serviceText()->convertToPersianNumber($i);
        }

        return $days;
    }

    public function getPersianMonthsDropDown(): array
    {
        $months = [];

        for ($i = 1; $i <= 12; $i++) {
            $months[$i] = $this->serviceText()->convertToPersianNumber($i);
        }

        return $months;
    }

    public function getPersianMonthsDropDownWithNames(): array
    {
        $months = [];

        for ($i = 1; $i <= 12; $i++) {
            $months[$i] = self::MONTH_ALL[$i];
        }

        return $months;
    }

    public function getPersianYearsDropDown(?int $startFrom = null): array
    {
        $date = $this->getPersianDateNow();
        $years = [];

        if ($startFrom === null) {
            $startFrom = $date->getYear() - 17;
            $endTo = 1310;
            for ($year = $startFrom; $year >= $endTo; $year--) {
                $years[$year] = $this->serviceText()->convertToPersianNumber($year);
            }
        } else {
            $endTo = $startFrom + 30;
            for ($year = $startFrom; $year <= $endTo; $year++) {
                $years[$year] = $this->serviceText()->convertToPersianNumber($year);
            }
        }


        return $years;
    }

    public function getPersianYearsDropDownOfInterval(int $startFrom, ?int $endTo = null): array
    {
        $years = [];

        if (!$endTo) {
            $endTo = $this->getPersianDateNow()->getYear();
        }

        for ($year = $endTo; $year >= $startFrom; $year--) {
            $years[$year] = $this->serviceText()->convertToPersianNumber($year);
        }

        return $years;
    }

    public function getEndOfPersianMonth(DateTimeInterface $dateTime): DateTimeInterface
    {
        return $this->getPersianMonthPeriod($dateTime)[1];
    }

    public function getStartOfMonth(PersianDate $dateTime): PersianDate
    {
        $date = $this->serviceCalendar()->getDateFromPersianDate($dateTime);
        return $this->getPersianDate($this->serviceTime()->addDays($date, -$dateTime->getDay() + 1));
    }

    public function getStartOfPersianMonth(DateTimeInterface $dateTime): DateTimeInterface
    {
        $persian = $this->getPersianDate($dateTime);
        return $this->serviceTime()->addDays($dateTime, -$persian->getDay() + 1);
    }

    public function getEndOfMonth(PersianDate $date): PersianDate
    {
        return $this->getLastDayOfMonthPersianDate($this->getDateFromPersianDate($date));
    }

    public function getPersianYears(): array
    {
        $currentYear = $this->getPersianDateNow()->getYear();

        return range(1300, $currentYear);
    }

    public function getPersianMonths(): array
    {
        return [
            [
                'code' => '1',
                'title' => self::MONTH_FARVARDIN,
            ],
            [
                'code' => '2',
                'title' => self::MONTH_ORDIBEHESHT,
            ],
            [
                'code' => '3',
                'title' => self::MONTH_KHORDAD,
            ],
            [
                'code' => '4',
                'title' => self::MONTH_TIR,
            ],
            [
                'code' => '5',
                'title' => self::MONTH_MORDAD,
            ],
            [
                'code' => '6',
                'title' => self::MONTH_SHAHRIVAR,
            ],
            [
                'code' => '7',
                'title' => self::MONTH_MEHR,
            ],
            [
                'code' => '8',
                'title' => self::MONTH_ABAN,
            ],
            [
                'code' => '9',
                'title' => self::MONTH_AZAR,
            ],
            [
                'code' => '10',
                'title' => self::MONTH_DEY,
            ],
            [
                'code' => '11',
                'title' => self::MONTH_BAHMAN,
            ],
            [
                'code' => '12',
                'title' => self::MONTH_ESFAND,
            ],
        ];
    }

    public function getPersianMonthDaysByYearAndMonth(string $year, string $month): int
    {
        if ($month == 12 && $year % 4 != 3) {
            return 29;
        }
        return 30 + (int)($month < 7);
    }

    public function getLastDayOfCurrentYearPersianDate(): PersianDate
    {
        return $this->getLastDayOfYearPersianDate($this->serviceTime()->getToday());
    }

    public function getFirstDayOfCurrentYear(): DateTimeInterface
    {
        return $this->getFirstDayOfPersianYear($this->serviceTime()->getToday());
    }

    public function getLastDayOfCurrentYear(): DateTimeInterface
    {
        return $this->getLastDayOfPersianYear($this->serviceTime()->getToday());
    }

    public function getFirstDayOfCurrentMonth(): DateTimeInterface
    {
        return $this->getFirstDayOfPersianMonth($this->serviceTime()->getToday());
    }

    public function getLastDayOfCurrentMonth(): DateTimeInterface
    {
        $nextMonthPersian = $this->getEndOfMonth($this->serviceCalendar()->getPersianDateNow());
        return $this->serviceCalendar()->getDateFromPersianDate($nextMonthPersian);
    }

    public function getFirstDayOfCurrentWeek(): DateTimeInterface
    {
        return $this->getFirstDayOfPersianWeek($this->serviceTime()->getToday());
    }

    public function getLastDayOfCurrentWeek(): DateTimeInterface
    {
        return $this->getLastDayOfPersianWeek($this->serviceTime()->getToday());
    }

    public function getFirstDayOfPersianYear(DateTimeInterface $date): DateTimeInterface
    {
        return $this->getDateFromPersianDate($this->getFirstDayOfYearPersianDate($date));
    }

    public function getLastDayOfPersianYear(DateTimeInterface $date): DateTimeInterface
    {
        return $this->getDateFromPersianDate($this->getLastDayOfYearPersianDate($date));
    }

    public function getFirstDayOfPersianMonth(DateTimeInterface $date): DateTimeInterface
    {
        return $this->getDateFromPersianDate($this->getFirstDayOfMonthPersianDate($date));
    }

    public function getLastDayOfPersianMonth(DateTimeInterface $date): DateTimeInterface
    {
        return $this->getDateFromPersianDate($this->getLastDayOfMonthPersianDate($date));
    }

    public function getFirstDayOfPersianWeek(DateTimeInterface $date): DateTimeInterface
    {
        return $this->getDateFromPersianDate($this->getFirstDayOfWeekPersianDate($date));
    }

    public function getLastDayOfPersianWeek(DateTimeInterface $date): DateTimeInterface
    {
        return $this->getDateFromPersianDate($this->getLastDayOfWeekPersianDate($date));
    }

    public function getFirstDayOfYearPersianDate(DateTimeInterface $date): PersianDate
    {
        $datePersian = $this->serviceCalendar()->getPersianDate($date);
        return new PersianDate($datePersian->getYear(), 1, 1);
    }

    public function getLastDayOfYearPersianDate(DateTimeInterface $date): PersianDate
    {
        $datePersian = $this->serviceCalendar()->getPersianDate($date);
        $day = $this->getPersianMonthDaysByYearAndMonth($datePersian->getYear(), 12);
        return new PersianDate($datePersian->getYear(), 12, $day);
    }

    public function getFirstDayOfMonthPersianDate(DateTimeInterface $date): PersianDate
    {
        $datePersian = $this->serviceCalendar()->getPersianDate($date);
        return new PersianDate($datePersian->getYear(), $datePersian->getMonth(), 1);
    }

    public function getLastDayOfMonthPersianDate(DateTimeInterface $dateTime): PersianDate
    {
        return $this->getPersianDateTime($this->getPersianMonthPeriod($dateTime)[1]);
    }

    public function getFirstDayOfWeekPersianDate(DateTimeInterface $date): PersianDate
    {
        $datePersian = $this->serviceCalendar()->getPersianDate($date);
        return $datePersian->addDays(-$datePersian->getDayOfWeek());
    }

    public function getLastDayOfWeekPersianDate(DateTimeInterface $date): PersianDate
    {
        $datePersian = $this->serviceCalendar()->getPersianDate($date);
        return $datePersian->addDays(6 - $datePersian->getDayOfWeek());
    }

    public function getPersianMonthInfo(int $monthsToAdd = 0)
    {
        $persianDate = $this->getPersianDate($this->serviceTime()->getNow());
        $targetMonth = $persianDate->addMonths($monthsToAdd);
        $date = $this->getDateFromPersianDate($targetMonth);
        $monthPeriod = $this->getPersianMonthPeriod($date);

        return [
            'year' => $targetMonth->getYear(),
            'month' => $targetMonth->getMonthName(),
            'month_index' => $targetMonth->getMonth(),
            'current_day' => $monthsToAdd === 0 ? $targetMonth->getDay() : null,
            'days' => $targetMonth->getDaysInMonth(),
            'start_date' => $monthPeriod[0],
            'start_weekday' => $this->getPersianDate($monthPeriod[0])->getDayOfWeek(),
            'end_weekday' => $this->getPersianDate($monthPeriod[1])->getDayOfWeek(),
            'end_date' => $monthPeriod[1]
        ];
    }

    public function isLeapYear(PersianDate $date): bool
    {
        return PersianCalendar::isLeapYear($date->getYear());
    }

    public function isLeapYearInPersian(\DateTimeInterface $date): bool
    {
        return $this->getPersianDate($date)->isLeapYear();
    }

    public function getNumberOfDaysInYear(PersianDate $date)
    {
        return 365 + (int)$this::isLeapYear($date);
    }

    public function getPersianApproximateTimeAgo(DateTimeInterface $dateTime): string
    {
        $minutesDiff = round($this->serviceTime()->getDiffSeconds($this->serviceTime()->getNow(), $dateTime) / 60);

        switch (true) {
            case ($minutesDiff < 5):
                return 'همین الان!';
            case ($minutesDiff < 10):
                return 'چند دقیقه پیش';
            case ($minutesDiff < 60):
                return $minutesDiff . ' دقیقه پیش';
            case ($minutesDiff < TimeService::DAY / 60):
                $hours = round($minutesDiff / 60);
                return $hours . ' ساعت پیش';
            case ($minutesDiff < TimeService::MONTH / 60):
                $days = round($minutesDiff / (60 * 24));
                return $days . ' روز پیش';
            case ($minutesDiff < TimeService::YEAR / 60):
                $months = round(($this->serviceTime()->getDaysDiff($dateTime, $this->serviceTime()->getNow())) / 30);
                return $months . ' ماه پیش';
            default:
                return ' بیش از ۱ سال پیش';
        }
    }

    public function getPersianSpokenDate(DateTimeInterface $dateTime): string
    {
        $diffInDays = $this->serviceTime()->getDaysDiff($this->serviceTime()->getToday(), $dateTime);

        switch ($diffInDays) {
            case (0):
                return 'امروز';
            case (1):
                return 'فردا';
            default:
                $persianDate = $this->getPersianDate($dateTime);

                return sprintf(
                    '%s، %s %s',
                    PersianCalendar::getWeekDayName((($persianDate->getDayOfWeek() - 1) + 7) % 7),
                    $persianDate->getDay(),
                    self::MONTH_ALL[$persianDate->getMonth()]
                );
        }
    }

    public function getPersianFullDate(DateTimeInterface $dateTime): string
    {
        $persianDate = $this->getPersianDate($dateTime);

        return sprintf(
            '%s %s %s %s',
            PersianCalendar::getWeekDayName((($persianDate->getDayOfWeek() - 1) + 7) % 7),
            $persianDate->getDay(),
            self::MONTH_ALL[$persianDate->getMonth()],
            $this->getPersianDateNow()->getYear(),
        );
    }

    public function reverseOrderOfPersianStringDate(string $date): ?string
    {
        $dmy = explode('/', $date);
        if (count($dmy) != 3) {
            return null;
        }

        $ymd[0] = $dmy[2];
        $ymd[1] = $dmy[1];
        $ymd[2] = $dmy[0];

        return implode('/', $ymd);
    }

    public function getDateFromReversePersianDateString(string $date): ?string
    {
        $reversedDate = $this->reverseOrderOfPersianStringDate($date);
        return $reversedDate ? $this->getDateFromPersianDateString($reversedDate)->format('Y-m-d H:i:s') : '';
    }

    public function validatePersianDateFormat(string $date, string $delimiter = '/'): bool
    {
        $g = $this->getDateFromPersianDateString($date, $delimiter);
        return $g && $date == $this->getPersianDate($g)->getYMD($delimiter);
    }

    public function getPersianSpokenDayMonth(DateTimeInterface $dateTime): string
    {
        $persianDate = $this->serviceCalendar()->getPersianDate($dateTime);
        return $persianDate->getDay() . ' ' . self::MONTH_ALL[$persianDate->getMonth()];
    }
}