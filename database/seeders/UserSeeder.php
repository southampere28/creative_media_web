<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Satu',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // gunakan Hash agar terenkripsi
            'email_verified_at' => now(), // bisa null juga kalau belum diverifikasi
        ]);

        User::create([
            'name' => 'User Kedua',
            'email' => 'user@example.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);
    }
}
