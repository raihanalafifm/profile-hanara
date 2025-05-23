<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
     use HasFactory;
    protected $fillable = [
        'position',
        'slug',
        'type',
        'description',
        'skills',
        'qualifications',
        'is_active',
        'order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'skills' => 'array',
        'qualifications' => 'array',
    ];

    // Scope untuk career yang aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope untuk ordering
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('created_at', 'desc');
    }

    // Get route key name untuk model binding
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Generate slug dari position
    public static function generateSlug($position)
    {
        $slug = str()->slug($position);
        $count = static::where('slug', 'like', "{$slug}%")->count();
        
        return $count ? "{$slug}-{$count}" : $slug;
    }

    // Set slug otomatis saat create
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($career) {
            if (empty($career->slug)) {
                $career->slug = self::generateSlug($career->position);
            }
        });
    }
}
