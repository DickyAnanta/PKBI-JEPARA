<x-guest-layout>
    <div class="min-h-screen bg-white py-12 font-sans overflow-x-hidden">
        <div class="max-w-[1100px] mx-auto px-6 lg:px-8">

            {{-- Tombol Kembali --}}
            <div class="mb-8">
                <a href="{{ route('berita.index') }}" class="flex items-center gap-2 text-purple-600 hover:text-purple-800 transition-all font-medium italic">
                    <i class="fas fa-arrow-left"></i> Kembali ke Berita
                </a>
            </div>

            {{-- Bagian Isi Detail Berita --}}
            <article class="mb-24">
                {{-- Header Berita --}}
                <header class="mb-10 text-center">
                    <span class="inline-block px-4 py-1.5 bg-purple-100 text-purple-700 rounded-full text-xs font-bold uppercase tracking-widest mb-4">
                        {{ $artikel->kategori }}
                    </span>
                    <h1 class="text-3xl md:text-5xl font-extrabold text-blue-600 italic leading-tight tracking-tight">
                        {{ $artikel->judul }}
                    </h1>
                    <div class="mt-4 text-slate-400 text-sm italic">
                        Dipublikasikan pada {{ $artikel->created_at->format('d M Y') }}
                    </div>
                </header>

                {{-- Gambar Utama (Landscape untuk Konten) --}}
                <div class="relative w-full aspect-video rounded-[2.5rem] overflow-hidden mb-12 shadow-2xl shadow-purple-100">
                    <img src="{{ asset('uploads/news/' . ($artikel->gambar ?? $artikel->image)) }}"
                        alt="{{ $artikel->judul }}"
                        class="w-full h-full object-cover">
                </div>

                {{-- Konten Artikel --}}
                <div class="max-w-3xl mx-auto">
                    <div class="prose prose-lg prose-slate max-w-none text-slate-700 leading-[1.8] text-lg">
                        {!! $artikel->konten !!}
                    </div>
                </div>
            </article>

            {{-- Pemisah Visual --}}
            <div class="w-full h-px bg-gradient-to-r from-transparent via-purple-300 to-transparent mb-20"></div>

            {{-- SLIDER REKOMENDASI (Style Gambar 2) --}}
            {{-- Kita memanggil komponen slider dengan data $beritaTerkait dari Controller --}}
            <div class="mt-10">
                @include('components.berita-slider', [
                'title' => $titleSlider ?? 'Berita Terkait Lainnya',
                'berita' => $beritaTerkait,
                'cardPeach' => '#fdeae9'
                ])
            </div>

        </div>
    </div>
</x-guest-layout>