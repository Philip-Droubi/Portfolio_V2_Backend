<?php

namespace App\Traits;

use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;

trait FilamentComponentsTrait
{
    protected static function getDateTableComponent(string $fieldName = 'created_at', string $label = 'created_at', string $dateTime = 'Y-m-d g:i a', bool $sortable = true, bool $isToggledHiddenByDefault = true): TextColumn
    {
        return TextColumn::make($fieldName)
            ->label(__("keys.{$label}"))
            ->translateLabel()
            ->dateTime($dateTime)
            ->sortable($sortable)
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }

    public static function translatableTextInputs(
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
                    ->extraInputAttributes(['data-tiptap-allow-html' => true])
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
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) use ($baseKey, $langKey) {
                        if ($baseKey === 'name' && $langKey === 'en') {
                            $set('slug', Str::slug($state));
                        }
                    }),
            };
        })->toArray();
    }
}
