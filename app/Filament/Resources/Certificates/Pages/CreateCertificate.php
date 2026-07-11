<?php

namespace App\Filament\Resources\Certificates\Pages;

use App\Filament\Resources\Certificates\CertificateResource;
use App\Traits\StorageHelper;
use Filament\Resources\Pages\CreateRecord;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Storage;

class CreateCertificate extends CreateRecord
{
    use StorageHelper;
    protected static string $resource = CertificateResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Remove media from main model fillable data
        unset($data['file_url']);

        return $data;
    }

    protected function afterCreate(): void
    {
        $cert = $this->record;

        $fileTemp = array_values($this->data['file_url'])[0];

        $absolutePath = Storage::disk('public')->path($fileTemp);

        $fileUpload = Cloudinary::uploadApi()->upload(
            $absolutePath,
            [
                'folder' => "portfolio/v2/certificates/{$cert->id}",
                'transformation' => [
                    'quality' => 'auto'
                ]
            ]
        );

        $cert->update([
            'file_url' => $fileUpload['secure_url'],
            'file_public_id' => $fileUpload['public_id'],
        ]);

        Storage::disk('public')->delete($fileTemp);
    }
}
