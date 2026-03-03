<x-guest-layout>
    <header class="pt-32 relative w-full overflow-hidden">
        {{-- Background Hero --}}
        <div class="absolute inset-0 z-0 h-[700px] w-full bg-gray-100 pointer-events-none text-center">
            <div class="w-full h-full relative opacity-70 mix-blend-multiply">
                <img src="{{ asset('images/bg-hero.jpg') }}" class="object-cover object-top w-full h-full">
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-white/50 via-white/80 to-white"></div>
        </div>

        {{-- Konten Utama Hero --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            {{-- flex-col dan items-center memastikan semua anak elemen berada di tengah --}}
            <div class="flex flex-col items-center text-center pt-14">

                {{-- Judul: text-center dan mx-auto --}}
                <h2 class="text-3xl md:text-[40px] font-extrabold leading-tight mb-8 uppercase text-blueText text-center max-w-4xl mx-auto">
                    Klinik Pratama Wahana Sejahtera <br /> PKBI Jepara
                </h2>

                {{-- Paragraf: mx-auto agar posisi center-nya absolut --}}
                <p class="text-[14px] md:text-[15px] font-medium text-gray-800 max-w-3xl mb-10 leading-relaxed text-center mx-auto">
                    Selamat datang di layanan Klinik Pratama Wahana Sejahtera PKBI Jepara.
                    <br class="hidden md:block" />
                    Pelayanan kesehatan yang berfokus pada kesehatan reproduksi dan keluarga berencana.
                </p>

                {{-- Tombol Konsultasi --}}
                <button @click="isPopupOpen = true" class="py-3 px-12 rounded-full font-extrabold text-lg shadow-lg transition-transform uppercase mb-16 border-b-[4px] border-white/50 bg-peach-gradient text-blueText hover:scale-105 active:scale-95 mx-auto">
                    KONSULTASI
                </button>

                {{-- Grid Statistik: Pastikan grid-nya juga simetris --}}
                <div class="pt-24 pb-12 mb-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 w-full max-w-7xl mx-auto items-center justify-center">
                    @php
                    $items = [
                    ['label' => 'Pasien', 'value' => $statistic->pasien ?? 0, 'icon' => 'fa-user'],
                    ['label' => 'Dokter', 'value' => $statistic->dokter ?? 0, 'icon' => 'fa-stethoscope'],
                    ['label' => 'Relawan', 'value' => $statistic->relawan ?? 0, 'icon' => 'fa-handshake'],
                    ['label' => 'Mitra', 'value' => $statistic->mitra ?? 0, 'icon' => 'fa-briefcase'],
                    ];
                    @endphp

                    @foreach($items as $item)
                    <div class="bg-card-gradient rounded-[24px] p-8 text-white flex flex-col items-center shadow-xl transition-all hover:scale-105 mx-auto w-full">
                        <i class="fas {{ $item['icon'] }} text-[70px] opacity-80 mb-2"></i>
                        <span class="text-4xl font-extrabold">
                            {{ number_format($item['value'], 0, ',', '.') }}{{ $item['label'] !== 'Dokter' ? '+' : '' }}
                        </span>
                        <span class="text-xs font-bold uppercase tracking-widest mt-1 text-center">{{ $item['label'] }}</span>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </header>

    <section class="py-12 pb-24 bg-white relative z-20">
        {{-- Konten Tentang Klinik Tetap Disini --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row gap-10 items-start">
            <div class="md:w-3/5">
                <h3 class="text-3xl font-extrabold mb-6 leading-tight uppercase">Klinik Pratama Wahana Sejahtera <br /> PKBI JEPARA</h3>
                <p class="text-justify text-[14px] leading-7 font-semibold text-blueText/80">
                    Perkumpulan Keluarga Berencana Indonesia sejak didirikan pada tahun 1957 telah menjadi bagian dari perjalanan panjang perjuangan pemenuhan Hak Kesehatan Seksual dan Reproduksi (HKSR) di Indonesia, terutama bagi perempuan, anak, remaja, dan masyarakat yang sering belum mendapatkan akses layanan secara maksimal.
                    
                    PKBI Cabang Jepara melanjutkan peran tersebut melalui kegiatan edukasi, pelayanan, dan pendampingan di bidang kesehatan reproduksi serta penguatan ketahanan keluarga, khususnya bagi masyarakat Jepara, sebagai upaya untuk meningkatkan kualitas dan kesejahteraan hidup secara berkelanjutan.
                </p>
            </div>
            <div class="w-full md:w-2/5 flex justify-center md:justify-end md:-mt-12 relative">
                <img src="{{ asset('images/doctor.png') }}" class="w-[300px] h-auto object-contain" alt="Dokter">
            </div>
        </div>
    </section>
</x-guest-layout>