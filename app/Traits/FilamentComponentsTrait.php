<?php

namespace App\Traits;

use App\Models\Product\Color;
use App\Models\Product\ProductTag;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

trait FilamentComponentsTrait
{
    protected static function getDateTableComponent(string $fieldName = 'created_at', string $label = 'created_at', string $dateTime = 'Y-m-d g:i a', bool $sortable = true, bool $isToggledHiddenByDefault = true): TextColumn
    {
        return TextColumn::make($fieldName)
            ->label(__("keys.{$label}"))
            ->translateLabel()
            ->dateTime($dateTime)
            ->sortable($sortable)
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }
}
