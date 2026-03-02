<x-app-layout>
    {{-- LOGIKA HYBRID --}}
    @php
    $isEdit = isset($berita) && $berita->id;
    $action = $isEdit ? route('berita.update', $berita->id) : route('berita.store');
    @endphp

    <div class="px-8 py-10 min-h-screen bg-gray-50/50 flex justify-center">
        <div class="w-full max-w-5xl">

            {{-- HEADER --}}
            <div class="mb-8 flex items-end justify-between px-6">
                <div>
                    <h1 class="text-5xl font-black italic uppercase tracking-tighter text-[#00479b]">
                        {{ $isEdit ? 'Edit' : 'Tambah' }} <span class="text-[#8db8f9]">Berita</span>
                    </h1>
                    <p class="text-[10px] font-black uppercase italic tracking-[0.4em] text-gray-400 mt-2">
                        Sistem Manajemen • Berita {{ $type }}
                    </p>
                </div>
                <a href="{{ route('berita.' . $type) }}" class="w-12 h-12 bg-white border-4 border-[#00479b] rounded-2xl flex items-center justify-center text-[#00479b] hover:bg-red-500 hover:text-white transition-all shadow-lg">
                    <i class="fas fa-times"></i>
                </a>
            </div>

            {{-- FORM CARD --}}
            <div class="bg-white border-[8px] border-[#00479b] rounded-[50px] shadow-2xl overflow-hidden">
                <form action="{{ $action }}" method="POST" enctype="multipart/form-data" class="p-10 md:p-14">
                    @csrf
                    @if($isEdit)
                    @method('PUT')
                    @endif

                    <input type="hidden" name="type" value="{{ $type }}">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                        {{-- KOLOM KIRI --}}
                        <div class="space-y-8">
                            <div class="space-y-3">
                                <label class="text-[11px] font-black uppercase italic text-[#00479b] ml-4 tracking-widest">Judul Berita</label>
                                <input type="text" name="judul" value="{{ old('judul', $berita->judul ?? '') }}" placeholder="JUDUL BERITA..." required
                                    class="w-full bg-gray-50 border-4 border-gray-100 rounded-[25px] p-5 text-sm font-black text-[#00479b] focus:border-[#00479b] transition-all uppercase italic">
                            </div>

                            <div class="space-y-3">
                                <label class="text-[11px] font-black uppercase italic text-[#00479b] ml-4 tracking-widest">Tagline / Sub-Judul</label>
                                <input type="text" name="tagline" value="{{ old('tagline', $berita->tagline ?? '') }}" placeholder="CONTOH: INFO TERKINI HARI INI..."
                                    class="w-full bg-gray-50 border-4 border-gray-100 rounded-[25px] p-5 text-sm font-black text-[#00479b] focus:border-[#00479b] transition-all uppercase italic">
                            </div>

                            <div class="space-y-3">
                                <label class="text-[11px] font-black uppercase italic text-[#00479b] ml-4 tracking-widest">Kategori</label>
                                <input type="text" value="{{ strtoupper($type) }}" readonly
                                    class="w-full bg-blue-50 border-4 border-blue-100 rounded-[25px] p-5 text-sm font-black text-blue-400 cursor-not-allowed italic uppercase">
                            </div>

                            <div class="space-y-3">
                                <label class="text-[11px] font-black uppercase italic text-[#00479b] ml-4 tracking-widest">Tanggal Publish</label>
                                <input type="date" name="tanggal" required value="{{ old('tanggal', $berita->tanggal ?? date('Y-m-d')) }}"
                                    class="w-full bg-gray-50 border-4 border-gray-100 rounded-[25px] p-5 text-sm font-black text-[#00479b] focus:border-[#00479b] transition-all">
                            </div>
                        </div>

                        {{-- KOLOM KANAN (HANYA GAMBAR) --}}
                        <div class="space-y-8 flex flex-col">
                            <div class="space-y-3 flex-grow">
                                <label class="text-[11px] font-black uppercase italic text-[#00479b] ml-4 tracking-widest">
                                    Upload Gambar {{ $isEdit ? '(Kosongkan jika tidak diganti)' : '' }}
                                </label>
                                <div class="relative h-[250px] md:h-full min-h-[250px] group border-4 border-dashed border-gray-200 rounded-[40px] overflow-hidden bg-gray-50 transition-all hover:border-[#00479b]">
                                    <input type="file" name="gambar" id="imageInput" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-30">
                                    <div class="absolute inset-0 w-full h-full flex items-center justify-center">
                                        <div id="placeholder" class="text-center {{ $isEdit && $berita->gambar ? 'hidden' : '' }}">
                                            <i class="fas fa-image text-4xl text-gray-300 mb-3"></i>
                                            <p class="text-[9px] font-black uppercase italic text-gray-400">Pilih gambar thumbnail berita</p>
                                        </div>
                                        <img id="imagePreview"
                                            src="{{ $isEdit && $berita->gambar ? asset('uploads/news/' . $berita->gambar) : '#' }}"
                                            class="absolute inset-0 w-full h-full object-cover {{ $isEdit && $berita->gambar ? 'brightness-50' : 'hidden' }} transition-all duration-300 group-hover:brightness-[0.3]">
                                        <div id="editOverlay" class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none {{ $isEdit && $berita->gambar ? '' : 'hidden' }} z-10">
                                            <div class="w-14 h-14 bg-[#00479b] rounded-2xl flex items-center justify-center shadow-xl border-4 border-white mb-2">
                                                <i class="fas fa-pencil-alt text-white"></i>
                                            </div>
                                            <p class="text-[8px] font-black uppercase italic text-white tracking-widest">Ganti Gambar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- DESKRIPSI (SEKARANG DI ATAS TOMBOL) --}}
                        <div class="md:col-span-2 space-y-3">
                            <label class="text-[11px] font-black uppercase italic text-[#00479b] ml-4 tracking-widest">Isi Berita / Deskripsi Lengkap</label>
                            <textarea name="deskripsi" rows="8" placeholder="TULIS ISI BERITA DI SINI..." required
                                class="w-full bg-gray-50 border-4 border-gray-100 rounded-[40px] p-8 text-sm font-bold text-gray-600 focus:border-[#00479b] transition-all">{{ old('deskripsi', $berita->deskripsi ?? '') }}</textarea>
                        </div>

                        {{-- TOMBOL SIMPAN (SEKARANG DI PALING BAWAH) --}}
                        <div class="md:col-span-2">
                            <button type="submit"
                                class="w-full bg-[#00479b] text-white font-black italic uppercase py-8 rounded-[30px] shadow-xl hover:bg-blue-800 transition-all tracking-[0.4em] text-sm flex items-center justify-center gap-3">
                                <i class="fas {{ $isEdit ? 'fa-save' : 'fa-check-circle' }} text-blue-300"></i>
                                {{ $isEdit ? 'Update Berita' : 'Simpan Berita' }}
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
            const overlay = document.getElementById('editOverlay');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    preview.classList.add('brightness-50');
                    overlay.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-app-layout>