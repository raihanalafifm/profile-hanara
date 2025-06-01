<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'image',
        'link',
        'category',
        'published_at',
        'is_active'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    // Scope untuk artikel yang sudah dipublish
    public function scopePublished($query)
    {
        return $query->where('is_active', true)
                     ->whereNotNull('published_at')
                     ->where('published_at', '<=', now());
    }

    // Scope untuk ordering
    public function scopeOrdered($query)
    {
        return $query->orderBy('published_at', 'desc');
    }
    
    // Scope untuk artikel aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}