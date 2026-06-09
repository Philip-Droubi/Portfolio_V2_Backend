<?php

namespace App\Filament\Resources\Project\Projects\Tables;

use App\Filament\Classes\BaseResource;
use App\Traits\StorageHelper;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Filters\SelectFilter;

class ProjectsTable extends BaseResource
{
    use StorageHelper;
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('keys.name')
                    ->translateLabel(),
                TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('main_image')
                    ->label('keys.main_image')
                    ->translateLabel(),
                TextColumn::make('tiny_description')
                    ->placeholder('-')
                    ->lineClamp(2)
                    ->limit(40)
                    ->label(__("keys.tiny_description"))
                    ->translateLabel(),
                TextColumn::make('start_date')
                    ->date('Y-m')
                    ->sortable()
                    ->label('keys.start_date')
                    ->translateLabel(),
                TextColumn::make('end_date')
                    ->date('Y-m')
                    ->sortable()
                    ->label('keys.end_date')
                    ->translateLabel(),
                IconColumn::make('is_draft')
                    ->boolean()
                    ->label('keys.is_draft')
                    ->translateLabel(),
                TagsColumn::make('tags.name')
                    ->label(__('keys.tags'))
                    ->translateLabel()
                    ->badge()
                    ->color('primary'),
                TagsColumn::make('teches.name')
                    ->label(__('keys.teches'))
                    ->translateLabel()
                    ->badge()
                    ->color('primary'),
                self::getDateTableComponent(),
                self::getDateTableComponent('updated_at', 'updated_at'),
            ])
            ->filters([
                SelectFilter::make('is_draft')
                    ->label(__('keys.is_draft'))
                    ->options([
                        1 => __('keys.draft'),
                        0 => __('keys.active'),
                    ])
                    ->placeholder(__('keys.all')),

                //Tag Filters
                SelectFilter::make('tags')
                    ->label(__('keys.tags'))
                    ->relationship('tags', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable(),

                //Teches Filters
                SelectFilter::make('teches')
                    ->label(__('keys.teches'))
                    ->relationship('teches', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()
                    ->requiresConfirmation()
                    ->before(function ($record) {

                        $prefix = "portfolio/v2/projects/{$record->id}";

                        // Delete all assets in this project
                        Cloudinary::adminApi()->deleteAssetsByPrefix($prefix);

                        // Delete subfolder first
                        try {
                            Cloudinary::adminApi()->deleteFolder(
                                "{$prefix}/media"
                            );
                        } catch (\Exception $e) {
                        }

                        // Delete main folder
                        try {
                            Cloudinary::adminApi()->deleteFolder($prefix);
                        } catch (\Exception $e) {
                        }
                    }),
            ])
            ->toolbarActions([]);
    }
}