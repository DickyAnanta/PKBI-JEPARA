<x-app-layout>
    <div class="px-8 py-6 min-h-screen bg-gray-50/50">
        <x-page-header title="Layanan Unit" />

        {{-- Tombol Tambah --}}
        <div class="flex justify-end mb-8">
            <a href="{{ route('layanan.create') }}" class="bg-[#8db8f9] text-white px-10 py-2.5 rounded-2xl font-black shadow-lg hover:bg-[#00479b] transition-all uppercase tracking-widest text-sm italic border-4 border-white">
                + TAMBAH
            </a>
        </div>

        {{-- Grid System --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 relative z-10">
            @forelse($layanans ?? [] as $item)
            <div class="group relative aspect-square bg-[#00479b] rounded-[50px] shadow-2xl border-[8px] border-white overflow-hidden transform hover:scale-105 transition-all duration-300 flex flex-col items-center justify-center p-6 text-center">

                {{-- Ikon Dekoratif --}}
                <div class="mb-4 text-white/20 group-hover:text-white/40 transition-colors">
                    <i class="fas fa-clinic-medical text-6xl"></i>
                </div>

                {{-- Konten Utama --}}
                <div class="relative z-10">
                    <span class="block bg-white/10 backdrop-blur-md text-white text-[10px] font-black px-4 py-1 rounded-full uppercase italic mb-3 tracking-widest border border-white/20">
                        {{ $item->kategori }}
                    </span>
                    <h3 class="text-white font-black italic uppercase tracking-tighter text-xl leading-tight">
                        {{ $item->nama_unit }}
                    </h3>
                </div>
                <img src="{{ asset('uploads/layanan/' . $item->gambar) }}"
                    class="absolute inset-0 w-full h-full object-cover opacity-50"
                    alt="{{ $item->judul }}">

                {{-- Overlay Aksi (Muncul saat Hover) --}}
                <div class="absolute inset-0 bg-[#00479b]/90 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">
                    <a href="{{ route('layanan.edit', $item->id) }}" class="w-12 h-12 bg-yellow-400 text-white rounded-2xl flex items-center justify-center shadow-xl hover:scale-110 transition">
                        <i class="fas fa-edit text-lg"></i>
                    </a>

                    <form action="{{ route('layanan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus unit ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-12 h-12 bg-red-500 text-white rounded-2xl flex items-center justify-center shadow-xl hover:scale-110 transition">
                            <i class="fas fa-trash text-lg"></i>
                        </button>
                    </form>
                </div>

                {{-- Efek Lingkaran di Background --}}
                <div class="absolute -right-4 -bottom-4 w-32 h-32 bg-white/5 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
            </div>
            @empty
            {{-- State Kosong --}}
            <div class="col-span-full py-20 text-center border-4 border-dashed border-[#00479b]/10 rounded-[50px]">
                <div class="flex flex-col items-center">
                    <i class="fas fa-hand-holding-medical text-6xl text-[#00479b] mb-4 opacity-10"></i>
                    <h4 class="text-[#00479b] font-black italic uppercase tracking-widest text-xl opacity-40">Data Layanan Kosong</h4>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</x-app-layout>