<?php

namespace App\Filament\Resources\Certificates\Tables;

use App\Enums\CertificateSourceEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class CertificatesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('file_url')
                    ->label('keys.file')
                    ->translateLabel(),
                TextColumn::make('source')
                    ->searchable()
                    ->sortable()
                    ->label('keys.source')
                    ->translateLabel(),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('keys.title')
                    ->translateLabel(),
                TextColumn::make('description')
                    ->placeholder('-')
                    ->lineClamp(2)
                    ->limit(40)
                    ->label(__("keys.description"))
                    ->translateLabel(),
                TextColumn::make('issue_date')
                    ->sortable()
                    ->label('keys.issue_date')
                    ->translateLabel(),
            ])
            ->filters([
                SelectFilter::make('source')
                    ->label(__('keys.source'))
                    ->options(
                        collect(CertificateSourceEnum::transValues())
                            ->mapWithKeys(fn($item) => [
                                $item['key'] => $item['value']
                            ])
                            ->toArray()
                    )
                    ->multiple()
                    ->preload()
                    ->searchable()
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
