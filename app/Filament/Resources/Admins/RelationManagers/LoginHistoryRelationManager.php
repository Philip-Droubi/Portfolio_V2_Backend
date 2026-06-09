<?php

namespace App\Filament\Resources\Admins\RelationManagers;

use App\Filament\Resources\Admins\AdminResource;
use App\Traits\FilamentComponentsTrait;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class LoginHistoryRelationManager extends RelationManager
{
    use FilamentComponentsTrait;
    protected static string $relationship = 'loginHistory';

    protected static ?string $relatedResource = AdminResource::class;

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('keys.login_history');
    }

    public function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function ($query) {
                if (Auth::user()->role_id != 1) {
                    $query->where('user_id', Auth::id());
                }

                return $query;
            })
            ->recordTitleAttribute('ip_address')
            ->columns([
                TextColumn::make('country')
                    ->searchable()
                    ->sortable()
                    ->label(__("keys.country"))
                    ->translateLabel(),
                TextColumn::make('city')
                    ->searchable()
                    ->sortable()
                    ->label(__("keys.city"))
                    ->translateLabel(),
                TextColumn::make('device_name')
                    ->searchable()
                    ->label(__("keys.device_name"))
                    ->translateLabel(),
                TextColumn::make('ip_address')
                    ->toggleable()
                    ->label(__("keys.ip_address"))
                    ->translateLabel(),
                self::getDateTableComponent(isToggledHiddenByDefault: false),
            ])->defaultSort('created_at', 'desc')
            ->recordActions([]);
    }

    public static function getModelLabel(): string
    {
        return __('keys.login_history');
    }

    public static function getPluralModelLabel(): string
    {
        return __('keys.items');
    }
}
