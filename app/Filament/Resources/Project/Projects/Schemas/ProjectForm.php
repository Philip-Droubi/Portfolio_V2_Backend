<?php

namespace App\Filament\Resources\Project\Projects\Schemas;

use App\Models\Project\Tag;
use App\Models\Project\Tech;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\View;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('keys.general_info'))
                    ->schema([
                        Fieldset::make(__('keys.name'))
                            ->schema([
                                ...self::translatableTextInputs('name', __('keys.name')),
                                TextInput::make('slug')
                                    ->label(__('keys.slug'))
                                    ->disabled()
                                    ->dehydrated()
                                    ->columnSpanFull()
                                    ->afterStateHydrated(function ($component, $state, $record) {
                                        // When editing, show existing slug
                                        if ($record) {
                                            $component->state($record->slug);
                                        }
                                    })
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                        // If user manually edits slug (if you ever enable it)
                                        // we keep it slugified
                                        $set('slug', Str::slug($state));
                                    }),
                            ]),

                        Fieldset::make(__('keys.tiny_description'))
                            ->schema(
                                self::translatableTextInputs(
                                    'tiny_description',
                                    __('keys.tiny_description'),
                                    true
                                )
                            ),

                        Fieldset::make(__('keys.description'))
                            ->schema(
                                self::translatableTextInputs(
                                    'description',
                                    __('keys.description'),
                                    'rich'
                                )
                            ),
                    ])
                    ->collapsible()
                    ->columnSpanFull(),

                Section::make(__('keys.settings'))
                    ->schema([
                        //Start Date
                        DatePicker::make('start_date')
                            ->label(__("keys.start_date"))
                            ->displayFormat('Y-m')
                            ->format('Y-m-01')
                            ->extraInputAttributes(['type' => 'month'])
                            ->closeOnDateSelection()
                            ->native()
                            ->extraAttributes(['data-flatpickr' => json_encode(['plugins' => ['monthSelect'], 'dateFormat' => 'Y-m'])])
                            ->translateLabel(),

                        //End Date
                        DatePicker::make('end_date')
                            ->label(__('keys.end_date'))
                            ->displayFormat('Y-m')
                            ->format('Y-m-01')
                            ->extraInputAttributes(['type' => 'month'])
                            ->closeOnDateSelection()
                            ->native()
                            ->extraAttributes(['data-flatpickr' => json_encode(['plugins' => ['monthSelect'], 'dateFormat' => 'Y-m'])])
                            ->translateLabel(),

                        TextInput::make('url')
                            ->prefixIcon('heroicon-o-link')
                            ->url()
                            ->nullable()
                            ->extraInputAttributes(['dir' => 'ltr'])
                            ->label(__("keys.url"))
                            ->translateLabel(),

                        TextInput::make('live_url')
                            ->prefixIcon('heroicon-o-link')
                            ->url()
                            ->nullable()
                            ->extraInputAttributes(['dir' => 'ltr'])
                            ->label(__("keys.live_url"))
                            ->translateLabel(),

                        //Teches
                        Select::make('teches')
                            ->preload()
                            ->relationship('teches', 'name')
                            ->multiple()
                            ->searchable()
                            ->getSearchResultsUsing(function (string $search) {
                                return Tech::query()
                                    ->where('name->en', 'like', "%{$search}%")
                                    ->orWhere('name->ar', 'like', "%{$search}%")
                                    ->limit(50)
                                    ->get()
                                    ->mapWithKeys(function ($tech) {
                                        return [
                                            $tech->id => $tech->getTranslation('name', app()->getLocale()),
                                        ];
                                    })
                                    ->toArray();
                            })
                            ->label(__("keys.teches"))
                            ->translateLabel(),

                        //Tags
                        Select::make('tags')
                            ->preload()
                            ->relationship('tags', 'name')
                            ->multiple()
                            ->searchable()
                            ->getSearchResultsUsing(function (string $search) {
                                return Tag::query()
                                    ->where('name->en', 'like', "%{$search}%")
                                    ->orWhere('name->ar', 'like', "%{$search}%")
                                    ->limit(50)
                                    ->get()
                                    ->mapWithKeys(function ($tag) {
                                        return [
                                            $tag->id => $tag->getTranslation('name', app()->getLocale()),
                                        ];
                                    })
                                    ->toArray();
                            })
                            ->createOptionForm([
                                TextInput::make('name.ar')
                                    ->minLength(1)
                                    ->maxLength(255)
                                    ->required()
                                    ->label(__("keys.name_ar"))
                                    ->translateLabel(),

                                TextInput::make('name.en')
                                    ->required()
                                    ->minLength(1)
                                    ->maxLength(255)
                                    ->label(__("keys.name_en"))
                                    ->translateLabel(),

                                ColorPicker::make('color_hex')
                                    ->required()
                                    ->unique('tags', 'color_hex', ignoreRecord: true)
                                    ->label(__("keys.color"))
                                    ->columnSpanFull()
                                    ->translateLabel(),
                            ])
                            ->label(__("keys.tags"))
                            ->translateLabel(),

                        //Draft
                        Fieldset::make(__('keys.is_draft'))
                            ->schema(
                                [Toggle::make('is_draft')
                                    ->label(__("keys.is_draft"))
                                    ->translateLabel()]
                            ),
                    ])
                    ->collapsible()
                    ->columnSpanFull()
                    ->columns(2),

                Section::make(__('keys.media'))
                    ->schema([
                        View::make('filament.forms.image-viewer')
                            ->viewData(fn($record) => [
                                'url' => $record?->main_image,
                                'label' => __("keys.main_image")
                            ])
                            ->columnSpanFull(),

                        FileUpload::make('main_image')
                            ->required(fn($record) => $record === null)
                            ->image()
                            ->maxSize(2048)
                            ->directory('projects/temp')
                            ->acceptedFileTypes(['image/png', 'image/jpg', 'image/gif', 'image/jpeg'])
                            ->imageEditor()
                            ->imageEditorEmptyFillColor('#333')
                            ->columnSpanFull()
                            ->label(__('keys.main_image'))
                            ->translateLabel(),

                        Hidden::make('kept_media')
                            ->default([])
                            ->dehydrated(true),

                        FileUpload::make('media')
                            ->image()
                            ->multiple()
                            ->downloadable()
                            ->openable()
                            ->reorderable()
                            ->directory('projects/temp')
                            ->acceptedFileTypes(['image/png', 'image/jpg', 'image/gif', 'image/jpeg'])
                            ->panelLayout('grid')
                            ->imageEditor()
                            ->imageEditorEmptyFillColor('#333')
                            ->columnSpanFull()
                            ->label(__("keys.other_media"))
                            ->translateLabel(),

                        View::make('filament.forms.cloudinary-preview')
                            ->columnSpanFull()
                            ->viewData(fn($record) => [
                                'media' => $record
                                    ? $record->media()->get(['url', 'id'])
                                    : collect(),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    private static function translatableTextInputs(
        string $baseKey,
        string $label,
        string $type = 'text'
    ): array {
        $languages = config('_custom.accepted_languages_key_value');

        return collect($languages)->map(function ($langLabel, $langKey) use ($baseKey, $label, $type) {
            $fieldName = "{$baseKey}.{$langKey}";

            return match ($type) {
                'rich' => RichEditor::make($fieldName)
                    ->label("{$label} ({$langLabel})")
                    ->required()
                    ->columnSpanFull(),

                'textarea' => Textarea::make($fieldName)
                    ->label("{$label} ({$langLabel})")
                    ->rows(4)
                    ->required()
                    ->columnSpanFull(),

                default => TextInput::make($fieldName)
                    ->label("{$label} ({$langLabel})")
                    ->required()
                    ->columnSpanFull()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) use ($baseKey, $langKey) {
                        if ($baseKey === 'name' && $langKey === 'en') {
                            $set('slug', Str::slug($state));
                        }
                    }),
            };
        })->toArray();
    }
}
