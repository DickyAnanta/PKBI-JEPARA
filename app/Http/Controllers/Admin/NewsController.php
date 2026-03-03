<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $beritaKlinik = News::where('kategori', 'Klinik')->latest()->get();
        $beritaKartini = News::where('kategori', 'Kartini')->latest()->get();

        return view('news.index', compact('beritaKlinik', 'beritaKartini'));
    }

    public function show($id)
    {
        $artikel = News::findOrFail($id);

        $rekomendasi = News::where('kategori', $artikel->kategori)
            ->where('id', '!=', $id)
            ->latest()
            ->get();

        return view('news.show', [
            'artikel' => $artikel,
            'beritaTerkait' => $rekomendasi,
            'titleSlider' => 'Detail Berita ' . $artikel->kategori
        ]);
    }

    public function klinik()
    {
        $beritas = News::where('kategori', 'klinik')->latest()->get();
        return view('admin.news.klinik', ['beritas' => $beritas, 'type' => 'klinik']);
    }

    public function kartini()
    {
        $beritas = News::where('kategori', 'kartini')->latest()->get();
        return view('admin.news.kartini', ['beritas' => $beritas, 'type' => 'kartini']);
    }

    public function create(Request $request)
    {
        $type = $request->query('type');

        if (!$type) return redirect()->route('dashboard');

        return view('admin.news.create', compact('type'));
    }

    public function store(Request $request)
    {
        try {
            $berita = new News();
            $berita->judul      = $request->judul;
            $berita->tagline    = $request->tagline;
            $berita->kategori   = $request->kategori;
            $berita->deskripsi  = $request->deskripsi;
            $berita->tanggal    = $request->tanggal;

            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $nama_file = time() . "_" . $file->getClientOriginalName();

                $file->move(public_path('uploads/news'), $nama_file);

                $berita->gambar = $nama_file;
            }

            $berita->save();

            return redirect()->route('admin.berita.' . $request->kategori)->with('success', 'Berita berhasil diupload!');
        } catch (\Exception $e) {
            // Jika muncul "Unknown column 'gambar'", berarti migration belum sukses
            dd($e->getMessage());
        }
    }

    public function update(Request $request, News $berita)
    {
        try {
            $berita->judul     = $request->judul;
            $berita->tagline   = $request->tagline;
            $berita->deskripsi = $request->deskripsi;
            $berita->tanggal   = $request->tanggal;

            if ($request->hasFile('gambar')) {
                // 1. Hapus gambar lama dari folder jika ada
                if ($berita->gambar) {
                    $oldPath = public_path('uploads/news/' . $berita->gambar);
                    if (file_exists($oldPath)) {
                        unlink($oldPath);
                    }
                }

                // 2. Upload gambar baru
                $file = $request->file('gambar');
                $nama_file = time() . "_" . $file->getClientOriginalName();
                $file->move(public_path('uploads/news'), $nama_file);

                $berita->gambar = $nama_file;
            }

            $berita->save();

            return redirect()->route('admin.berita.' . $berita->kategori)->with('success', 'Berita berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal update: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $berita = News::findOrFail($id);
        $type = $berita->kategori;

        return view('admin.news.create', compact('berita', 'type'));
    }

    public function destroy(News $berita)
    {
        try {
            // Hapus file fisik agar storage tidak penuh
            if ($berita->gambar) {
                $path = public_path('uploads/news/' . $berita->gambar);
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            // Hapus data dari database
            $berita->delete();

            return back()->with('success', 'Berita berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus: ' . $e->getMessage());
        }
    }
}
