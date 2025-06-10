<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    public const STATUS_OPEN = 'open';
    public const STATUS_CLOSED = 'closed';
    public const STATUS_ON_HOLD = 'on_hold';
    use HasFactory;
    protected $fillable = [
        'position',
        'slug',
        // 'type',
        'description',
        'skills',
        'qualifications',
        'is_active',
        'status',
        'order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'skills' => 'array',
        'qualifications' => 'array',
    ];
    // Get all status options
    public static function getStatusOptions()
    {
        return [
            self::STATUS_OPEN => 'Open',
            self::STATUS_CLOSED => 'Closed',
            self::STATUS_ON_HOLD => 'On Hold',
        ];
    }

    // Get status label
    public function getStatusLabelAttribute()
    {
        $labels = self::getStatusOptions();
        return $labels[$this->status] ?? 'Unknown';
    }

    // Get status badge class
    public function getStatusBadgeClassAttribute()
    {
        return match ($this->status) {
            self::STATUS_OPEN => 'hnr-status-open',
            self::STATUS_CLOSED => 'hnr-status-closed',
            self::STATUS_ON_HOLD => 'hnr-status-onhold',
            default => 'hnr-status-unknown'
        };
    }

    // Get status icon
    public function getStatusIconAttribute()
    {
        return match ($this->status) {
            self::STATUS_OPEN => '✅',
            self::STATUS_CLOSED => '❌',
            self::STATUS_ON_HOLD => '🕓',
            default => '❓'
        };
    }
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
