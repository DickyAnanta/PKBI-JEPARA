<?php

namespace Database\Seeders;

use App\Models\Statistic;
use Illuminate\Database\Seeder;

class StatisticSeeder extends Seeder
{
    public function run(): void
    {
        // Biasanya hanya butuh 1 baris data untuk statistik utama
        Statistic::create([
            'pasien' => 1250,
            'dokter' => 12,
            'relawan' => 85,
            'mitra' => 10
        ]);
    }
}
