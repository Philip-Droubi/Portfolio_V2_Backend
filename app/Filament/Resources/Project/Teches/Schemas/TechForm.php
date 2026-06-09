<?php

namespace App\Filament\Resources\Project\Teches\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TechForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->unique('teches', 'name', ignoreRecord: true)
                    ->required()
                    ->minLength(1)
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->label(__("keys.name"))
                    ->translateLabel(),
                FileUpload::make('icon')
                    ->maxSize(1024)
                    ->directory('assets/teches')
                    ->acceptedFileTypes([
                        'image/svg+xml',
                        'image/png',
                        'image/jpeg',
                        'image/jpg',
                    ])
                    ->moveFiles()
                    ->preserveFilenames()
                    ->imageEditorEmptyFillColor('#333')
                    ->columnSpanFull()
                    ->label(__('keys.icon'))
                    ->translateLabel()
            ]);
    }
}