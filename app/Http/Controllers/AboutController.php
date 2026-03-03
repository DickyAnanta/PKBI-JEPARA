<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Menampilkan halaman Tentang Kami.
     */
    public function index(): View
    {
        // Kamu bisa mengirim data dinamis dari database di sini jika perlu
        $data = [
            'tahun_berdiri' => '1974', // Contoh data dinamis
            'visi' => 'Menjadi pusat pelayanan kesehatan reproduksi yang mandiri dan berkualitas.',
            'misi' => [
                'Memberikan pelayanan kesehatan yang ramah remaja dan inklusif.',
                'Meningkatkan kesadaran masyarakat tentang hak kesehatan seksual.',
                'Membangun kemitraan strategis dengan berbagai lembaga pemerintah dan swasta.'
            ]
        ];

        return view('about', $data);
    }
}
