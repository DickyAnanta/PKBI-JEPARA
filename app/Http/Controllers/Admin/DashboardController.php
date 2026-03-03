<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Statistic;
use App\Models\News;
use App\Models\Service;

use Illuminate\Http\Request; // WAJIB ADA: Ini untuk memperbaiki error 'Undefined type Request'

class DashboardController extends Controller
{
    public function index()
    {
        $stats = Statistic::first();
        // Pastikan nama variabel ini sesuai dengan yang ada di @forelse
        $latestNewsKlinik = News::where('kategori', 'klinik')->latest()->take(2)->get();
        $latestNewsKartini = News::where('kategori', 'kartini')->latest()->take(2)->get();
        $totalServices = Service::count();

        return view('admin.dashboard', compact('stats', 'latestNewsKlinik', 'latestNewsKartini', 'totalServices'));
    }

    public function updateStats(Request $request)
    {
        // dd($request->all());
        // Validasi data
        $request->validate([
            'pasien' => 'required|numeric',
            'dokter' => 'required|numeric',
            'relawan' => 'required|numeric',
            'mitra' => 'required|numeric',
        ]);

        // Opsi A: Jika menggunakan tabel tunggal 'Statistics'
        Statistic::updateOrCreate(
            ['id' => 1], // Kondisi pencarian
            [
                'pasien'  => $request->pasien,
                'dokter'  => $request->dokter,
                'relawan' => $request->relawan,
                'mitra'   => $request->mitra,
            ]
        );

        return back()->with('success', 'Statistik berhasil diperbarui!');
    }
}
