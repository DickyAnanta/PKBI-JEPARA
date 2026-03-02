<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Sosialisasi Kesehatan Remaja',
                'kategori' => 'klinik',
                'deskripsi' => 'Pentingnya menjaga kesehatan reproduksi sejak dini bagi remaja Jepara.',
                'tagline' => 'Remaja Sehat, Masa Depan Cerah',
                'tanggal' => '2026-03-01',
                'gambar' => 'berita-klinik.jpg'
            ],
            [
                'judul' => 'Semangat Kartini Masa Kini',
                'kategori' => 'kartini',
                'deskripsi' => 'Pemberdayaan perempuan dalam sektor ekonomi kreatif di lingkungan PKBI.',
                'tagline' => 'Habis Gelap Terbitlah Terang',
                'tanggal' => '2026-04-21',
                'gambar' => 'berita-kartini.jpg'
            ],
        ];

        foreach ($data as $item) {
            News::create($item);
        }
    }
}
