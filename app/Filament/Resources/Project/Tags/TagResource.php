<?php

namespace App\Filament\Resources\Project\Tags;

use App\Filament\Resources\Project\Tags\Pages\CreateTag;
use App\Filament\Resources\Project\Tags\Pages\EditTag;
use App\Filament\Resources\Project\Tags\Pages\ListTags;
use App\Filament\Resources\Project\Tags\Schemas\TagForm;
use App\Filament\Resources\Project\Tags\Tables\TagsTable;
use App\Models\Project\Tag;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;

class TagResource extends Resource
{
    use Translatable;

    protected static ?string $model = Tag::class;

    protected static string|BackedEnum|null $navigationIcon = 'eos-tag-o';

    protected static ?int $navigationSort = 1;

    protected static ?string $slug = 'tags';

    public static function form(Schema $schema): Schema
    {
        return TagForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TagsTable::configure($table);
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
            'index' => ListTags::route('/'),
            'create' => CreateTag::route('/create'),
            'edit' => EditTag::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ucwords(__('keys.tags'));
    }

    public static function getModelLabel(): string
    {
        return __('keys.tag');
    }

    public static function getPluralModelLabel(): string
    {
        return __('keys.tags');
    }

    public static function getNavigationGroup(): string
    {
        return __('keys.projects');
    }
}