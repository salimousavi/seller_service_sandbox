<?php

namespace App\Lib\Helper;

class TextService
{
    const PERSIAN_DB_CHARACTER = [
        'ک', 'د', 'ب', 'ز', 'ذ', 'ش', 'س', 'ی', 'ی', '۰', '۱', '۲',
        '۳', '۴', '۵', '۶', '۷', '۸', '۹', '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', 'ی'
    ];

    const ARABIC_DB_CHARACTER = [
        'ك', 'دِ', 'بِ', 'زِ', 'ذِ', 'شِ', 'سِ', 'ى', 'ي', '٠', '١', '٢', '٣', '٤', '٥', '٦', '٧',
        '٨', '٩', '&#1632;', '&#1633;', '&#1634;', '&#1635;', '&#1636;', '&#1637;', '&#1638;', '&#1639;', '&#1640;', '&#1641;',
        'ي'
    ];

    const PERSIAN_NUMBERS = [
        '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'
    ];

    const INTERNATIONAL_NUMBERS = [
        '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
    ];

    const PERSIAN_CHARACTERS = [
        'آ', 'ا', 'ب', 'پ', 'ت', 'ث', 'ج', 'چ', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'ژ', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ',
        'ف', 'ق', 'ک', 'گ', 'ل', 'م', 'ن', 'و', 'ه', 'ی'
    ];

    const PERSIAN_CHARACTERS_WITH_HAMZEH = [
        'آ', 'ا', 'ب', 'پ', 'ت', 'ث', 'ج', 'چ', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'ژ', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ',
        'ف', 'ق', 'ک', 'گ', 'ل', 'م', 'ن', 'و', 'ه', 'ی', 'ئ'
    ];

    const PUNCTUATION_CHARACTERS = [
        '!', '?' , '.' , ',', ';', ':', '-', '[', ']', '{', '}', '(', ')'
    ];

    public function getRandNumber(int $length)
    {
        $intMin = (10 ** $length) / 10;
        $intMax = (10 ** $length) - 1;

        return mt_rand($intMin, $intMax);
    }

    public function getRandString($length, $charset = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'): string
    {
        $ret = '';
        $lim = strlen($charset) - 1;

        for (; $length > 0; --$length) {
            $ret .= $charset[mt_rand(0, $lim)];
        }

        return $ret;
    }

    public function decorateThousands($number): string
    {
        if ($number > 1000 * 1000 * 1000) {
            return round($number / (1000 * 1000 * 1000), 2) . 'G';
        } elseif ($number > 1000 * 1000) {
            return round($number / (1000 * 1000), 2) . 'M';
        } elseif ($number > 1000) {
            return round($number / (1000), 2) . 'k';
        } else {
            return $number;
        }
    }

    public function convertToInternationalNumbers(?string $string): ?string
    {
        if (empty($string)) {
            return $string;
        }

        $newNumbers = range(0, 9);
        // 1. Persian HTML decimal
        $persianDecimal = array('&#1776;', '&#1777;', '&#1778;', '&#1779;', '&#1780;', '&#1781;', '&#1782;', '&#1783;', '&#1784;', '&#1785;');
        // 2. Arabic HTML decimal
        $arabicDecimal = array('&#1632;', '&#1633;', '&#1634;', '&#1635;', '&#1636;', '&#1637;', '&#1638;', '&#1639;', '&#1640;', '&#1641;');
        // 3. Arabic Numeric
        $arabic = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
        // 4. Persian Numeric
        $persian = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');

        $string = str_replace($persianDecimal, $newNumbers, $string);
        $string = str_replace($arabicDecimal, $newNumbers, $string);
        $string = str_replace($arabic, $newNumbers, $string);

        return str_replace($persian, $newNumbers, $string);
    }

    public function convertToPersianCharacters(?string $string): string
    {
        if (empty($string)) {
            return '';
        }

        $string = $this->convertToInternationalNumbers($string);

        $characters = [
            'ك' => 'ک',
            'دِ' => 'د',
            'بِ' => 'ب',
            'زِ' => 'ز',
            'ذِ' => 'ذ',
            'شِ' => 'ش',
            'سِ' => 'س',
            'ى' => 'ی',
            'ي' => 'ی',
        ];

        return str_replace(array_keys($characters), array_values($characters), $string);
    }

    public function sanitizeEmail(?string $email): string
    {
        if (empty($email)) {
            return '';
        }

        return htmlspecialchars(filter_var($email, FILTER_SANITIZE_EMAIL));
    }

    public function sanitizeText(?string $text): string
    {
        if ($text === null) { // please do not change it to empty($text)
            return '';
        }

        return htmlspecialchars(filter_var($text, FILTER_SANITIZE_STRING));
    }

    public function sanitizeArray(array &$input)
    {
        if (empty($input)) {
            return;
        }

        foreach ($input as $key => &$value) {
            if (is_array($value)) {
                $this->sanitizeArray($value);
            }

            if (is_string($value)) {
                $input[$key] = $this->sanitizeText($value);
            }
        }
    }

    public function isPersianString(string $text): bool
    {
        $allowableCharacter = array_merge(self::PERSIAN_CHARACTERS_WITH_HAMZEH, self::PUNCTUATION_CHARACTERS, [' '], self::PERSIAN_NUMBERS);
        foreach (mb_str_split($text) as $char) {
            if (!in_array($char, $allowableCharacter)) {
                return false;
            }
        }

        return true;
    }

    public function hasPersianCharacter(?string $text): bool
    {
        if (empty($text)) return false;
        foreach (mb_str_split($text) as $char) {
            if (in_array($char, self::PERSIAN_CHARACTERS_WITH_HAMZEH)) {
                return true;
            }
        }

        return false;
    }

    public function hasNumber(?string $text): bool
    {
        if (empty($text)) return false;
        $text = $this->convertToInternationalNumbers($text);

        foreach (mb_str_split($text) as $char) {
            if (in_array($char, self::INTERNATIONAL_NUMBERS)) {
                return true;
            }
        }

        return false;
    }

    public function convertToPersianNumber(?string $string): ?string
    {
        if ($string === null) {
            return null;
        }

        return str_replace(self::INTERNATIONAL_NUMBERS, self::PERSIAN_NUMBERS, $string);
    }

    /** convert camelCase OR PascalCase to snake_case */
    public function pascalToSnake(?string $string): ?string
    {
        return $string ? ltrim(strtolower(preg_replace('/[A-Z]([A-Z](?![a-z]))*/', '_$0', $string)), '_') : null;
    }

    public function seperateThousand(string|int|null $number, bool $inPersian = true): string|int|null
    {
        if ($number == '') return $number;
        $decimals = (int) strpos(strrev(strval($number)), ".");
        $number = number_format($this->convertToInternationalNumbers($number) , $decimals , '.' , ',' );
        return $inPersian ? $this->convertToPersianNumber($number) : $number;
    }

    public function isSheba(?string $string): bool
    {
        if (empty($string)) return false;

        if (preg_match("/^(?:IR)(?=.{24}$)[0-9]*$/i", strtoupper($this->convertToInternationalNumbers($string)))) {
            return true;
        }

        return false;
    }

    public function isValidJsonString(?string $string): bool
    {
        if (empty($string)) return false;

        json_decode($string);
        return json_last_error() === JSON_ERROR_NONE;
    }
}