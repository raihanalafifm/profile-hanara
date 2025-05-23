<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create default admin user
        User::updateOrCreate(
            ['email' => 'admin@hanara.id'],
            [
                'name' => 'Admin Hanara',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );

        // Create additional test user (optional)
        User::updateOrCreate(
            ['email' => 'test@hanara.id'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );
    }
}