<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const ROLE_ADMIN = 'admin';
    const ROLE_USER = 'user';

    protected $fillable = [
        'name',
        'email',
        'password',
        'bio',
        'avatar',
        'position',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relasi dengan Article
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    /**
     * Articles created by this user
     */
    public function createdArticles()
    {
        return $this->hasMany(Article::class, 'created_by');
    }

    /**
     * Articles approved by this user
     */
    public function approvedArticles()
    {
        return $this->hasMany(Article::class, 'approved_by');
    }

    /**
     * Careers created by this user
     */
    public function createdCareers()
    {
        return $this->hasMany(Career::class, 'created_by');
    }

    /**
     * Careers approved by this user
     */
    public function approvedCareers()
    {
        return $this->hasMany(Career::class, 'approved_by');
    }

    /**
     * Motorola products created by this user
     */
    public function createdMotorolaProducts()
    {
        return $this->hasMany(Motorola::class, 'created_by');
    }

    /**
     * Motorola products approved by this user
     */
    public function approvedMotorolaProducts()
    {
        return $this->hasMany(Motorola::class, 'approved_by');
    }

    /**
     * Check if user is admin
     */
    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }

    /**
     * Check if user is regular user
     */
    public function isUser(): bool
    {
        return $this->role === self::ROLE_USER;
    }

    /**
     * Get role options
     */
    public static function getRoleOptions(): array
    {
        return [
            self::ROLE_ADMIN => 'Admin',
            self::ROLE_USER => 'User',
        ];
    }

    /**
     * Get role label
     */
    public function getRoleLabelAttribute(): string
    {
        $roles = self::getRoleOptions();
        return $roles[$this->role] ?? 'Unknown';
    }

    /**
     * Get avatar URL
     */
    public function getAvatarUrlAttribute()
    {
        if ($this->avatar) {
            return asset('storage/' . $this->avatar);
        }
        return 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&background=FF6B00&color=fff';
    }
}
