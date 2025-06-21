<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Motorola extends Model
{
    use HasFactory;

    const APPROVAL_PENDING = 'pending';
    const APPROVAL_APPROVED = 'approved';
    const APPROVAL_REJECTED = 'rejected';

    protected $table = 'motorolas';

    protected $fillable = [
        'created_by',
        'name',
        'slug',
        'model_number',
        'category',
        'type',
        'image',
        'description',
        'specifications',
        'price',
        'is_active',
        'approval_status',
        'approved_by',
        'approved_at',
        'approval_notes'
    ];

    protected $casts = [
        'specifications' => 'array',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'approved_at' => 'datetime',
    ];

    // Relasi dengan User yang membuat produk
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relasi dengan User yang approve produk
    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->name);
        });

        static::updating(function ($product) {
            $product->slug = Str::slug($product->name);
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true)
            ->where('approval_status', self::APPROVAL_APPROVED);
    }

    public function scopePending($query)
    {
        return $query->where('approval_status', self::APPROVAL_PENDING);
    }

    public function scopeApproved($query)
    {
        return $query->where('approval_status', self::APPROVAL_APPROVED);
    }

    public function scopeRejected($query)
    {
        return $query->where('approval_status', self::APPROVAL_REJECTED);
    }

    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Get approval status options
     */
    public static function getApprovalStatusOptions(): array
    {
        return [
            self::APPROVAL_PENDING => 'Pending',
            self::APPROVAL_APPROVED => 'Approved',
            self::APPROVAL_REJECTED => 'Rejected',
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
            self::APPROVAL_PENDING => 'warning',
            self::APPROVAL_APPROVED => 'success',
            self::APPROVAL_REJECTED => 'danger',
            default => 'secondary'
        };
    }
}
