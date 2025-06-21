<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin Hanara',
            'email' => 'admin111@hanara.id',
            'password' => Hash::make('password123'),
            'role' => User::ROLE_ADMIN,
            'position' => 'System Administrator',
            'bio' => 'System administrator untuk website Hanara',
        ]);

        // Create regular user
        User::create([
            'name' => 'Content Creator',
            'email' => 'user@hanara.id',
            'password' => Hash::make('password'),
            'role' => User::ROLE_USER,
            'position' => 'Content Creator',
            'bio' => 'Content creator untuk artikel dan konten website',
        ]);

        $this->command->info('Admin and User accounts created successfully!');
        $this->command->info('Admin: admin@hanara.id / password');
        $this->command->info('User: user@hanara.id / password');
    }
}
