<?php

use App\Enums\SystemSettingsKeys;
use App\Services\System\SystemSettingService;

/**
 * Handle How to get System Setting values
 */

if (!function_exists('getSystemSettingValue')) {
    function getSystemSettingValue(string $settingKey): string | null
    {
        return match ($settingKey) {
            // SystemSettingsKeys::Name->value           => (new SystemSettingService)->index()[0]["value"],
            default => null,
        };
    }
}
