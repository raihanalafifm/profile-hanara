<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    public const STATUS_OPEN = 'open';
    public const STATUS_CLOSED = 'closed';
    public const STATUS_ON_HOLD = 'on_hold';

    const APPROVAL_PENDING = 'pending';
    const APPROVAL_APPROVED = 'approved';
    const APPROVAL_REJECTED = 'rejected';

    protected $fillable = [
        'created_by',
        'position',
        'slug',
        'description',
        'skills',
        'qualifications',
        'is_active',
        'status',
        'order',
        'approval_status',
        'approved_by',
        'approved_at',
        'approval_notes'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'skills' => 'array',
        'qualifications' => 'array',
        'approved_at' => 'datetime',
    ];

    // Relasi dengan User yang membuat career
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relasi dengan User yang approve career
    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    // Get all status options
    public static function getStatusOptions()
    {
        return [
            self::STATUS_OPEN => 'Open',
            self::STATUS_CLOSED => 'Closed',
            self::STATUS_ON_HOLD => 'On Hold',
        ];
    }

    // Get approval status options
    public static function getApprovalStatusOptions(): array
    {
        return [
            self::APPROVAL_PENDING => 'Pending',
            self::APPROVAL_APPROVED => 'Approved',
            self::APPROVAL_REJECTED => 'Rejected',
        ];
    }

    // Get status label
    public function getStatusLabelAttribute()
    {
        $labels = self::getStatusOptions();
        return $labels[$this->status] ?? 'Unknown';
    }

    // Get approval status label
    public function getApprovalStatusLabelAttribute(): string
    {
        $statuses = self::getApprovalStatusOptions();
        return $statuses[$this->approval_status] ?? 'Unknown';
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

    // Get approval status badge class
    public function getApprovalStatusBadgeClassAttribute(): string
    {
        return match ($this->approval_status) {
            self::APPROVAL_PENDING => 'warning',
            self::APPROVAL_APPROVED => 'success',
            self::APPROVAL_REJECTED => 'danger',
            default => 'secondary'
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

    // Scope untuk career yang aktif dan approved
    public function scopeActive($query)
    {
        return $query->where('is_active', true)
            ->where('approval_status', self::APPROVAL_APPROVED);
    }

    // Scope untuk career yang pending approval
    public function scopePending($query)
    {
        return $query->where('approval_status', self::APPROVAL_PENDING);
    }

    // Scope untuk career yang sudah diapprove
    public function scopeApproved($query)
    {
        return $query->where('approval_status', self::APPROVAL_APPROVED);
    }

    // Scope untuk career yang ditolak
    public function scopeRejected($query)
    {
        return $query->where('approval_status', self::APPROVAL_REJECTED);
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
