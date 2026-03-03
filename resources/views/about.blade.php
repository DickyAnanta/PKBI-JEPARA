<x-guest-layout>
    {{-- Resource Khusus --}}
    @push('styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,700;0,800;1,800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .bg-card-gradient {
            background: linear-gradient(to bottom right, #1e3a8a, #4c6ef5);
        }

        .bg-peach-gradient {
            background: linear-gradient(to right, #ffafbd, #ffc3a0);
        }
    </style>
    @endpush

    <main class="min-h-screen bg-white overflow-x-hidden text-[#102a6e]">

        {{-- --- 1. HERO SECTION --- --}}
        <header class="pt-32 relative w-full pb-24">
            <div class="absolute inset-0 z-0 h-[500px] w-full bg-gray-100 pointer-events-none">
                <div class="w-full h-full relative opacity-70 mix-blend-multiply">
                    <img src="{{ asset('images/bg-hero.jpg') }}" alt="bg" class="w-full h-full object-cover object-top">
                </div>
                <div class="absolute inset-0 bg-gradient-to-b from-white/50 via-white/80 to-white"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center pt-14" data-aos="fade-down">
                <h2 class="text-5xl md:text-7xl font-extrabold italic leading-tight mb-4 uppercase tracking-tighter text-[#102a6e]">
                    Tentang Kami
                </h2>
                <div class="h-2.5 bg-[#102a6e] rounded-full mb-8 mx-auto w-[120px]"></div>
                <p class="text-[14px] md:text-[16px] font-bold text-gray-800 max-w-2xl mx-auto leading-relaxed uppercase tracking-widest opacity-80">
                    Mengenal Lebih Dekat Klinik Pratama Wahana Sejahtera PKBI Jepara
                </p>
            </div>
        </header>

        {{-- --- 2. SECTION SEJARAH --- --}}
        <section class="py-20 relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row gap-16 items-center">
                    <div class="md:w-1/2 relative" data-aos="fade-right">
                        <div class="w-full h-[450px] rounded-[3rem] overflow-hidden shadow-2xl border-[10px] border-white rotate-2 hover:rotate-0 transition-transform duration-500">
                            <img src="{{ asset('images/Bangunan.png') }}" alt="Sejarah" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-8 -right-8 bg-white p-8 rounded-[2.5rem] shadow-2xl flex items-center gap-4 border-b-4 border-blue-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#102a6e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" />
                                <path d="M3 3v5h5" />
                                <path d="M12 7v5l4 2" />
                            </svg>
                            <div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Berdiri Sejak</p>
                                <p class="text-2xl font-black italic text-[#102a6e]">1957</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2" data-aos="fade-left">
                        <h3 class="text-4xl font-extrabold mb-8 leading-tight uppercase italic text-[#102a6e]">
                            Sejarah & <br /> Latar Belakang
                        </h3>
                        <div class="text-justify text-[14px] leading-7 font-semibold space-y-6 text-[#102a6e]">
                            <p>PKBI (Perkumpulan Keluarga Berencana Indonesia) didirikan sebagai respon atas kebutuhan masyarakat akan layanan kesehatan reproduksi yang berkualitas dan inklusif.</p>
                            <p>Melalui Klinik Pratama Wahana Sejahtera, kami terus berkomitmen memberikan edukasi serta pelayanan yang ramah bagi seluruh lapisan masyarakat di Jepara.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- --- 3. SECTION MOTTO (INI DIA!) --- --}}
        <section class="py-16 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-gray-50 rounded-[4rem] p-12 md:p-20 text-center relative overflow-hidden border border-gray-100 shadow-sm" data-aos="zoom-in">
                    <div class="absolute top-0 left-0 w-full h-full opacity-[0.03] pointer-events-none flex flex-wrap justify-center items-center text-8xl font-black uppercase italic">
                        MOTTO MOTTO MOTTO MOTTO
                    </div>
                    <div class="relative z-10">
                        <span class="inline-block bg-blue-100 text-blue-800 text-[10px] font-black px-6 py-2 rounded-full uppercase tracking-[0.3em] mb-8">Motto Kami</span>
                        <h3 class="text-3xl md:text-5xl font-extrabold italic uppercase leading-tight tracking-tighter text-[#102a6e]">
                            "Sahabat Menuju Keluarga <br class="hidden md:block" /> Bertanggung Jawab dan Inklusif"
                        </h3>
                        <div class="w-24 h-1.5 bg-card-gradient mx-auto mt-8 rounded-full"></div>
                    </div>
                </div>
            </div>
        </section>

        {{-- --- 4. SECTION VISI MISI --- --}}
        <section class="py-24 bg-gray-50/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h3 class="text-4xl font-extrabold mb-20 leading-tight uppercase text-center italic text-[#102a6e]" data-aos="fade-up">
                    Visi & Misi Kami
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="bg-card-gradient rounded-[3rem] p-12 text-white shadow-2xl relative overflow-hidden group hover:scale-[1.03] transition-all duration-500" data-aos="zoom-in-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute -right-8 -top-8 opacity-10">
                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                        <div class="relative z-10">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-8 backdrop-blur-md shadow-inner text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </div>
                            <h4 class="text-3xl font-extrabold mb-6 uppercase italic tracking-tighter">Visi</h4>
                            <p class="text-xl font-bold leading-relaxed opacity-95 italic">
                                "Mewujudkan keluarga bertanggung jawab dan inklusif untuk memperbaiki Sumber Daya Manusia Indonesia"
                            </p>
                        </div>
                    </div>

                    <div class="bg-card-gradient rounded-[3rem] p-12 text-white shadow-2xl relative overflow-hidden group hover:scale-[1.03] transition-all duration-500" data-aos="zoom-in-up" data-aos-delay="200">
                        <div class="relative z-10">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-8 backdrop-blur-md shadow-inner text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <circle cx="12" cy="12" r="6" />
                                    <circle cx="12" cy="12" r="2" />
                                </svg>
                            </div>
                            <h4 class="text-3xl font-extrabold mb-6 uppercase italic tracking-tighter">Misi</h4>
                            <ul class="space-y-4 font-bold text-[15px]">
                                <li class="flex items-start gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-1 text-blue-300">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                    <span>Menyelenggarakan pelayanan kesehatan tingkat pertama yang bermutu di dukung oleh SDM yang handal.</span>
                                </li>
                                <li class="flex items-start gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-1 text-blue-300">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                    <span>Menyelenggarakan pelayanan kesehatan dan konseling, pada masyarakat rentan.</span>
                                </li>
                                <li class="flex items-start gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-1 text-blue-300">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                    <span>Mengutamakan kualitas pelayanan yang bermutu dengan sarana yang memadai.</span>
                                </li>
                                <li class="flex items-start gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-1 text-blue-300">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                    <span>Mengembangkan kerjasama dengan bidang kesehatan terkait.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- --- 5. SECTION PRESTASI (FULL WIDTH) --- --}}
        <section class="py-28">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h3 class="text-4xl font-extrabold mb-20 uppercase italic tracking-tighter text-[#102a6e]" data-aos="fade-up">
                    Prestasi & Penghargaan
                </h3>

                <div class="w-full rounded-[3.5rem] p-12 text-white flex flex-col md:flex-row items-center gap-12 shadow-[0_30px_60px_-15px_rgba(0,0,0,0.3)] relative overflow-hidden bg-card-gradient" data-aos="zoom-in-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute -left-10 -bottom-10 opacity-10 rotate-12">
                        <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526" />
                        <circle cx="12" cy="8" r="6" />
                    </svg>

                    <div class="relative z-10 bg-white/20 p-8 rounded-[2.5rem] backdrop-blur-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-yellow-400">
                            <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526" />
                            <circle cx="12" cy="8" r="6" />
                        </svg>
                    </div>

                    <div class="relative z-10 text-center md:text-left flex-1">
                        <span class="bg-yellow-400 text-blue-900 text-[10px] font-black px-4 py-1.5 rounded-full uppercase tracking-[0.2em] mb-6 inline-block">Juara 1 Nasional</span>
                        <h3 class="text-3xl md:text-5xl font-black mb-4 italic uppercase tracking-tighter text-white">Penghargaan Program Bangga Kencana BKKBN</h3>
                        <p class="text-xl font-semibold opacity-90 leading-relaxed italic">Meraih juara 1 nasional dari BKKBN atas kontribusi luar biasa dalam pelayanan Keluarga Berencana.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @push('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100
            });
        });
    </script>
    @endpush
</x-guest-layout>