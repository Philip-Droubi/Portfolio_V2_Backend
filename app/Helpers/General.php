<?php

use App\Enums\SystemSettingsKeys;
use Nette\Utils\Random;
use Illuminate\Support\Facades\Config;

/**
 * General functions help in project
 */


if (!function_exists('generatePassword')) {
    function generatePassword()
    {
        $year = date('Y');
        $month = date('m');
        $randomNumber = random_int(00, 99);
        $password = $year . $month . $randomNumber . Random::generate(15);
        return $password;
    }
}

if (!function_exists('customizePaginationData')) {
    function customizePaginationData($data)
    {
        $paginationData = [
            'total'          => $data['total'] ?? null,
            'per_page'       => $data['per_page'] ?? null,
            'first_page_url' => $data['first_page_url'] ?? null,
            'prev_page_url'  => $data['prev_page_url'] ?? null,
            'current_page'   => $data['current_page'] ?? null,
            'next_page_url'  => $data['next_page_url'],
            'last_page_url'  => $data['last_page_url'] ?? null,
            // 'from'           => $data['from'] ?? null,
            // 'last_page'      => $data['last_page'] ?? null,
            // 'links'          => $data['links'],
            // 'path'           => $data['path'],
            // 'to'             => $data['to'] ?? null,
        ];

        return $paginationData;
    }
}

/**
 * Convert string to array (Help in dealing with json strings send in request query params)
 */
if (!function_exists('decodeStringToArray')) {
    function decodeStringToArray(?string $string): array
    {
        if (empty($string)) return [];
        $array = [];
        if (is_string($string)) {
            $array = json_decode(str_replace("'", '"', $string), true);
            if (!is_array($array)) $array = [];
        }
        return $array;
    }
}

if (!function_exists('getOrPaginate')) {
    function getOrPaginate($items, $data)
    {
        $items = (isset($data['per_page']))
            ? $items->paginate($data['per_page'])
            : $items->get();

        return $items;
    }
}

/**
 * Convert string like phone numbers to a masked one
 * ex: +963987456321 => +963987******
 */
if (!function_exists('maskString')) {
    function maskString($string, $visibleCharsLength = 5, $maskChar = '*')
    {
        $visiblePart = substr($string, 0, $visibleCharsLength);
        $maskedPart = str_repeat($maskChar, strlen($string) - $visibleCharsLength);
        return "$visiblePart$maskedPart";
    }
}

/**
 * Get translated value while using spatie-transable
 * No need to use it as the package already do that
 */
if (!function_exists('getTranslatedValue')) {
    function getTranslatedValue($model, $column)
    {
        return $model->$column
            ?? $model->getTranslation($column, config('app.fallback_locale'))
            ?? '';
    }
}

/**
 * Return Column translated to available languages in the app
 */
if (!function_exists('getTranslatedColumn')) {
    function getTranslatedColumn($column): array
    {
        return collect(Config::get('_custom.accepted_languages'))
            ->map(fn($locale) => "{$column}->{$locale}")
            ->toArray();
    }
}

/**
 * Store value to specific column in all available languages
 */
if (!function_exists('storeTranslatedValue')) {
    function storeTranslatedValue($data, $column = null): array
    {
        //Mostly will be used to direct access to language
        if (!$column)
            return collect(config('_custom.accepted_languages'))
                ->mapWithKeys(function ($lang) use ($data) {
                    return  isset($data[$lang])
                        ? [$lang => $data[$lang] ?? null]
                        : [];
                })->toArray();
        // There is column
        return collect(config('_custom.accepted_languages'))
            ->mapWithKeys(function ($lang) use ($data, $column) {
                return isset($data[$column])
                    ? [$lang => isset($data[$column][$lang]) ? $data[$column][$lang] ?? '' : '']
                    : [];
            })->toArray();
    }
}

if (!function_exists('formatPrice')) {
    function formatPrice($number, $round = null): string
    {
        if ($round !== null) {
            $number = round($number, $round);
        }

        // Convert to string with full precision (up to 10 decimals)
        $formatted = rtrim(rtrim(sprintf("%.10f", $number), '0'), '.');

        if (strpos($formatted, '.') !== false) {
            [$integerPart, $decimalPart] = explode('.', $formatted);
            return number_format((int)$integerPart) . '.' . $decimalPart;
        }

        return number_format((int)$formatted);
    }
}

if (!function_exists('formatMinutes')) {
    function formatMinutes($minutes): string
    {
        $minutes = floor($minutes); // Ignore fractional part

        if ($minutes < 60) {
            return sprintf("%d %s", $minutes, __('keys.minutes'));
        }

        $hours = floor($minutes / 60);
        $remainingMinutes = $minutes % 60;

        return sprintf("%d:%02d %s", $hours, $remainingMinutes, __('keys.hour'));
    }
}


if (!function_exists('haversineDistance')) {
    function haversineDistance(float $lat1, float $lon1, float $lat2, float $lon2): float
    {
        $earthRadius = 6371; // Radius of Earth in kilometers

        $lat1Rad = deg2rad($lat1);
        $lon1Rad = deg2rad($lon1);
        $lat2Rad = deg2rad($lat2);
        $lon2Rad = deg2rad($lon2);

        $deltaLat = $lat2Rad - $lat1Rad;
        $deltaLon = $lon2Rad - $lon1Rad;

        $a = sin($deltaLat / 2) ** 2 +
            cos($lat1Rad) * cos($lat2Rad) *
            sin($deltaLon / 2) ** 2;

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return $earthRadius * $c;
    }

    if (!function_exists('is_rtl')) {
        function is_rtl($locale = null)
        {
            $locale = $locale ?? app()->getLocale();
            return in_array($locale, config('_custom.rtl_langs'));
        }
    }
}
