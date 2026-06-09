<?php

namespace App\Filament\Resources\Admins\Pages;

use App\Filament\Resources\Admins\AdminResource;
use App\Filament\Resources\Admins\RelationManagers\InvoiceRelationManager;
use App\Filament\Resources\Admins\RelationManagers\LoginHistoryRelationManager;
use App\Filament\Resources\Admins\RelationManagers\WarehouseRelationManager;
use App\Filament\Resources\Admins\Widgets\AdminInvoiceStats;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ViewAdmin extends ViewRecord
{
    protected static string $resource = AdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()->hidden(fn($record) => $record->role_id != 1)
                ->visible(in_array(Auth::user()->role_id, [1])),
            DeleteAction::make()->requiresConfirmation()
                ->visible(in_array(Auth::user()->role_id, [1]))
                ->after(function (User $record) {
                    if ($record->avatar && Storage::disk('public')->exists($record->avatar)) {
                        Storage::disk("public")->delete($record->avatar);
                    }
                    Storage::disk('public')->deleteDirectory($record->avatar);
                })->hidden(fn($record) => $record->id == 1 || fn($record) => $record->role_id != 1),
        ];
    }

    public function getRelationManagers(): array
    {
        return [
            LoginHistoryRelationManager::class,
        ];
    }
}
