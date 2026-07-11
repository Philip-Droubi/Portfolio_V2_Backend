<?php

namespace App\Filament\Resources\Certificates\Schemas;

use App\Enums\CertificateSourceEnum;
use App\Traits\FilamentComponentsTrait;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\View;
use Filament\Schemas\Schema;

class CertificateForm
{
    use FilamentComponentsTrait;

    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('keys.info'))
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Select::make('source')
                                    ->preload()
                                    ->options(
                                        collect(CertificateSourceEnum::transValues())
                                            ->mapWithKeys(fn($item) => [$item['key'] => $item['value']])
                                            ->toArray()
                                    )
                                    ->searchable()
                                    ->label(__("keys.source"))
                                    ->translateLabel(),

                                DatePicker::make('issue_date')
                                    ->label(__('keys.issue_date'))
                                    ->native(false)
                                    ->closeOnDateSelection()
                                    ->displayFormat('Y-m-d')
                                    ->format('Y-m-d')
                                    ->translateLabel(),
                            ]),

                        Fieldset::make(__('keys.title'))
                            ->schema([
                                ...self::translatableTextInputs('title', __('keys.title')),
                            ]),

                        Fieldset::make(__('keys.description'))
                            ->schema(
                                self::translatableTextInputs(
                                    'description',
                                    __('keys.description'),
                                    'textarea'
                                )
                            ),
                    ])
                    ->collapsible()
                    ->columnSpanFull(),

                Section::make(__('keys.media'))
                    ->schema([
                        View::make('filament.forms.image-viewer')
                            ->viewData(fn($record) => [
                                'url' => $record?->file_url,
                                'label' => __("keys.file")
                            ])
                            ->columnSpanFull(),

                        FileUpload::make('file_url')
                            ->required(fn($record) => $record === null)
                            ->image()
                            ->maxSize(2048)
                            ->directory('certificates/temp')
                            ->acceptedFileTypes(['image/png', 'image/jpg', 'image/gif', 'image/jpeg'])
                            ->imageEditor()
                            ->imageEditorEmptyFillColor('#333')
                            ->columnSpanFull()
                            ->label(__('keys.file'))
                            ->translateLabel(),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
