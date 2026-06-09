<?php

namespace App\Enums\Media;

use Illuminate\Support\Arr;

enum MediaCollectionTypes: string
{
    case PROJECT                = 'project';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function transValues(): array
    {
        $values = [
            self::PROJECT,
        ];

        foreach ($values as $value) {
            $data[] = [
                "key"      => $value->value,
                "value"    => __("media.{$value->value}"),
            ];
        }

        return $data;
    }
}
