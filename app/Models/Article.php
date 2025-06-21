<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    const STATUS_PENDING = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';

    protected $fillable = [
        'user_id',
        'created_by',
        'title',
        'slug',
        'description',
        'content',
        'image',
        'link',
        'category',
        'published_at',
        'is_active',
        'approval_status',
        'approved_by',
        'approved_at',
        'approval_notes'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'approved_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    // Relasi dengan User (author)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan User yang membuat artikel
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relasi dengan User yang approve artikel
    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    // Scope untuk artikel yang sudah dipublish dan diapprove
    public function scopePublished($query)
    {
        return $query->where('is_active', true)
            ->where('approval_status', self::STATUS_APPROVED)
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

    // Scope untuk artikel yang pending approval
    public function scopePending($query)
    {
        return $query->where('approval_status', self::STATUS_PENDING);
    }

    // Scope untuk artikel yang sudah diapprove
    public function scopeApproved($query)
    {
        return $query->where('approval_status', self::STATUS_APPROVED);
    }

    // Scope untuk artikel yang ditolak
    public function scopeRejected($query)
    {
        return $query->where('approval_status', self::STATUS_REJECTED);
    }

    /**
     * Get approval status options
     */
    public static function getApprovalStatusOptions(): array
    {
        return [
            self::STATUS_PENDING => 'Pending',
            self::STATUS_APPROVED => 'Approved',
            self::STATUS_REJECTED => 'Rejected',
        ];
    }

    /**
     * Get approval status label
     */
    public function getApprovalStatusLabelAttribute(): string
    {
        $statuses = self::getApprovalStatusOptions();
        return $statuses[$this->approval_status] ?? 'Unknown';
    }

    /**
     * Get approval status badge class
     */
    public function getApprovalStatusBadgeClassAttribute(): string
    {
        return match ($this->approval_status) {
            self::STATUS_PENDING => 'warning',
            self::STATUS_APPROVED => 'success',
            self::STATUS_REJECTED => 'danger',
            default => 'secondary'
        };
    }
}
