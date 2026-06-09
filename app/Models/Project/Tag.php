<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Tag extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = [
        'name',
        'color_hex',
    ];

    public $translatable = ['name'];

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_tag');
    }
}