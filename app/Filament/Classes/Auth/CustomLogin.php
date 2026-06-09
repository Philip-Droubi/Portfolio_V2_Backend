<?php

namespace App\Filament\Classes\Auth;

use App\Models\User;
use App\Models\Users\Profile\LoginHistory;
use App\Services\Misc\DeviceDetectorService;
use Filament\Auth\Pages\Login;
use Illuminate\Validation\ValidationException;
use Filament\Auth\Http\Responses\Contracts\LoginResponse;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Facades\Filament;
use Filament\Models\Contracts\FilamentUser;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Forms\Components\TextInput;
use Stevebauman\Location\Facades\Location;

class CustomLogin extends Login
{
    protected function throwFailureValidationException(): never
    {
        throw ValidationException::withMessages([
            'data.user_name' => __('filament-panels::auth/pages/login.messages.failed'),
        ]);
    }

    public function authenticate(): ?LoginResponse
    {
        try {
            $this->rateLimit(5);
        } catch (TooManyRequestsException $exception) {
            $this->getRateLimitedNotification($exception)?->send();

            return null;
        }

        $data = $this->form->getState();

        if (! Filament::auth()->attempt($this->getCredentialsFromFormData($data), $data['remember'] ?? false)) {
            $this->throwFailureValidationException();
        }

        $user = Filament::auth()->user();

        if (
            ($user instanceof FilamentUser) &&
            (! $user->canAccessPanel(Filament::getCurrentPanel()))
        ) {
            Filament::auth()->logout();

            $this->throwFailureValidationException();
        }

        $this->createLoginHistory($user);

        session()->regenerate();

        return app(LoginResponse::class);
    }

    protected function createLoginHistory(User $user): void
    {
        $deviceDetector = new DeviceDetectorService();
        $ip = Location::get(request()->ip());
        LoginHistory::create([
            "ip_address" => $ip ? $ip->ip : "0.0.0.0",
            "country_code" => $ip ? $ip->countryCode : "N/A",
            "country" => $ip ? $ip->countryName : "N/A",
            "city" => $ip ? $ip->cityName : "N/A",
            "user_id" => $user->id,
            "device_name" => $deviceDetector->getName(request()->userAgent()),
        ]);
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        return [
            'user_name' => $data['user_name'],
            'password'  => $data['password'],
        ];
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getUserNameFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getRememberFormComponent(),
            ]);
    }

    protected function getUserNameFormComponent(): Component
    {
        return TextInput::make('user_name')
            ->label(__(__('keys.user_name')))
            ->suffix('@')
            ->required()
            ->autocomplete()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }
}
