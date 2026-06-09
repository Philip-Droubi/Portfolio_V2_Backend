<?php

namespace App\Enums\Media;

enum MediaableTypes: string
{
    case PROJECT                                = 'App\Models\Project\Project';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
