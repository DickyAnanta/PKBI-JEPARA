<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class YouthCenterController extends Controller
{
    /**
     * Menampilkan halaman utama Youth Center.
     *
     * @return View
     */
    public function index(): View
    {
        // Data tambahan jika ingin dikirim ke view secara dinamis
        $data = [
            'title' => 'Youth Center - PKBI',
            'igUsername' => 'youthcenter.kartini',
            'provinces' => 17
        ];

        return view('youth-center', $data);
    }
}
