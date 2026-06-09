<?php

namespace App\Filament\Resources\Admins\Tables;

use App\Filament\Classes\BaseResource;
use App\Models\User;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Filament\Actions\DeleteAction;
use Illuminate\Support\Facades\Auth;

class AdminsTable extends BaseResource
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('role.name')
                    ->label(__("keys.role"))
                    ->translateLabel(),
                TextColumn::make(name: 'name')
                    ->sortable()
                    ->searchable()
                    ->label(__("keys.name"))
                    ->translateLabel(),
                ImageColumn::make(name: 'avatar')
                    ->defaultImageUrl(url(config('_custom.user_default_image')))
                    ->circular()
                    ->imageSize(40)
                    ->toggleable()
                    ->label(__("keys.avatar"))
                    ->translateLabel(),
                TextColumn::make('user_name')
                    ->searchable()
                    ->suffix('@')
                    ->copyable()
                    ->label(__("keys.user_name"))
                    ->translateLabel(),
                TextColumn::make('email')
                    ->searchable()
                    ->label(__("keys.email"))
                    ->copyable()
                    ->icon('eos-email')
                    ->translateLabel(),
                self::getDateTableComponent(),
                self::getDateTableComponent('updated_at', 'updated_at'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make()->visible(in_array(Auth::user()->role_id, [1])),
                DeleteAction::make()->requiresConfirmation()
                    ->visible(in_array(Auth::user()->role_id, [1]))
                    ->after(function (User $record) {
                        if ($record->avatar && Storage::disk('public')->exists($record->avatar)) {
                            Storage::disk("public")->delete($record->avatar);
                        }
                        Storage::disk('public')->deleteDirectory($record->avatar);
                    })->hidden(fn($record) => $record->id == 1),
            ])
            ->toolbarActions([
                BulkActionGroup::make([]),
            ]);
    }
}
