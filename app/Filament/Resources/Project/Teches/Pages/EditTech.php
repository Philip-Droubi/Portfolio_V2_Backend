<?php

namespace App\Filament\Resources\Project\Teches\Pages;

use App\Filament\Resources\Project\Teches\TechResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;
use LaraZeus\SpatieTranslatable\Resources\Pages\EditRecord\Concerns\Translatable;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;

class EditTech extends EditRecord
{
    use Translatable;
    protected static string $resource = TechResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->requiresConfirmation()
                ->before(function ($record) {
                    if ($record->icon) {
                        Storage::disk('public')->delete($record->icon);
                    }
                }),
            LocaleSwitcher::make(),
        ];
    }
}
