<?php

namespace App\Filament\Resources\Project\Projects\Pages;

use App\Filament\Resources\Project\Projects\ProjectResource;
use App\Traits\StorageHelper;
use Filament\Resources\Pages\CreateRecord;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Storage;

class CreateProject extends CreateRecord
{
    use StorageHelper;
    protected static string $resource = ProjectResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Remove media from main model fillable data
        unset($data['media']);
        unset($data['main_image']);

        return $data;
    }

    protected function afterCreate(): void
    {
        $project = $this->record;

        // MAIN IMAGE
        $mainImageTemp = array_values($this->data['main_image'])[0];

        $absolutePath = Storage::disk('public')->path($mainImageTemp);

        $mainUpload = Cloudinary::uploadApi()->upload(
            $absolutePath,
            [
                'folder' => "portfolio/v2/projects/{$project->id}",
                'transformation' => [
                    'quality' => 'auto'
                ]
            ]
        );

        $project->update([
            'main_image' => $mainUpload['secure_url'],
            'main_image_public_id' => $mainUpload['public_id'],
        ]);

        Storage::disk('public')->delete($mainImageTemp);

        // MEDIA IMAGES
        foreach ($this->data['media'] as $tempPath) {

            $absolutePath = Storage::disk('public')->path($tempPath);

            $upload = Cloudinary::uploadApi()
                ->upload(
                    $absolutePath,
                    [
                        'folder' => "portfolio/v2/projects/{$project->id}/media",
                        'transformation' => [
                            'quality' => 'auto'
                        ]
                    ]
                );

            $project->media()->create([
                'url' => $upload['secure_url'],
                'public_id' => $upload['public_id'],
            ]);

            Storage::disk('public')->delete($tempPath);
        }
    }
}
