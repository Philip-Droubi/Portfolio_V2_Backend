<?php

namespace App\Models;

use App\Models\Invoice\Invoice;
use App\Models\Product\Product;
use App\Models\Product\Warehouse;
use App\Models\System\Role\Role;
use App\Traits\ImagesHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Filament\Models\Contracts\HasName;
use Filament\Models\Contracts\HasAvatar;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Users\Profile\LoginHistory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable  implements FilamentUser, HasName, HasAvatar
{
    use HasFactory, Notifiable, ImagesHelper;

    protected $fillable = [
        'name',
        'user_name',
        'avatar',
        'email_verified_at',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //Filament
    public function canAccessPanel(Panel $panel): bool
    {
        return true;
        // return str_ends_with($this->user_name, 'admin') && $this->role_id != 3 && $this->deactive_at == null;
    }

    public function getFilamentName(): string
    {
        return ucfirst($this->name);
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return asset($this->getProfileImage($this));
    }

    public function getAvatar(): ?string
    {
        return $this->getProfileImage($this);
    }

    //Relations
    public function loginHistory(): HasMany
    {
        return $this->hasMany(LoginHistory::class, "user_id");
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, "role_id");
    }

    //Products
    public function products(): HasMany
    {
        return $this->hasMany(Product::class,  "user_id");
    }

    public function warehouse(): HasMany
    {
        return $this->hasMany(Warehouse::class, 'user_id');
    }

    //Invoices
    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class, "user_id");
    }
}
