<?php

namespace App\Filament\Resources\Project\Projects\Pages;

use App\Filament\Resources\Project\Projects\ProjectResource;
use App\Traits\StorageHelper;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class EditProject extends EditRecord
{
    use StorageHelper;
    protected static string $resource = ProjectResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $project = $this->record;

        // Build preview list
        $data['existing_media'] = $project->media->map(fn($m) => [
            'url' => $m->url,
            'id'  => $m->id,
        ])->toArray();

        // Initially, all images are kept
        $data['kept_media'] = $project->media->pluck('url')->toArray();

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        unset($data['main_image']);
        unset($data['media']);

        return $data;
    }

    protected function afterSave(): void
    {
        $project = $this->record;

        /*
    |--------------------------------------------------------------------------
    | MAIN IMAGE
    |--------------------------------------------------------------------------
    */

        $mainImage = array_values($this->data['main_image'])[0] ?? null;

        if ($mainImage && ! str_starts_with($mainImage, 'http')) {

            $absolutePath = Storage::disk('public')->path($mainImage);

            $upload = Cloudinary::uploadApi()->upload(
                $absolutePath,
                [
                    'folder' => "portfolio/v2/projects/{$project->id}",
                    'transformation' => [
                        'quality' => 'auto',
                    ],
                ]
            );

            if ($project->main_image_public_id) {
                Cloudinary::uploadApi()->destroy($project->main_image_public_id);
            }

            $project->update([
                'main_image' => $upload['secure_url'],
                'main_image_public_id' => $upload['public_id'],
            ]);

            Storage::disk('public')->delete($mainImage);
        }

        /*
    |--------------------------------------------------------------------------
    | MEDIA SYNC
    |--------------------------------------------------------------------------
    */

        // 1. URLs user kept (from your grid)
        $kept = $this->data['kept_media'] ?? [];

        // 2. URLs currently in DB
        $existing = $project->media()->pluck('url')->toArray();

        // 3. Determine which Cloudinary images were removed
        $removed = array_diff($existing, $kept);

        /*
    |--------------------------------------------------------------------------
    | DELETE REMOVED MEDIA
    |--------------------------------------------------------------------------
    */
        if (!empty($removed)) {
            $mediaToDelete = $project->media()
                ->whereIn('url', $removed)
                ->get();

            foreach ($mediaToDelete as $media) {

                if ($media->public_id) {
                    Cloudinary::uploadApi()->destroy($media->public_id);
                }

                $media->delete();
            }
        }

        /*
    |--------------------------------------------------------------------------
    | ADD NEW MEDIA
    |--------------------------------------------------------------------------
    */

        $newUploads = $this->data['media'] ?? [];

        foreach ($newUploads as $file) {

            // Skip URLs (should not happen, but safe)
            if (str_starts_with($file, 'http')) {
                continue;
            }

            $absolutePath = Storage::disk('public')->path($file);

            $upload = Cloudinary::uploadApi()->upload(
                $absolutePath,
                [
                    'folder' => "portfolio/v2/projects/{$project->id}/media",
                    'transformation' => [
                        'quality' => 'auto',
                    ],
                ]
            );

            $project->media()->create([
                'url' => $upload['secure_url'],
                'public_id' => $upload['public_id'],
            ]);

            Storage::disk('public')->delete($file);
        }
    }


    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->requiresConfirmation()
                ->before(function ($record) {

                    $prefix = "portfolio/v2/projects/{$record->id}";

                    // Delete all assets in this project
                    Cloudinary::adminApi()->deleteAssetsByPrefix($prefix);

                    // Delete subfolder first
                    try {
                        Cloudinary::adminApi()->deleteFolder(
                            "{$prefix}/media"
                        );
                    } catch (\Exception $e) {
                    }

                    // Delete main folder
                    try {
                        Cloudinary::adminApi()->deleteFolder($prefix);
                    } catch (\Exception $e) {
                    }
                }),
        ];
    }
}
