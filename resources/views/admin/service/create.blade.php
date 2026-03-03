<x-app-layout>
    {{-- LOGIKA HYBRID --}}
    @php
    $isEdit = isset($layanan) && $layanan->id;
    $action = $isEdit ? route('layanan.update', $layanan->id) : route('layanan.store');
    @endphp

    <div class="px-8 py-10 min-h-screen bg-gray-50/50 flex justify-center">
        <div class="w-full max-w-5xl">

            {{-- HEADER --}}
            <div class="mb-8 flex items-end justify-between px-6">
                <div>
                    <h1 class="text-5xl font-black italic uppercase tracking-tighter text-[#00479b]">
                        {{ $isEdit ? 'Edit' : 'Tambah' }} <span class="text-[#8db8f9]">Layanan</span>
                    </h1>
                    <p class="text-[10px] font-black uppercase italic tracking-[0.4em] text-gray-400 mt-2">
                        Sistem Manajemen • Inventaris Layanan
                    </p>
                </div>
                <a href="{{ route('layanan.index') }}" class="w-12 h-12 bg-white border-4 border-[#00479b] rounded-2xl flex items-center justify-center text-[#00479b] hover:bg-red-500 hover:text-white transition-all shadow-lg">
                    <i class="fas fa-times"></i>
                </a>
            </div>

            {{-- FORM CARD --}}
            <div class="bg-white border-[8px] border-[#00479b] rounded-[50px] shadow-2xl overflow-hidden">
                <form action="{{ $action }}" method="POST" enctype="multipart/form-data" class="p-10 md:p-14">
                    @csrf
                    @if($isEdit) @method('PUT') @endif

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                        {{-- KOLOM KIRI (Informasi Utama) --}}
                        <div class="space-y-8">
                            {{-- Nama Layanan --}}
                            <div class="space-y-3">
                                <label class="text-[11px] font-black uppercase italic text-[#00479b] ml-4 tracking-widest">Nama Layanan</label>
                                <input type="text" name="nama_layanan" value="{{ old('nama_layanan', $layanan->nama_layanan ?? '') }}" placeholder="CONTOH: KONSULTASI VIP..." required
                                    class="w-full bg-gray-50 border-4 border-gray-100 rounded-[25px] p-5 text-sm font-black text-[#00479b] focus:border-[#00479b] transition-all uppercase italic">
                            </div>

                            {{-- Harga --}}
                            <div class="space-y-3">
                                <label class="text-[11px] font-black uppercase italic text-[#00479b] ml-4 tracking-widest">Harga Layanan (Rp)</label>
                                <input type="number" name="harga" value="{{ old('harga', $layanan->harga ?? '') }}" placeholder="150000" required
                                    class="w-full bg-gray-50 border-4 border-gray-100 rounded-[25px] p-5 text-sm font-black text-[#00479b] focus:border-[#00479b] transition-all">
                            </div>

                            {{-- Jadwal --}}
                            <div class="space-y-3">
                                <label class="text-[11px] font-black uppercase italic text-[#00479b] ml-4 tracking-widest">Jadwal Operasional</label>
                                <input type="text" name="jadwal" value="{{ old('jadwal', $layanan->jadwal ?? '') }}" placeholder="SENIN - JUMAT (08:00 - 17:00)" required
                                    class="w-full bg-gray-50 border-4 border-gray-100 rounded-[25px] p-5 text-sm font-black text-[#00479b] focus:border-[#00479b] transition-all uppercase italic">
                            </div>
                        </div>

                        {{-- KOLOM KANAN (Gambar/Ikon) --}}
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase italic text-[#00479b] ml-4 tracking-widest">Gambar Layanan</label>
                            <div class="relative h-[320px] md:h-full min-h-[320px] group border-4 border-dashed border-gray-200 rounded-[40px] overflow-hidden bg-gray-50 hover:border-[#00479b] transition-all">
                                <input type="file" name="gambar" id="imageInput" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-30">
                                <div class="absolute inset-0 w-full h-full flex items-center justify-center">
                                    <div id="placeholder" class="text-center {{ $isEdit && $layanan->gambar ? 'hidden' : '' }}">
                                        <i class="fas fa-camera-retro text-4xl text-gray-300 mb-3"></i>
                                        <p class="text-[9px] font-black uppercase italic text-gray-400">Pilih Foto Layanan</p>
                                    </div>
                                    <img id="imagePreview" src="{{ $isEdit && $layanan->gambar ? asset('uploads/layanan/' . $layanan->gambar) : '#' }}"
                                        class="absolute inset-0 w-full h-full object-cover {{ $isEdit && $layanan->gambar ? '' : 'hidden' }}">
                                </div>
                            </div>
                        </div>

                        {{-- DESKRIPSI (Di atas tombol) --}}
                        <div class="md:col-span-2 space-y-3">
                            <label class="text-[11px] font-black uppercase italic text-[#00479b] ml-4 tracking-widest">Deskripsi Layanan</label>
                            <textarea name="deskripsi" rows="6" placeholder="JELASKAN DETAIL LAYANAN ANDA..." required
                                class="w-full bg-gray-50 border-4 border-gray-100 rounded-[40px] p-8 text-sm font-bold text-gray-600 focus:border-[#00479b] transition-all">{{ old('deskripsi', $layanan->deskripsi ?? '') }}</textarea>
                        </div>

                        {{-- TOMBOL SIMPAN (Paling Bawah) --}}
                        <div class="md:col-span-2">
                            <button type="submit" class="w-full bg-[#00479b] text-white font-black italic uppercase py-8 rounded-[30px] shadow-xl hover:bg-blue-800 transition-all tracking-[0.4em] text-sm flex items-center justify-center gap-3">
                                <i class="fas {{ $isEdit ? 'fa-save' : 'fa-check-double' }} text-blue-300"></i>
                                {{ $isEdit ? 'Update Data Layanan' : 'Simpan Data Layanan' }}
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('imageInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('imagePreview');
            const placeholder = document.getElementById('placeholder');
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-app-layout>