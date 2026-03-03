<div x-show="isPopupOpen"
    x-cloak
    class="fixed inset-0 z-[100] flex items-center justify-center bg-black/60 backdrop-blur-sm p-4"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95">

    <div class="bg-white rounded-[2.5rem] shadow-2xl w-full max-w-sm overflow-hidden" @click.away="isPopupOpen = false">
        {{-- Header Pop-up --}}
        <div class="bg-blueText p-6 text-white text-center relative">
            <button @click="isPopupOpen = false" class="absolute top-4 right-4 bg-white/20 p-1.5 rounded-full hover:bg-white/40 transition-colors">
                <i class="fas fa-times"></i>
            </button>
            <div class="mb-2">
                <i class="fas fa-comment-dots text-3xl opacity-80"></i>
            </div>
            <h3 class="text-xl font-bold uppercase tracking-tight">Konsultasi Online</h3>
            <p class="text-[10px] uppercase tracking-[0.2em] opacity-70 mt-1">Privasi Anda Prioritas Kami</p>
        </div>

        {{-- Body Pop-up --}}
        <div class="p-8 text-center">
            {{-- Kata-kata Persuasif --}}
            <div class="mb-8">
                <h4 class="text-blueText font-extrabold text-lg mb-2">Punya Pertanyaan Medis?</h4>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Jangan dipendam sendiri. Konsultasikan keluhan Anda dengan tim profesional kami secara <bold>aman, ramah, dan rahasia terjamin.</bold>
                </p>
            </div>

            <div class="flex flex-col gap-4">
                {{-- Hubungi Admin (Untuk pendaftaran/tanya umum) --}}
                <a href="https://wa.me/6282289985675" class="bg-[#25D366] text-white py-4 rounded-2xl font-black text-[11px] tracking-widest uppercase shadow-md hover:scale-105 active:scale-95 flex flex-col items-center justify-center transition-all">
                    <div class="flex items-center gap-2">
                        <i class="fab fa-whatsapp text-lg"></i> Tanya Jadwal & Layanan
                    </div>
                    <span class="text-[9px] font-medium opacity-80 mt-1 capitalize tracking-normal">Respon cepat via WhatsApp</span>
                </a>

                {{-- Konsultasi Dokter (Untuk keluhan medis) --}}
                <a href="https://wa.me/628812813021" class="bg-blueText text-white py-4 rounded-2xl font-black text-[11px] tracking-widest uppercase shadow-md hover:scale-105 active:scale-95 flex flex-col items-center justify-center transition-all">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-stethoscope text-lg"></i> Konsultasi Medis (Dokter)
                    </div>
                    <span class="text-[9px] font-medium opacity-80 mt-1 capitalize tracking-normal">Solusi tepat dari ahlinya</span>
                </a>
            </div>

            {{-- Footer Kecil --}}
            <p class="mt-6 text-[10px] text-gray-400 italic">
                *Tersedia pada jam operasional klinik
            </p>
        </div>
    </div>
</div>