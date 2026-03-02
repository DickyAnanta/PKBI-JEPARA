<x-app-layout>
    <div class="mb-10 border-b-2 border-[#00479b] pb-6 flex justify-between items-end">
        <h1 class="text-[#00479b] text-3xl font-black italic uppercase tracking-tighter leading-none">Berita Klinik</h1>
        <button class="bg-[#00479b] text-white px-6 py-2 rounded-full font-bold uppercase text-xs shadow-md">Tulis Berita</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="group border-2 border-gray-100 rounded-[30px] p-4 bg-white hover:border-[#00479b] transition-all">
            <div class="aspect-video bg-gray-200 rounded-2xl mb-4 overflow-hidden relative">
                <img src="https://via.placeholder.com/400x200" class="w-full h-full object-cover group-hover:scale-110 transition-transform">
                <span class="absolute top-2 right-2 bg-[#00479b] text-white text-[10px] px-3 py-1 rounded-full font-bold italic uppercase">Klinik</span>
            </div>
            <h3 class="text-[#00479b] font-black uppercase text-sm leading-tight mb-2">Penyuluhan Kesehatan Reproduksi Remaja</h3>
            <p class="text-gray-400 text-[10px] mb-4">12 Maret 2026 • Oleh: Admin</p>
            <div class="flex gap-2">
                <button class="flex-1 py-2 bg-blue-50 text-[#00479b] font-black text-[10px] uppercase rounded-xl hover:bg-[#00479b] hover:text-white transition">Edit</button>
                <button class="p-2 text-red-500 hover:bg-red-50 rounded-xl transition"><i class="fas fa-trash"></i></button>
            </div>
        </div>
    </div>
</x-app-layout> 