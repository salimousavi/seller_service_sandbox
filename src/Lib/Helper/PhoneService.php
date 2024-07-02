<?php

namespace App\Lib\Helper;

use App\Helpers;
use Exception;

class PhoneService
{
    use Helpers;

    const MOBILE_NUMBER_PATTERN = 'mobile_number_pattern';
    const MOBILE_NUMBER_PATTERN_JS = 'mobile_number_pattern_js';
    const LAND_LINE_NUMBER_PATTERN = 'land_line_number_pattern';
    const LAND_LINE_NUMBER_PATTERN_JS = 'land_line_number_pattern_js';

    const MOBILE_LENGTH = 11;

    public function getPhoneCodes()
    {
        return [
            'international' => '98',
            'local' => '0'
        ];
    }

    public function getPattern(string $patternCode, bool $exact = true)
    {
        $patterns = [
            self::MOBILE_NUMBER_PATTERN => ($exact ? '/^' : '/') .
                '(?|(?:(?:\+?|00)(?<code>98))|(?<code>0))?(?<phone>(?:90|91|92|93|99)[0-9]{8})' .
                ($exact ? '$' : '') . '/i',
            self::MOBILE_NUMBER_PATTERN_JS => ($exact ? '^' : '') . '(?:(?:(?:\\+?|00)(98))|(0))?((?:90|91|92|93|99)[0-9]{8})' . ($exact ? '$' : ''),
            self::LAND_LINE_NUMBER_PATTERN => ($exact ? '/^' : '/') .
                '(?|(?:(?:\\+?|00)(?<code>98))|(0))?' .
                '(?<phone>(?:(?:1[137]|2[13-68]|3[1458]|4[145]|5[1468]|6[16]|7[1467]|8[13467])\\d{3}|94(?:000|2\\d{2}))\\d{5})' .
                ($exact ? '$' : '') . '/i',
            self::LAND_LINE_NUMBER_PATTERN_JS => ($exact ? '^' : '') .
                '((?:(?:\\+?|00)(98))|(0))?(?:(?:1[137]|2[13-68]|3[1458]|4[145]|5[1468]|6[16]|7[1467]|8[13467])\\d{3}|94(?:000|2\\d{2}))\\d{5}' .
                ($exact ? '$' : ''),
        ];

        return $patterns[$patternCode];
    }

    public function isMobileNumber(?string $phone = '', bool $clear = true)
    {
        if (empty($phone)) {
            return false;
        }

        $pattern = $this->getPattern(self::MOBILE_NUMBER_PATTERN);
        return (bool)preg_match($pattern, $clear ? $this->clearPhone($phone) : $phone);
    }

    public function isLandNumber(string $phone = '', bool $clear = true)
    {
        if (empty($phone)) {
            return false;
        }

        $pattern = $this->getPattern(self::LAND_LINE_NUMBER_PATTERN);
        return (bool)preg_match($pattern, $clear ? $this->clearPhone($phone) : $phone);
    }

    public function isMobileOrLandNumber($phone)
    {
        return $this->isMobileNumber($phone) || $this->isLandNumber($phone);
    }

    public function beautify($phone, bool $persianDigits = false): string
    {
        if (empty($phone)) {
            return '';
        }

        $pos = strpos($phone, '98');

        if ($pos !== false && $pos == 0) {
            $phone = substr_replace($phone, '0', $pos, strlen('98'));
            return $persianDigits ? $phone : $this->serviceText()->convertToInternationalNumbers($phone);
        }

        return $phone;
    }

    public function getPhoneWithCountryCode($phone, bool $clear = true)
    {
        if (empty($phone)) {
            return '';
        }

        $phone = $clear ? $this->clearPhone($phone) : $phone;

        $phoneCodes = $this->getPhoneCodes();
        $internationalCode = $phoneCodes['international'];
        $localCode = $phoneCodes['local'];
        if ($pattern = $this->getPattern(self::MOBILE_NUMBER_PATTERN)) {
            if (preg_match($pattern, $phone, $match)) {
                if (!empty($match['phone'])) {
                    $phone = $match['phone'];
                    $code = $internationalCode;
                    return ($code . $phone);
                }
            }
        }

        if ($pattern = $this->getPattern(self::LAND_LINE_NUMBER_PATTERN)) {
            if (preg_match($pattern, $phone, $match)) {
                if (!empty($match['phone'])) {
                    $phone = $match['phone'];
                    $code = $internationalCode;
                    return ($code . $phone);
                }
            }
        }

        if (substr($phone, 0, strlen($internationalCode)) === $internationalCode) {
            return $phone;
        }

        if (!empty($localCode)) {
            if (substr($phone, 0, strlen($localCode)) === $localCode) {
                return $internationalCode . substr($phone, strlen($localCode));
            }
        }

        return ($internationalCode . $phone);
    }

    public function convertToStandardPhoneNumber(?string $phone): ?string
    {
        if (empty($phone)) {
            return $phone;
        }

        $phone = $this->serviceText()->convertToInternationalNumbers($phone);

        if (substr($phone, 0, 1) == '+') {
            $phone = substr($phone, 1);
        }

        if (substr($phone, 0, 1) === '0') {
            $phone = '98' . substr($phone, 1);
        }

        if (strlen($phone) >= 2 && substr($phone, 0, 2) !== '98') {
            $phone = '98' . $phone;
        }

        return $phone;
    }

    public function convertToLocalPhoneNumber(?string $phone): string
    {
        $codes = $this->getPhoneCodes();

        if (empty($phone)) {
            return '';
        }

        if (substr($phone, 0, 1) == '+') {
            $phone = substr($phone, 1);
        }

        if (substr($phone, 0, strlen($codes['international'])) === $codes['international']) {
            $phone = $codes['local'] . substr($phone, strlen($codes['international']));
        }

        if (strlen($phone) >= 2 and substr($phone, 0, strlen($codes['local'])) !== $codes['local']) {
            $phone = $codes['local'] . $phone;
        }

        return $phone;
    }

    public function clearPhone(string $phone): string
    {
        $phone = $this->serviceText()->convertToInternationalNumbers($phone);
        $phone = preg_replace('/\D/', '', $phone);

        return $phone;
    }

    public function getPartialPhoneNumber(?string $phone, int $numberOfShowedNumber = 7): string
    {
        if (empty($phone)) {
            return '';
        }

        $phone = $this->beautify($phone);

        $subPhone = substr($phone, 0, $numberOfShowedNumber);

        return $subPhone . str_repeat('*', self::MOBILE_LENGTH - $numberOfShowedNumber);
    }

    public function getMobilePhoneArrayFromTextArea(string $text): array
    {
        $arrayPhones = explode("\n", str_replace("\r", "", trim($text)));
        $phones = [];
        foreach ($arrayPhones as $phone) {
            if ($phone !== '') {
                if ($this->isMobileNumber($phone)) {
                    array_push($phones, $phone);
                } else {
                    throw new Exception('mobile number has wrong format: ' . $phone);
                }
            }
        }
        return $phones;
    }

    public function getElevenLengthPhoneNumber(string $phoneNumber): string
    {
        $phoneNumber = $this->serviceText()->convertToInternationalNumbers(str_replace(
            ' ',
            '',
            $phoneNumber
        ));

        if (str_starts_with($phoneNumber, '+98')) {
            return '0' . substr($phoneNumber, 3);
        } elseif (str_starts_with($phoneNumber, '98')) {
            return '0' . substr($phoneNumber, 2);
        }

        /**
         * @ todo: this is a temporary fix
         * check why the phoneCode is empty later
         */
        $phoneNumber = str_replace(['-','*','/'], '', $phoneNumber);
        if (!str_starts_with($phoneNumber, '09') && 8 === strlen($phoneNumber)) {
            return '021' . $phoneNumber;
        } elseif (!str_starts_with($phoneNumber, '09') && strlen($phoneNumber) < 8) {
            $times = 11 - strlen($phoneNumber);
            return str_repeat('0', $times) . $phoneNumber;
        }
        if (10 === strlen($phoneNumber)) {
            $phoneNumber = '0' . $phoneNumber;
        }
        return $phoneNumber;
    }
}