<?php

namespace App\Filament\Resources\Certificates\Pages;

use App\Filament\Resources\Certificates\CertificateResource;
use App\Traits\StorageHelper;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class EditCertificate extends EditRecord
{
    use StorageHelper;
    protected static string $resource = CertificateResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        unset($data['file_url']);

        return $data;
    }

    protected function afterSave(): void
    {
        $cert = $this->record;

        $fileTemp = array_values($this->data['file_url'])[0] ?? null;

        if ($fileTemp && ! str_starts_with($fileTemp, 'http')) {

            $absolutePath = Storage::disk('public')->path($fileTemp);

            $upload = Cloudinary::uploadApi()->upload(
                $absolutePath,
                [
                    'folder' => "portfolio/v2/certificates/{$cert->id}",
                    'transformation' => [
                        'quality' => 'auto',
                    ],
                ]
            );

            if ($cert->file_public_id) {
                Cloudinary::uploadApi()->destroy($cert->file_public_id);
            }

            $cert->update([
                'file_url' => $upload['secure_url'],
                'file_public_id' => $upload['public_id'],
            ]);

            Storage::disk('public')->delete($fileTemp);
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->requiresConfirmation()
                ->before(function ($record) {

                    $prefix = "portfolio/v2/certificates/{$record->id}";

                    // Delete all assets in this folder
                    Cloudinary::adminApi()->deleteAssetsByPrefix($prefix);

                    // Delete main folder
                    try {
                        Cloudinary::adminApi()->deleteFolder($prefix);
                    } catch (\Exception $e) {
                    }
                }),
        ];
    }
}
