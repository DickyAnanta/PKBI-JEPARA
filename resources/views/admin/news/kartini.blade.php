<x-app-layout>
    <div class="px-8 py-6 min-h-screen bg-gray-50/50">
        <x-page-header title="Berita Kartini" />

        <div class="flex justify-end mb-8">
            <a href="{{ route('berita.create', ['type' => $type]) }}" class="bg-[#8db8f9] text-white px-10 py-2.5 rounded-2xl font-black shadow-lg hover:bg-[#00479b] transition-all uppercase tracking-widest text-sm italic border-4 border-white">
                + TAMBAH
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 relative z-10">
            @forelse($beritas as $item)
            <div class="group relative aspect-square bg-[#00479b] rounded-[50px] shadow-2xl border-[8px] border-white overflow-hidden transform hover:scale-105 transition-all duration-300 flex flex-col items-center justify-center p-8 text-center">

                {{-- Ikon Bullhorn/Pengumuman --}}
                <div class="mb-4 text-[#e07898]/30 group-hover:text-[#e07898]/60 transition-colors">
                    <i class="fas fa-bullhorn text-6xl rotate-[-12deg] group-hover:rotate-0 transition-transform"></i>
                </div>

                <div class="relative z-10">
                    <span class="block bg-[#e07898]/20 backdrop-blur-md text-white text-[9px] font-black px-4 py-1 rounded-full uppercase italic mb-3 tracking-[0.2em] border border-white/20">
                        KARTINI UPDATE • {{ $item->created_at->format('d M') }}
                    </span>
                    <h3 class="text-white font-black italic uppercase tracking-tighter text-lg leading-tight line-clamp-3">
                        {{ $item->judul }}
                    </h3>
                </div>
                <img src="{{ asset('uploads/news/' . $item->gambar) }}"
                    class="absolute inset-0 w-full h-full object-cover opacity-50"
                    alt="{{ $item->judul }}">

                {{-- Overlay Aksi --}}
                <div class="absolute inset-0 bg-[#00479b]/95 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">
                    <a href="{{ route('berita.edit', $item->id) }}" class="w-12 h-12 bg-yellow-400 text-white rounded-2xl flex items-center justify-center shadow-xl hover:scale-110 transition">
                        <i class="fas fa-edit text-lg"></i>
                    </a>
                    <form action="{{ route('berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus berita ini?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="w-12 h-12 bg-red-500 text-white rounded-2xl flex items-center justify-center shadow-xl hover:scale-110 transition">
                            <i class="fas fa-trash text-lg"></i>
                        </button>
                    </form>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center border-4 border-dashed border-[#e07898]/10 rounded-[50px]">
                <h4 class="text-[#e07898] font-black italic uppercase tracking-widest text-xl opacity-40">Belum Ada Berita Kartini</h4>
            </div>
            @endforelse
        </div>
    </div>
</x-app-layout>