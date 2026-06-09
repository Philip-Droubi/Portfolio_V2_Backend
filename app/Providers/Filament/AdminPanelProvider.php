<?php

namespace App\Providers\Filament;

use App\Filament\Classes\Auth\CustomLogin;
use App\Filament\Resources\Admins\AdminResource;
use App\Traits\ImagesHelper;
use Filament\Actions\Action;
use Filament\Enums\GlobalSearchPosition;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Support\Enums\Platform;
use Filament\Navigation\NavigationGroup;
use Illuminate\Support\Facades\Auth;
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;

class AdminPanelProvider extends PanelProvider
{
    use ImagesHelper;
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->favicon(asset(path: $this->getFullImageUrl('assets/logo/logo_ico.png')))
            ->login(CustomLogin::class)
            ->profile(isSimple: false)
            ->colors([
                'primary' => Color::Blue,
            ])
            //
            ->sidebarCollapsibleOnDesktop()
            ->spa()
            ->databaseTransactions()
            //Global Search
            ->globalSearch(position: GlobalSearchPosition::Topbar)
            ->globalSearchKeyBindings(['command+k', 'ctrl+k'])
            ->globalSearchDebounce('700ms')
            ->globalSearchFieldKeyBindingSuffix()
            ->globalSearchFieldSuffix(fn(): ?string => match (Platform::detect()) {
                Platform::Windows, Platform::Linux => 'CTRL+K',
                Platform::Mac => '⌘K',
                default => null,
            })
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            //Plugins
            ->plugin(
                SpatieTranslatablePlugin::make()
                    ->defaultLocales(config("_custom.accepted_languages")),
            )
            //User Menu Item
            ->userMenuItems([
                'profile' => fn(Action $action) =>
                $action->url(fn(): string => AdminResource::getUrl('view', [
                    'record' => Auth::id(),
                ])),
            ])
            //Navigation
            ->navigationGroups([
                NavigationGroup::make()
                    ->label(fn(): string => __('keys.system_users')),
                NavigationGroup::make()
                    ->label(fn(): string => __('keys.projects')),
            ])
            //
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                // FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
