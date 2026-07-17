<?php

namespace App\Filament\Resources\Project\Teches;

use App\Filament\Resources\Project\Teches\Pages\CreateTech;
use App\Filament\Resources\Project\Teches\Pages\EditTech;
use App\Filament\Resources\Project\Teches\Pages\ListTeches;
use App\Filament\Resources\Project\Teches\Schemas\TechForm;
use App\Filament\Resources\Project\Teches\Tables\TechesTable;
use App\Models\Project\Tech;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;

class TechResource extends Resource
{
    use Translatable;
    protected static string|BackedEnum|null $navigationIcon = 'eos-build-o';

    protected static ?int $navigationSort = 2;

    protected static ?string $slug = 'techs';

    protected static ?string $model = Tech::class;


    public static function form(Schema $schema): Schema
    {
        return TechForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TechesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTeches::route('/'),
            'create' => CreateTech::route('/create'),
            'edit' => EditTech::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ucwords(__('keys.techs'));
    }

    public static function getModelLabel(): string
    {
        return __('keys.tech');
    }

    public static function getPluralModelLabel(): string
    {
        return __('keys.techs');
    }

    public static function getNavigationGroup(): string
    {
        return __('keys.projects');
    }
}
