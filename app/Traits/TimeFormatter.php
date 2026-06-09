<?php

namespace App\Traits;

use Carbon\Carbon;
use Carbon\CarbonTimeZone;

trait TimeFormatter
{
    /**
     * Convert time data to many human read able ways
     *
     * @param int $time         Time string to pass
     * @param int $diff         The amount of hours that make time retrun in "diffForHumans" format
     * @param int $diffToNow    The amount of seconds which return "now string"
     * @param bool $translated  Get the time translated
     * @param bool $daysOnly    Get the time in days diff only ex: (15 days ago) instead of (2 weeks ago)
     * @param string $format    Time format if it pass the (diff) amount
     *
     * @return string
     *
     */
    protected function getHumanReadableTime($time, int $diff = -48, $diffToNow = -180, bool $translated = true, bool $daysOnly = false, string $format = "Y/m/d g:i A"): string
    {
        if (!$time)
            return "";

        $timezone = config('_custom.user_time_zone', 0); // Could be 180 or 'ETC-3'

        if (is_numeric($timezone)) {
            // If it's already an integer, use it directly
            $offsetMinutes = (int) $timezone;
        } elseif (is_string($timezone)) {
            // Convert timezone string to offset in minutes
            $carbonTz = new CarbonTimeZone($timezone);
            $offsetMinutes = $carbonTz->getOffset(Carbon::now()) / 60; // Convert seconds to minutes
        }

        //Generate formated time
        $time = Carbon::parse($time)->utcOffset($offsetMinutes);
        $now = Carbon::now()->utcOffset($offsetMinutes);
        $translated ? $local = app()->getLocale() : $local = "en";

        //Get Now Time Format
        if ($now->diffInSeconds($time, false) > $diffToNow) return __("resources.now", [], $local);

        //Get differnce Format
        if ($now->diffInHours($time, false) > $diff) {
            if ($daysOnly && $now->diffInHours($time, false) < - (3 * 24)) {
                $totalDays = round($time->locale($local)->diffAsCarbonInterval()->totalDays);
                if ($totalDays <= 10)
                    return __("resources.day_ago", ["day" => $totalDays], $local); //أيام بدل يوم
                return __("resources.days_ago", ["day" => $totalDays], $local);
            }
            return $time->locale($local)->diffForHumans();
        }
        $translated ?
            $timeToReturn = $time->translatedFormat($format)
            : $timeToReturn = $time->format($format);
        return $timeToReturn;
    }
}
