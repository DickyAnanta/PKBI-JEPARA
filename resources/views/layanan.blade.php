<x-guest-layout>
    <div class="min-h-screen bg-white font-sans text-slate-800 pt-32 pb-20">
        <main class="max-w-6xl mx-auto px-4">

            {{-- TITLE SECTION --}}
            <div class="text-center mb-10">
                <h1 class="text-4xl font-black text-[#102a6e] mb-2 tracking-tight uppercase">
                    JENIS PELAYANAN
                </h1>
                <p class="text-xl text-blue-700 font-bold italic opacity-90">
                    Klinik Pratama Wahana Sejahtera PKBI Jepara
                </p>
            </div>

            {{-- BENTO BOX INFO --}}
            <div class="border-[3px] border-[#102a6e] rounded-[40px] p-6 md:p-10 mb-14 grid md:grid-cols-2 gap-8 shadow-xl bg-white">
                {{-- Jam Operasional --}}
                <div class="flex flex-col">
                    <div class="bg-blue-700 text-white rounded-2xl py-3 px-6 mb-6 shadow-md font-extrabold w-full text-center tracking-widest uppercase text-sm">
                        Jam Operasional Kerja
                    </div>
                    <div class="grid grid-cols-2 gap-4 flex-1">
                        <div class="bg-rose-100 p-6 rounded-3xl text-center shadow-sm border border-rose-200 flex flex-col justify-center items-center transition-colors hover:bg-rose-200">
                            <p class="text-blue-900 font-extrabold text-[10px] uppercase mb-2">Jadwal Pelayanan</p>
                            <p class="text-[#102a6e] text-lg md:text-xl font-black">Senin - Sabtu</p>
                            <div class="h-[2px] w-8 bg-blue-900/20 my-3"></div>
                            <p class="text-blue-800 font-bold text-sm">09.00 - 13.00 WIB</p>
                        </div>
                        <div class="bg-rose-100 p-6 rounded-3xl text-center shadow-sm border border-rose-200 flex flex-col justify-center items-center transition-colors hover:bg-rose-200">
                            <p class="text-blue-900 font-extrabold text-[10px] uppercase mb-2">Praktek Dokter</p>
                            <p class="text-[#102a6e] text-lg md:text-xl font-black">Senin - Kamis</p>
                            <div class="h-[2px] w-8 bg-blue-900/20 my-3"></div>
                            <p class="text-blue-800 font-bold text-sm">09.00 - 12.00 WIB</p>
                        </div>
                    </div>
                </div>

                {{-- Lokasi --}}
                <div class="flex flex-col">
                    <div class="bg-blue-700 text-white rounded-2xl py-3 px-6 mb-6 shadow-md font-extrabold w-full text-center tracking-widest uppercase text-sm">
                        Lokasi
                    </div>
                    <div class="rounded-3xl overflow-hidden border-2 border-slate-200 h-[220px] relative group shadow-inner">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4853095280596!2d110.67464467499342!3d-6.586436093407154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e711f109a1d8611%3A0x1c8dab87e40ab8c7!2sKlinik%20Wahana%20Sejahtera%20PKBI%20Jepara!5e0!3m2!1sid!2sid!4v1772452937791!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            class="grayscale group-hover:grayscale-0 transition-all duration-700">
                        </iframe>
                    </div>
                </div>
            </div>

            {{-- GRID LAYANAN --}}
            @if($layanans->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
                @foreach($layanans as $index => $layanan)
                @php
                $isEven = $index % 2 === 0;
                $bgColor = $isEven ? 'bg-rose-100' : 'bg-blue-100';
                @endphp

                <div class="flex flex-col rounded-2xl overflow-hidden shadow-lg border border-slate-100 transform transition hover:scale-105 duration-300">
                    <div class="relative h-44 w-full bg-slate-100">
                        <img
                            {{-- Path disesuaikan dengan public/uploads/layanan di Controller --}}
                            src="{{ $layanan->gambar ? asset('uploads/layanan/' . $layanan->gambar) : asset('images/placeholder.jpg') }}"
                            alt="{{ $layanan->nama_layanan }}"
                            class="absolute inset-0 w-full h-full object-cover" />
                    </div>
                    <div class="{{ $bgColor }} py-5 text-center px-4 min-h-[80px] flex items-center justify-center">
                        <h3 class="font-black text-[#102a6e] uppercase text-[11px] md:text-xs tracking-widest leading-tight">
                            {{ $layanan->nama_layanan }}
                        </h3>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="w-full py-20 flex flex-col items-center justify-center border-2 border-dashed border-gray-200 rounded-[40px]">
                <i class="fas fa-hand-holding-medical text-5xl text-gray-200 mb-4"></i>
                <p class="text-gray-400 italic">Belum ada layanan yang tersedia saat ini.</p>
            </div>
            @endif

        </main>
    </div>
</x-guest-layout>