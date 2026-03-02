<x-app-layout>
    {{-- Tambahkan x-data untuk mengontrol modal --}}
    <div x-data="{ openEditModal: false }" class="p-6 md:p-10 bg-gray-50/50 min-h-screen">

        {{-- Header --}}
        <x-page-header title="Dashboard" />

        {{-- TOMBOL EDIT --}}
        <div class="flex justify-end mb-6 -mt-4">
            <button @click="openEditModal = true" class="bg-[#00479b] text-white px-5 py-2 rounded-full font-black italic uppercase text-[10px] shadow-lg hover:scale-105 transition-transform tracking-widest">
                <i class="fas fa-edit mr-2"></i> Edit Statistik
            </button>
        </div>

        <div class="space-y-12">
            {{-- TOP STATS SECTION --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                $statsData = [
                ['id' => 'pasien', 'label' => 'Data Pasien', 'sub' => 'Total Pasien', 'val' => $stats->pasien ?? 0, 'fmt' => true, 'icon' => 'fa-users'],
                ['id' => 'dokter', 'label' => 'Tenaga Medis', 'sub' => 'Jumlah Dokter', 'val' => $stats->dokter ?? 0, 'fmt' => false, 'icon' => 'fa-user-md'],
                ['id' => 'relawan', 'label' => 'SDM Relawan', 'sub' => 'Total Relawan', 'val' => $stats->relawan ?? 0, 'fmt' => false, 'icon' => 'fa-handshake'],
                ['id' => 'mitra', 'label' => 'Kemitraan', 'sub' => 'Mitra Aktif', 'val' => $stats->mitra ?? 0, 'fmt' => false, 'icon' => 'fa-briefcase'],
                ];
                @endphp

                @foreach($statsData as $item)
                <div class="group relative bg-white rounded-[35px] p-2 shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-[#00479b]/10 text-[#00479b] px-4 py-1 rounded-full text-[10px] font-black uppercase italic tracking-widest">
                                {{ $item['label'] }}
                            </span>
                            <i class="fas {{ $item['icon'] }} text-[#00479b]/20 text-xl group-hover:scale-110 transition-transform"></i>
                        </div>

                        <div class="relative z-10">
                            <h3 class="text-5xl font-black italic tracking-tighter text-[#00479b]">
                                {{ $item['fmt'] ? number_format($item['val']) : $item['val'] }}
                            </h3>
                            <p class="text-[10px] mt-1 text-gray-400 uppercase font-bold tracking-[0.1em]">{{ $item['sub'] }}</p>
                        </div>
                    </div>
                    <div class="absolute -right-4 -bottom-4 w-24 h-24 bg-[#00479b]/5 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                </div>
                @endforeach
            </div>

            {{-- MAIN CONTENT SECTION --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                {{-- Layanan Card --}}
                <div class="lg:col-span-1 bg-[#00479b] rounded-[40px] p-8 text-white shadow-2xl shadow-[#00479b]/30 relative overflow-hidden flex flex-col justify-between group">
                    <div class="relative z-10">
                        <span class="bg-white/20 backdrop-blur-md text-white px-5 py-1.5 rounded-full text-[10px] font-black uppercase italic tracking-widest border border-white/30">Layanan</span>
                        <div class="mt-12">
                            <p class="text-xs uppercase font-bold opacity-60 tracking-[0.2em] mb-2">Total Layanan Aktif</p>
                            <div class="flex items-baseline gap-4">
                                <span class="text-8xl font-black italic tracking-tighter group-hover:tracking-normal transition-all duration-500">{{ $totalServices ?? 0 }}</span>
                                <span class="text-lg italic font-bold opacity-80 uppercase leading-tight">Layanan<br>Tersedia</span>
                            </div>
                        </div>
                    </div>
                    <i class="fas fa-hand-holding-medical absolute -right-8 -bottom-8 text-white/10 text-[15rem] rotate-12 group-hover:rotate-0 transition-transform duration-700"></i>
                </div>

                {{-- Berita Klinik Card --}}
                <div class="bg-white rounded-[40px] p-8 border border-gray-100 shadow-xl flex flex-col">
                    <div class="flex justify-between items-center mb-8">
                        <span class="bg-[#00479b] text-white px-5 py-1.5 rounded-full text-[10px] font-black uppercase italic tracking-widest">Berita Klinik</span>
                        <div class="text-right">
                            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest">Total Post</p>
                            <p class="text-2xl font-black italic text-[#00479b]">{{ $latestNewsKlinik->count() ?? 0 }}</p>
                        </div>
                    </div>
                    <div class="space-y-4 flex-1">
                        {{-- AMBIL DATA DATABASE --}}
                        @forelse ($latestNewsKlinik as $news)
                        <div class="group cursor-pointer bg-gray-50 hover:bg-[#00479b]/5 border border-transparent hover:border-[#00479b]/20 p-4 rounded-[25px] transition-all">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-white rounded-2xl shadow-sm flex items-center justify-center text-[#00479b]">
                                    <i class="fas fa-newspaper"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-[#00479b] text-[10px] font-black uppercase italic truncate">{{ $news->judul }}</p>
                                    <p class="text-[9px] text-gray-400 font-bold uppercase mt-0.5 italic">
                                        {{ $news->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="flex flex-col items-center justify-center py-10 opacity-40">
                            <i class="fas fa-folder-open text-3xl mb-2 text-[#00479b]"></i>
                            <p class="text-[10px] font-black uppercase italic tracking-widest">Data tidak ada</p>
                        </div>
                        @endforelse
                    </div>
                </div>

                {{-- Berita Kartini Card --}}
                <div class="bg-white rounded-[40px] p-8 border border-gray-100 shadow-xl flex flex-col">
                    <div class="flex justify-between items-center mb-8">
                        <span class="bg-[#00479b] text-white px-5 py-1.5 rounded-full text-[10px] font-black uppercase italic tracking-widest">Berita Kartini</span>
                        <div class="text-right">
                            <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest">Total Post</p>
                            <p class="text-2xl font-black italic text-[#00479b]">{{ $latestNewsKartini->count() ?? 0 }}</p>
                        </div>
                    </div>
                    <div class="space-y-4 flex-1">
                        {{-- AMBIL DATA DATABASE --}}
                        @forelse ($latestNewsKartini as $news)
                        <div class="group cursor-pointer bg-gray-50 hover:bg-[#00479b]/5 border border-transparent hover:border-[#00479b]/20 p-4 rounded-[25px] transition-all">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-white rounded-2xl shadow-sm flex items-center justify-center text-[#00479b]">
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-[#00479b] text-[10px] font-black uppercase italic truncate">{{ $news->judul }}</p>
                                    <p class="text-[9px] text-gray-400 font-bold uppercase mt-0.5 italic">
                                        {{ $news->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="flex flex-col items-center justify-center py-10 opacity-40">
                            <i class="fas fa-folder-open text-3xl mb-2 text-[#00479b]"></i>
                            <p class="text-[10px] font-black uppercase italic tracking-widest">Data tidak ada</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        {{-- MODAL UPDATE --}}
        <div x-show="openEditModal"
            class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-cloak>

            <div class="bg-white rounded-[40px] border-4 border-[#00479b] w-full max-w-lg overflow-hidden shadow-2xl" @click.away="openEditModal = false">
                <div class="bg-[#00479b] p-6 text-white flex justify-between items-center">
                    <h2 class="font-black italic uppercase tracking-tighter text-xl">Update Statistik</h2>
                    <button @click="openEditModal = false" class="text-white/50 hover:text-white transition-colors">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>

                <form action="{{ route('stats.update') }}" method="POST" class="p-8 space-y-6">
                    @csrf @method('PUT')
                    <div class="grid grid-cols-2 gap-6">
                        @foreach($statsData as $item)
                        <div>
                            <label class="block text-[10px] font-black uppercase italic text-[#00479b] mb-2 ml-1 tracking-widest">{{ $item['label'] }}</label>
                            <input type="number" name="{{ $item['id'] }}" value="{{ $item['val'] }}"
                                class="w-full border-2 border-gray-100 rounded-2xl p-4 text-sm font-black text-[#00479b] focus:border-[#00479b] focus:ring-0 transition-all bg-gray-50/50">
                        </div>
                        @endforeach
                    </div>
                    <div class="pt-4">
                        <button type="submit" class="w-full bg-[#00479b] text-white font-black italic uppercase py-4 rounded-2xl shadow-xl hover:bg-blue-800 transition-all tracking-[0.2em]">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-app-layout>