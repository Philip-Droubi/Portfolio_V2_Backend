<?php

namespace App\Filament\Resources\Project\Teches\Tables;

use App\Filament\Classes\BaseResource;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\IconColumn;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class TechesTable extends BaseResource
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__("keys.name"))
                    ->searchable(query: function ($query, $search) {
                        $query
                            ->orWhere('name->en', 'like', "%{$search}%")
                            ->orWhere('name->ar', 'like', "%{$search}%");
                    })
                    ->translateLabel(),
                ImageColumn::make('icon')
                    ->label(__('keys.icon')),
                IconColumn::make('is_active')
                    ->boolean()
                    ->label('keys.is_active')
                    ->translateLabel(),
                self::getDateTableComponent(),
                self::getDateTableComponent('updated_at', 'updated_at'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()->requiresConfirmation()
                    ->before(function ($record) {
                        if ($record->icon_public_id) {
                            Cloudinary::uploadApi()->destroy($record->icon_public_id);
                        }
                    })
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->requiresConfirmation()
                        ->before(function ($records) {
                            foreach ($records as $record) {
                                if ($record->icon_public_id) {
                                    Cloudinary::uploadApi()->destroy($record->icon_public_id);
                                }
                            }
                        })
                ]),
            ])->defaultPaginationPageOption(25);
    }
}