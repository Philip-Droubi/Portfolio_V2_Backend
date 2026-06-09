<?php

namespace App\Filament\Resources\Project\Tags\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TagForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->unique('tags', 'name', ignoreRecord: true)
                    ->required()
                    ->minLength(1)
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->label(__("keys.name"))
                    ->translateLabel(),
                ColorPicker::make('color_hex')
                    ->required()
                    ->unique('tags', 'color_hex', ignoreRecord: true)
                    ->label(__("keys.color"))
                    ->columnSpanFull()
                    ->translateLabel(),
            ]);
    }
}
