<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service; // Pastikan nama Model Anda Service
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $layanans = Service::latest()->get();
        return view('admin.service.index', compact('layanans'));
    }

    public function indexPublik()
    {
        $layanans = Service::orderBy('created_at', 'asc')->get();
        return view('layanan', compact('layanans'));
    }
    
    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        try {
            $layanan = new Service();
            $layanan->nama_layanan = $request->nama_layanan;
            $layanan->harga        = $request->harga;
            $layanan->jadwal       = $request->jadwal;
            $layanan->deskripsi    = $request->deskripsi;

            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                // Menggunakan Str::slug agar nama file rapi tanpa spasi
                $nama_file = time() . "_" . Str::slug($request->nama_layanan) . "." . $file->getClientOriginalExtension();

                // Pindahkan ke folder public/uploads/layanan
                $file->move(public_path('uploads/layanan'), $nama_file);

                // Simpan nama file ke database
                $layanan->gambar = $nama_file;
            }

            $layanan->save();

            return redirect()->route('layanan.index')->with('success', 'Layanan berhasil ditambahkan!');
        } catch (\Exception $e) {
            // Jika gagal, akan muncul pesan errornya di sini
            dd($e->getMessage());
        }
    }

    public function edit($id)
    {
        $layanan = Service::findOrFail($id);
        return view('admin.service.create', compact('layanan'));
    }

    public function update(Request $request, $id)
    {
        try {
            $layanan = Service::findOrFail($id);
            $layanan->nama_layanan = $request->nama_layanan;
            $layanan->harga        = $request->harga;
            $layanan->jadwal       = $request->jadwal;
            $layanan->deskripsi    = $request->deskripsi;

            if ($request->hasFile('gambar')) {
                // 1. Hapus gambar lama jika ada
                if ($layanan->gambar) {
                    $oldPath = public_path('uploads/layanan/' . $layanan->gambar);
                    if (file_exists($oldPath)) {
                        unlink($oldPath);
                    }
                }

                // 2. Upload gambar baru
                $file = $request->file('gambar');
                $nama_file = time() . "_" . Str::slug($request->nama_layanan) . "." . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/layanan'), $nama_file);

                $layanan->gambar = $nama_file;
            }

            $layanan->save();

            return redirect()->route('layanan.index')->with('success', 'Layanan berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal update: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $layanan = Service::findOrFail($id);

            if ($layanan->gambar) {
                $path = public_path('uploads/layanan/' . $layanan->gambar);
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            $layanan->delete();

            return back()->with('success', 'Layanan berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus: ' . $e->getMessage());
        }
    }
}
