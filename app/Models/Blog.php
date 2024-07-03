<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'author',
        'category',
        'tags',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_image',
        'meta_url',
        'views',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
