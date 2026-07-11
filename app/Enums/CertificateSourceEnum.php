<?php

namespace App\Enums;

enum CertificateSourceEnum: string
{
    case GOOGLE                = 'google';
    case UDACITY               = 'udacity';
    case ACADEMIC              = 'academic & Volunteer';
    case COURSERA              = 'coursera';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function transValues(): array
    {
        $values = self::cases();
        $data = [];
        foreach ($values as $value) {
            $data[] = [
                "key"      => $value->value,
                "value"    => __("keys.{$value->value}"),
            ];
        }

        return $data;
    }
}
