<?php

namespace App\Filament\Resources\Project\Tags\Tables;

use App\Filament\Classes\BaseResource;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TagsTable extends BaseResource
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ColorColumn::make('color_hex')
                    ->label(__("keys.color"))
                    ->translateLabel(),
                TextColumn::make('name')
                    ->label(__("keys.name"))
                    ->searchable(query: function ($query, $search) {
                        $query
                            ->orWhere('name->en', 'like', "%{$search}%")
                            ->orWhere('name->ar', 'like', "%{$search}%");
                    })
                    ->translateLabel(),
                self::getDateTableComponent(),
                self::getDateTableComponent('updated_at', 'updated_at'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()->requiresConfirmation(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->requiresConfirmation(),
                ]),
            ])->defaultPaginationPageOption(25);
    }
}
