<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // Tambahkan baris ini agar kolom bisa diisi
    protected $fillable = ['judul', 'gambar', 'konten', 'kategori', 'tanggal'];
}
