<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'url',
        'related_to_type',
        'related_to_id',
        'collection',
        'type',
        'extra_data',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function mediaable(): MorphTo
    {
        return $this->morphTo('related_to');
    }
}
