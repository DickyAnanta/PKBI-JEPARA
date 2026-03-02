<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // 1. Tentukan nama tabel jika nama tabel di DB bukan 'services'
    protected $table = 'services';

    // 2. DAFTARKAN KOLOM (Ini yang bikin data tidak masuk jika kosong)
    protected $fillable = [
        'nama_layanan',
        'harga',
        'jadwal',
        'deskripsi',
        'gambar',
    ];
}
