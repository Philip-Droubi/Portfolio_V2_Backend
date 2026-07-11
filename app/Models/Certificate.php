<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Certificate extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = [
        'source',
        'title',
        'description',
        'issue_date',
        'file_url',
        'file_public_id',
    ];

    public $translatable = ['title', 'description'];
}
