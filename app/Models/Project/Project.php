<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = [
        'name',
        'slug',
        'tiny_description',
        'description',
        'main_image',
        'main_image_public_id',
        'start_date',
        'end_date',
        'url',
        'live_url',
        'is_draft',
        'is_company',
    ];

    public $translatable = ['name', 'tiny_description', 'description'];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'project_tag');
    }

    public function teches(): BelongsToMany
    {
        return $this->belongsToMany(Tech::class, 'project_tech');
    }

    public function media(): HasMany
    {
        return $this->hasMany(ProjectMedia::class, 'project_id');
    }
}
