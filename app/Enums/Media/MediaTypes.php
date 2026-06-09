<?php

namespace App\Enums\Media;

enum MediaTypes: string
{
    case IMAGE          = 'Image';
    case VIDEO          = 'video';
    case PDF            = 'pdf';
    case FILE           = 'file';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
