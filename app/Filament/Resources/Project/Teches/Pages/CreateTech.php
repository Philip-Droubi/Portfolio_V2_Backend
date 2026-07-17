<?php

namespace App\Filament\Resources\Project\Teches\Pages;

use App\Filament\Resources\Project\Teches\TechResource;
use Filament\Resources\Pages\CreateRecord;
use LaraZeus\SpatieTranslatable\Resources\Pages\CreateRecord\Concerns\Translatable;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Storage;

class CreateTech extends CreateRecord
{
    use Translatable;

    protected static string $resource = TechResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Remove media from main model fillable data
        unset($data['icon']);

        return $data;
    }

    protected function afterCreate(): void
    {
        $project = $this->record;

        // Icon
        $iconTemp = array_values($this->data['icon'])[0];

        $absolutePath = Storage::disk('public')->path($iconTemp);

        $uploadedIcon = Cloudinary::uploadApi()->upload(
            $absolutePath,
            [
                'folder' => "portfolio/v2/teches/",
                'transformation' => [
                    'quality' => 'auto'
                ]
            ]
        );

        $project->update([
            'icon' => $uploadedIcon['secure_url'],
            'icon_public_id' => $uploadedIcon['public_id'],
        ]);

        Storage::disk('public')->delete($iconTemp);
    }

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
        ];
    }
}
