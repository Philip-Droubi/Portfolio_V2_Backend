<?php

namespace App\Filament\Resources\Project\Tags\Pages;

use App\Filament\Resources\Project\Tags\TagResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use LaraZeus\SpatieTranslatable\Resources\Pages\EditRecord\Concerns\Translatable;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;

class EditTag extends EditRecord
{
    use Translatable;
    protected static string $resource = TagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->requiresConfirmation(),
            LocaleSwitcher::make(),
        ];
    }
}