<?php

namespace App\Filament\Resources\Project\Teches\Pages;

use App\Filament\Resources\Project\Teches\TechResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use LaraZeus\SpatieTranslatable\Resources\Pages\ListRecords\Concerns\Translatable;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;

class ListTeches extends ListRecords
{
    use Translatable;
    protected static string $resource = TechResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
            LocaleSwitcher::make(),
        ];
    }
}
