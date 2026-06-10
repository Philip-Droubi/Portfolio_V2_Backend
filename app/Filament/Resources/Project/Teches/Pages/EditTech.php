<?php

namespace App\Filament\Resources\Project\Teches\Pages;

use App\Filament\Resources\Project\Teches\TechResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use LaraZeus\SpatieTranslatable\Resources\Pages\EditRecord\Concerns\Translatable;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Storage;

class EditTech extends EditRecord
{
    use Translatable;
    protected static string $resource = TechResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        unset($data['icon']);

        return $data;
    }

    protected function afterSave(): void
    {
        $tech = $this->record;

        $iconTemp = array_values($this->data['icon'])[0] ?? null;

        if ($iconTemp && ! str_starts_with($iconTemp, 'http')) {

            $absolutePath = Storage::disk('public')->path($iconTemp);

            $upload = Cloudinary::uploadApi()->upload(
                $absolutePath,
                [
                    'folder' => "portfolio/v2/teches",
                    'transformation' => [
                        'quality' => 'auto',
                    ],
                ]
            );

            if ($tech->icon_public_id) {
                Cloudinary::uploadApi()->destroy($tech->icon_public_id);
            }

            $tech->update([
                'icon' => $upload['secure_url'],
                'icon_public_id' => $upload['public_id'],
            ]);

            Storage::disk('public')->delete($iconTemp);
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->requiresConfirmation()
                ->before(function ($record) {
                    if ($record->icon_public_id) {
                        Cloudinary::uploadApi()->destroy($record->icon_public_id);
                    }
                }),
            LocaleSwitcher::make(),
        ];
    }
}
