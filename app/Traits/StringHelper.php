<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Pluralizer;

/**
 * Functions help in handling strings
 */
trait StringHelper
{
    /**
     * Converts a table name to a model name.
     * For example, `users` will become `User`.
     *
     * @param string $name The table name.
     * @return string The model name.
     */
    public function getModelNameFromTableName($name): string
    {
        return Str::studly(Str::singular($name));
    }

    /**
     * Returns the plural form of a given word as a variable name.
     * The resulting string will be in lowercase.
     *
     * @param string $name The given word.
     * @return string The plural form of the given word as a variable name.
     */
    public static function getPluralVarName($name): string
    {
        return strtolower(Str::plural($name));
    }

    /**
     * Returns the singular form of a given word as a variable name.
     * The resulting string will be in lowercase.
     *
     * @param string $name The given word.
     * @return string The singular form of the given word as a variable name.
     */
    public static function getSingularVarName($name): string
    {
        return strtolower(Pluralizer::singular($name));
    }

    /**
     * Converts Arabic and Persian numerals in a string to English numerals.
     *
     * @param string $string The input string containing Arabic or Persian numerals.
     * @return string The input string with Arabic and Persian numerals converted to English numerals.
     */
    public function arToEnNum(String $string): String
    {
        return strtr($string, array(
            '۰' => '0',
            '۱' => '1',
            '۲' => '2',
            '۳' => '3',
            '۴' => '4',
            '۵' => '5',
            '۶' => '6',
            '۷' => '7',
            '۸' => '8',
            '۹' => '9',
            '٠' => '0',
            '١' => '1',
            '٢' => '2',
            '٣' => '3',
            '٤' => '4',
            '٥' => '5',
            '٦' => '6',
            '٧' => '7',
            '٨' => '8',
            '٩' => '9'
        ));
    }

    /**
     * Shortens a given string to a given length, optionally adding trailing dots.
     *
     * @param string|null $text The string to shorten.
     * @param int $length The desired length of the shortened string.
     * @param bool $addDots True to add trailing dots, false otherwise.
     * @return string The shortened string.
     */
    public function getShorterString(?string $text, int $length = 203, bool $addDots = true): string
    {
        if (!$text) return '';
        if (mb_strlen($text) > $length) {
            $text = mb_strimwidth($text, 0, $length - ($addDots ? 3 : 0), $addDots ? '...' : '');
        }
        return $text;
    }

    /**
     * Gets a substring between two characters
     * Mostly help while dealing with json stored string
     *
     * @param string $string the string to get the substring from
     * @param string $firstChar the first character to look for
     * @param string $lastChar the last character to look for
     * @return string|bool the substring between the two characters, or false if either of the characters cannot be found
     */
    public function subStringBetweenTwoChars($string, $firstChar, $lastChar): bool|string
    {
        $firstPos = mb_stripos($string, $firstChar);
        $lastPos = mb_stripos($string, $lastChar);
        $length = $lastPos - $firstPos;
        if ($lastPos == 0 || $length < 0)
            return false;
        $subString = mb_substr($string, mb_stripos($string, $firstChar) + 1, $length - 1);
        return $subString;
    }

    //description normalizer

    /**
     * Converts number emojis to actual digits
     *
     * This function maps number emojis to their text equivalents and replaces
     * them in the given string. This is useful for phone numbers and other
     * numerical values which are represented as emojis.
     *
     * @param string $text The input string which may contain number emojis.
     * @return string The input string with number emojis converted to actual digits.
     */
    public function emojiToText($text)
    {
        // Mapping number emojis to actual digits
        $emojiMap = [
            '0️⃣' => '0',
            '1️⃣' => '1',
            '2️⃣' => '2',
            '3️⃣' => '3',
            '4️⃣' => '4',
            '5️⃣' => '5',
            '6️⃣' => '6',
            '7️⃣' => '7',
            '8️⃣' => '8',
            '9️⃣' => '9'
        ];

        // Replace emojis with their text equivalents
        return str_replace(array_keys($emojiMap), array_values($emojiMap), $text);
    }

    /**
     * Normalizes phone numbers within a given string by removing non-digit characters.
     *
     * This function identifies phone number patterns in the input string and removes
     * spaces, dots, and hyphens from within those patterns, leaving only the digits
     * intact. The phone number patterns can optionally start with a '+' followed by
     * 1 to 4 digits (for country code), and are followed by groups of digits separated
     * by spaces, dots, or hyphens.
     *
     * @param string $description The input string potentially containing phone numbers.
     * @return string The normalized string with phone numbers only containing digits.
     */
    public function normalizePhoneNumbers($description)
    {
        // Remove all non-digit characters *inside* phone number patterns
        return preg_replace_callback('/\b(?:\+?\d{1,4}[\s\.\-]*)?\d+([\s\.\-]*\d+)+\b/', function ($matches) {
            return preg_replace('/[\s\.\-]+/', '', $matches[0]); // Remove separators while keeping number intact
        }, $description);
    }

    /**
     * Removes zero-width spaces and other invisible characters from a given string.
     *
     * These characters can sometimes be present in user input or scraped data, and can
     * cause issues when processing the text. This function removes them and returns the
     * sanitized string.
     *
     * @param string $description The input string potentially containing invisible characters.
     * @return string The sanitized string with invisible characters removed.
     */
    public function sanitizeString($description): string
    {
        // Remove zero-width spaces and other invisible characters
        $description = preg_replace('/[\x{200B}\x{2060}\x{FEFF}]/u', '', $description);
        return trim($description);
    }

    /**
     * Converts Eastern Arabic and Persian numbers to Western numbers.
     *
     * @param string $input The input string containing Eastern Arabic or Persian numbers.
     * @return string The input string with Eastern Arabic and Persian numbers converted to Western numbers.
     */
    public function convertEasternToWesternNumbers(string $input): string
    {
        $easternArabic = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
        $persian       = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $western       = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

        return str_replace(array_merge($easternArabic, $persian), array_merge($western, $western), $input);
    }
}
