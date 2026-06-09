<?php

namespace App\Filament\Resources\Admins\Pages;

use App\Filament\Resources\Admins\AdminResource;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class EditAdmin extends EditRecord
{
    protected static string $resource = AdminResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('view', ['record' => $this->getRecord()]);
    }

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make()->requiresConfirmation()
                ->visible(in_array(Auth::user()->role_id, [1]))
                ->after(function (User $record) {
                    if ($record->avatar && Storage::disk('public')->exists($record->avatar)) {
                        Storage::disk("public")->delete($record->avatar);
                    }
                    Storage::disk('public')->deleteDirectory($record->avatar);
                })->hidden(fn($record) => $record->id == 1),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        if (empty($data['password']))
            unset($data['password']);

        if ($data["avatar"] != $record->avatar && $record->avatar)
            Storage::disk('public')->delete($record->avatar);

        $record->update($data);

        return $record;
    }
}
