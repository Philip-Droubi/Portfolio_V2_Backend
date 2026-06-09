<?php

namespace App\Filament\Resources\Admins;

use App\Filament\Resources\Admins\Pages\CreateAdmin;
use App\Filament\Resources\Admins\Pages\EditAdmin;
use App\Filament\Resources\Admins\Pages\ListAdmins;
use App\Filament\Resources\Admins\Pages\ViewAdmin;
use App\Filament\Resources\Admins\Schemas\AdminForm;
use App\Filament\Resources\Admins\Schemas\AdminInfolist;
use App\Filament\Resources\Admins\Tables\AdminsTable;
use App\Models\User;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class AdminResource extends Resource
{
    protected static ?string $model = User::class;
    protected static string|BackedEnum|null $navigationIcon = 'eos-admin-o';
    protected static ?int $navigationSort = 1;
    protected static ?string $slug = 'admins';

    public static function canViewAny(): bool
    {
        return true;
    }

    public static function canView($record): bool
    {
        return Auth::user()->role_id == 1 || $record->id == Auth::user()->id;
    }

    public static function canCreate(): bool
    {
        return Auth::user()->role_id == 1;
    }

    public static function canEdit($record): bool
    {
        return Auth::user()->role_id == 1;
    }

    public static function canDelete($record): bool
    {
        return Auth::user()->role_id == 1;
    }

    public static function shouldRegisterNavigation(): bool
    {
        return Auth::user()->role_id == 1;
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with(['role']);
    }

    public static function getGlobalSearchResultTitle(Model $record): string | Htmlable
    {
        return "{$record->name}";
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }

    public static function getGlobalSearchResultUrl(Model $record): string
    {
        return AdminResource::getUrl('view', ['record' => $record]);
    }

    public static function form(Schema $schema): Schema
    {
        return AdminForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AdminInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AdminsTable::configure($table);
    }

    public function getRelationManagers(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAdmins::route('/'),
            'create' => CreateAdmin::route('/create'),
            'view' => ViewAdmin::route('/{record}'),
            'edit' => EditAdmin::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ucwords(__('keys.admins'));
    }

    public static function getModelLabel(): string
    {
        return __('keys.admin');
    }

    public static function getPluralModelLabel(): string
    {
        return __('keys.admins');
    }

    public static function getNavigationGroup(): string
    {
        return __('keys.system_users');
    }
}
