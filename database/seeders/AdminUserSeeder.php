<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat user admin default
        User::firstOrCreate(
            ['email' => 'admin@apindo.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('admin123'), // Password default: admin123
            ]
        );

        $this->command->info('User admin berhasil dibuat!');
        $this->command->info('Email: admin@apindo.com');
        $this->command->info('Password: admin123');
        $this->command->warn('⚠️  PENTING: Ganti password setelah login pertama kali!');
    }
}

