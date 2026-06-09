<?php

namespace App\Filament\Resources\Project\Projects;

use App\Filament\Resources\Project\Projects\Pages\CreateProject;
use App\Filament\Resources\Project\Projects\Pages\EditProject;
use App\Filament\Resources\Project\Projects\Pages\ListProjects;
use App\Filament\Resources\Project\Projects\Schemas\ProjectForm;
use App\Filament\Resources\Project\Projects\Tables\ProjectsTable;
use App\Models\Project\Project;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;

class ProjectResource extends Resource
{
    use Translatable;

    protected static ?string $model = Project::class;

    protected static string|BackedEnum|null $navigationIcon = 'eos-computer';

    protected static ?int $navigationSort = 3;

    protected static ?string $slug = 'projects';

    public static function form(Schema $schema): Schema
    {
        return ProjectForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProjectsTable::configure($table);
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
            'index' => ListProjects::route('/'),
            'create' => CreateProject::route('/create'),
            'edit' => EditProject::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ucwords(__('keys.projects'));
    }

    public static function getModelLabel(): string
    {
        return __('keys.project');
    }

    public static function getPluralModelLabel(): string
    {
        return __('keys.projects');
    }

    public static function getNavigationGroup(): string
    {
        return __('keys.projects');
    }
}
