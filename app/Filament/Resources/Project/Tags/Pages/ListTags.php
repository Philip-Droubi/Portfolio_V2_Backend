<?php

namespace App\Filament\Resources\Project\Tags\Pages;

use App\Filament\Resources\Project\Tags\TagResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use LaraZeus\SpatieTranslatable\Resources\Pages\ListRecords\Concerns\Translatable;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;

class ListTags extends ListRecords
{
    use Translatable;
    protected static string $resource = TagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
            LocaleSwitcher::make(),
        ];
    }
}
