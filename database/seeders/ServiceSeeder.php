<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_layanan' => 'Poli KIA',
                'harga' => 75000,
                'jadwal' => 'Senin - Kamis (08:00 - 12:00)',
                'deskripsi' => 'Layanan kesehatan ibu dan anak, imunisasi, dan pemeriksaan kehamilan.',
                'gambar' => 'kia.jpg'
            ],
            [
                'nama_layanan' => 'Konseling KB',
                'harga' => 50000,
                'jadwal' => 'Jumat (09:00 - 15:00)',
                'deskripsi' => 'Konsultasi alat kontrasepsi dan perencanaan keluarga.',
                'gambar' => 'kb.jpg'
            ],
        ];

        foreach ($data as $item) {
            Service::create($item);
        }
    }
}
