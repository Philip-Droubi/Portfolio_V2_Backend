<?php

namespace App\Filament\Resources\Project\Teches\Pages;

use App\Filament\Resources\Project\Teches\TechResource;
use Filament\Resources\Pages\CreateRecord;
use LaraZeus\SpatieTranslatable\Resources\Pages\CreateRecord\Concerns\Translatable;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;

class CreateTech extends CreateRecord
{
    use Translatable;

    protected static string $resource = TechResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
        ];
    }
}
