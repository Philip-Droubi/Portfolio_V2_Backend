<?php

namespace App\Filament\Resources\Admins\Schemas;

use App\Models\System\Role\Role;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Validation\Rules\Password  as PasswordRules;

class AdminForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__("keys.user_personal_info"))
                    ->schema([
                        Select::make("role_id")
                            ->required()
                            ->relationship("role", "name")
                            ->options(function () {
                                return Role::pluck("name", "id")->toArray();
                            })
                            ->preload()
                            ->searchable()
                            ->label(__("keys.role"))
                            ->translateLabel(),
                        TextInput::make("name")
                            ->required()
                            ->minLength(2)
                            ->maxLength(80)
                            ->label(__("keys.name"))
                            ->translateLabel(),
                        TextInput::make("email")
                            ->nullable()
                            ->email()
                            ->unique("users", "email", ignoreRecord: true)
                            ->label(__("keys.email"))
                            ->translateLabel(),
                        TextInput::make("user_name")
                            ->required()
                            ->suffix('@')
                            ->minLength(5)
                            ->maxLength(50)
                            ->hint("user-admin")
                            ->unique('users', 'user_name', ignoreRecord: true)
                            ->regex("/^[A-Za-z](?!.*?[-_]{2})[A-Za-z0-9_-]{4,30}[A-Za-z0-9]$/")
                            ->label(__("keys.user_name"))
                            ->translateLabel(),
                        TextInput::make('password')
                            ->required(fn($operation) => $operation === 'create')
                            ->minLength(8)
                            ->maxLength(255)
                            ->rules(fn() => PasswordRules::min(8)->letters()->numbers())
                            ->password()
                            ->default(null) // always start empty
                            ->dehydrateStateUsing(fn($state) => filled($state) ? $state : null)
                            ->dehydrated(fn($state) => filled($state)) // only send if user typed
                            ->autocomplete('new-password')
                            ->revealable(filament()->arePasswordsRevealable())
                            ->label(__('keys.password'))
                            ->translateLabel()
                    ])->columnSpanFull()
                    ->columns(3),
                FileUpload::make(name: 'avatar')
                    ->image()
                    ->maxSize(2048)
                    ->directory("admins/avatar")
                    ->acceptedFileTypes(['image/png', 'image/jpg', 'image/gif', 'image/jpeg'])
                    ->imageEditor()
                    ->moveFiles()
                    ->imageEditorEmptyFillColor('#333')
                    ->columnSpanFull()
                    ->label(__("keys.avatar"))
                    ->translateLabel(),
            ]);
    }
}
