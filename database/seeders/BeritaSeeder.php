<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use Illuminate\Support\Facades\Schema;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Matikan proteksi agar bisa truncate dengan aman
        Schema::disableForeignKeyConstraints();
        Berita::truncate();
        Schema::enableForeignKeyConstraints();

        // 2. Data Berita Klinik
        Berita::create([
            'judul' => 'Klinik Pratama Wahana Sejahtera PKBI Jepara Raih Juara 1 Nasional',
            'gambar' => 'images/bg-hero.jpg',
            'konten' => 'JEPARA - Klinik Wahana Sejahtera PKBI Jepara berhasil meraih juara 1 nasional dari BKKBN atas kontribusi luar biasa dalam pelayanan KB.',
            'kategori' => 'KLINIK',
            'tanggal' => now(),
        ]);

        // 3. Data Berita Youth Center
        Berita::create([
            'judul' => 'Kegiatan Rutin Remaja: Sosialisasi Kesehatan Reproduksi',
            'gambar' => 'images/bg-hero.jpg',
            'konten' => 'Youth Center PKBI Jepara mengadakan pertemuan rutin bersama konselor remaja untuk mengedukasi kesehatan reproduksi.',
            'kategori' => 'KARTINI',
            'tanggal' => now(),
        ]);
    }
}
