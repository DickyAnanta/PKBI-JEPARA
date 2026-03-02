<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Jalankan database seeds.
     */
    public function run(): void
    {
        // Membuat akun Admin Utama
        User::create([
            'name' => 'Admin PKBI Jepara',
            'email' => 'admin@pkbi.com',
            'password' => Hash::make('password123'), // Password terenkripsi
            'email_verified_at' => now(), // Otomatis verifikasi email
        ]);

        // Opsional: Membuat akun Staff/Kedua untuk pengujian
        User::create([
            'name' => 'Staff Klinik',
            'email' => 'staff@pkbi.com',
            'password' => Hash::make('staff123'),
            'email_verified_at' => now(),
        ]);
    }
}
