<x-guest-layout>
    {{-- Tambahkan Resource Khusus untuk Halaman Ini --}}
    @push('styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,700;0,800;1,800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .bg-peach-gradient {
            background: linear-gradient(to right, #ffafbd, #ffc3a0);
        }

        .bg-card-gradient {
            background: linear-gradient(to bottom, #1e3a8a, #4c6ef5);
        }

        .bg-insta-gradient {
            background: linear-gradient(to right, #833ab4, #fd1d1d, #fcb045);
        }
    </style>
    @endpush

    <main class="min-h-screen bg-white overflow-x-hidden text-[#102a6e]" x-data="{ isPopupOpen: false }">

        {{-- --- HERO SECTION --- --}}
        <header class="pt-32 relative w-full pb-24">
            <div class="absolute inset-0 z-0 h-[500px] w-full bg-gray-100 pointer-events-none">
                <div class="w-full h-full relative opacity-70 mix-blend-multiply">
                    <img src="{{ asset('images/bg-hero.jpg') }}" alt="bg youth center" class="w-full h-full object-cover object-top">
                </div>
                <div class="absolute inset-0 bg-gradient-to-b from-white/40 via-white/70 to-white"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-down" data-aos-duration="1000">
                <div class="inline-flex items-center gap-2 bg-blue-100 px-4 py-1.5 rounded-full mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-blue-800">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                    </svg>
                    <span class="text-[10px] font-black uppercase tracking-[0.2em]">Ruang Aman Remaja</span>
                </div>

                <h2 class="text-4xl md:text-7xl font-extrabold leading-tight mb-2 uppercase tracking-tighter italic text-[#102a6e]">
                    Youth Center
                </h2>
                <div class="h-2 bg-[#102a6e] rounded-full mb-8 mx-auto" style="width: 100px;"></div>
                <p class="text-[14px] md:text-[18px] font-bold text-gray-800 max-w-2xl mx-auto leading-relaxed uppercase tracking-widest opacity-80 mb-8">
                    Pusat Informasi & Pelayanan Kesehatan Reproduksi Remaja
                </p>

                <button @click="isPopupOpen = true"
                    class="py-3 px-10 rounded-full font-extrabold text-lg shadow-lg hover:scale-105 transition-transform uppercase border-b-[4px] border-white/50 bg-peach-gradient text-[#102a6e]">
                    HUBUNGI KAMI
                </button>
            </div>
        </header>

        {{-- --- SECTION 1: PENJELASAN --- --}}
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row gap-16 items-center">
                    <div class="md:w-3/5" data-aos="fade-up">
                        <h3 class="text-3xl font-extrabold mb-8 leading-tight uppercase text-[#102a6e]">Wadah Ekspresi <br /> & Edukasi Remaja</h3>
                        <p class="text-justify text-[14px] leading-7 font-semibold mb-6 text-[#102a6e]">Youth Center merupakan pusat kegiatan remaja PKBI yang didedikasikan sebagai ruang aman bagi anak muda. Kami menyediakan informasi komprehensif mengenai kesehatan seksual dan reproduksi (HKSR) guna membekali remaja dengan pengetahuan yang tepat dan bertanggung jawab.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-pink-100 flex items-center justify-center text-pink-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                                        <path d="M3.22 12H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27" />
                                    </svg>
                                </div>
                                <span class="font-bold text-sm uppercase tracking-wide">Layanan HKSR</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-blue-100 flex items-center justify-center text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                        <path d="M8 9h8" />
                                        <path d="M8 13h6" />
                                    </svg>
                                </div>
                                <span class="font-bold text-sm uppercase tracking-wide">Konseling Sebaya</span>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-2/5" data-aos="zoom-in" data-aos-delay="200">
                        <div class="relative w-full aspect-square rounded-[3rem] overflow-hidden shadow-2xl border-[12px] border-white -rotate-3 hover:rotate-0 transition-transform duration-500">
                            <img src="{{ asset('images/youthcenter2.jpeg') }}" alt="Kegiatan Remaja" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- --- SECTION 2: JARINGAN (MAP PIN) --- --}}
        <section class="py-16 md:py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="flex justify-center mb-6 text-blue-800 opacity-20" data-aos="fade">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" class="md:w-24 md:h-24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                        <path d="M2 12h20" />
                    </svg>
                </div>

                <div data-aos="fade-up">
                    <h3 class="text-2xl md:text-3xl font-extrabold mb-4 uppercase tracking-tight text-[#102a6e] px-2">
                        Jaringan Nasional yang Luas
                    </h3>
                    <p class="max-w-2xl mx-auto text-[13px] md:text-[14px] font-semibold leading-relaxed mb-10 text-[#102a6e] px-4 opacity-90">
                        Youth Center PKBI telah berkembang pesat di hampir seluruh wilayah Indonesia. Hingga saat ini, kami telah menjangkau:
                    </p>

                    {{-- BOX UTAMA: Dibuat Flex-Col untuk Mobile, Flex-Row untuk Desktop --}}
                    <div class="inline-flex flex-col md:flex-row items-center gap-4 md:gap-8 bg-white px-6 py-8 md:px-12 md:py-6 rounded-[2rem] md:rounded-[2.5rem] shadow-xl border-b-4 border-blue-900 hover:scale-[1.02] transition-transform duration-300 group w-full max-w-[90%] md:w-auto">

                        {{-- Icon Pin --}}
                        <div class="bg-red-50 p-4 rounded-2xl group-hover:bg-red-500 group-hover:text-white transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="md:w-10 md:h-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-500 group-hover:text-white transition-colors">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </div>

                        {{-- Text Content --}}
                        <div class="text-center md:text-left">
                            <p class="text-4xl md:text-6xl font-black italic tracking-tighter text-[#102a6e] leading-none">
                                17 PROVINSI
                            </p>
                            <p class="text-[9px] md:text-[11px] font-bold uppercase tracking-[0.2em] md:tracking-[0.3em] text-gray-400 mt-2">
                                Jangkauan Youth Center PKBI
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- --- SECTION 3: LAYANAN (3 BOX) --- --}}
        <section class="py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h3 class="text-3xl font-extrabold uppercase mb-4 text-[#102a6e]">Layanan Remaja</h3>
                    <div class="h-1.5 w-20 bg-blue-800 mx-auto rounded-full"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-card-gradient rounded-[2.5rem] p-10 text-white shadow-xl flex flex-col items-center text-center hover:-translate-y-3 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                        <div class="bg-white/20 p-5 rounded-3xl mb-6 shadow-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                                <path d="M3.22 12H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-extrabold uppercase mb-4">Layanan Kesehatan</h4>
                        <p class="text-xs font-semibold leading-relaxed opacity-80 uppercase tracking-wider">Akses layanan kesehatan reproduksi yang ramah dan rahasia bagi remaja.</p>
                    </div>
                    <div class="bg-card-gradient rounded-[2.5rem] p-10 text-white shadow-xl flex flex-col items-center text-center hover:-translate-y-3 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                        <div class="bg-white/20 p-5 rounded-3xl mb-6 shadow-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-extrabold uppercase mb-4">Pendidik Sebaya</h4>
                        <p class="text-xs font-semibold leading-relaxed opacity-80 uppercase tracking-wider">Belajar bersama melalui diskusi interaktif untuk membangun kesadaran HKSR.</p>
                    </div>
                    <div class="bg-card-gradient rounded-[2.5rem] p-10 text-white shadow-xl flex flex-col items-center text-center hover:-translate-y-3 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                        <div class="bg-white/20 p-5 rounded-3xl mb-6 shadow-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-extrabold uppercase mb-4">Minat Bakat</h4>
                        <p class="text-xs font-semibold leading-relaxed opacity-80 uppercase tracking-wider">Pengembangan potensi melalui berbagai kegiatan positif dan kreatif.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- --- CTA --- --}}
        <section class="py-20 bg-[#102a6e] text-center relative overflow-hidden">
            <div class="max-w-4xl mx-auto px-4 relative z-10" data-aos="zoom-in">
                <h3 class="text-2xl md:text-4xl font-extrabold text-white mb-10 uppercase italic">Ingin bergabung menjadi <br /> Relawan Remaja PKBI?</h3>
                <button @click="isPopupOpen = true" class="py-4 px-16 rounded-full font-extrabold text-xl shadow-2xl transition-transform hover:scale-105 active:scale-95 uppercase border-b-[4px] border-white/50 bg-peach-gradient text-[#102a6e]">HUBUNGI KAMI SEKARANG</button>
            </div>
        </section>

        {{-- --- MODAL (Update pada bagian Button) --- --}}
        <div x-show="isPopupOpen" x-transition.opacity.scale.origin.center class="fixed inset-0 z-[100] flex items-center justify-center bg-black/60 backdrop-blur-sm p-4" style="display: none;">
            <div @click.away="isPopupOpen = false" class="bg-white rounded-[2.5rem] shadow-2xl w-full max-w-sm overflow-hidden relative">
                <button @click="isPopupOpen = false" class="absolute top-4 right-4 bg-white/20 p-1.5 rounded-full hover:bg-white/40 transition-colors">
                    <i class="fas fa-times"></i>
                </button>
                <div class="bg-insta-gradient p-6 text-white text-center relative">
                    <button @click="isPopupOpen = false" class="absolute top-4 right-4 bg-white/20 p-1.5 rounded-full hover:bg-white/40 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                    <h3 class="text-xl font-bold mb-1 tracking-wide">Hubungi Kami</h3>
                    <p class="text-xs text-[#e1306c] opacity-90 font-medium uppercase tracking-wider">Youth Center PKBI</p>
                </div>

                <div class="p-8 flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-pink-50 text-[#e1306c] rounded-2xl flex items-center justify-center mb-5 shadow-sm ring-4 ring-pink-100/50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                        </svg>
                    </div>

                    <p class="text-[#102a6e]/80 font-medium text-[14px] mb-8 leading-relaxed">
                        Punya pertanyaan? Yuk, **Hubungi Kami** melalui Direct Message (DM) Instagram untuk respon cepat.
                    </p>

                    {{-- Button yang diperbarui tulisannya --}}
                    <a href="https://ig.me/m/youthcenter.kartini" target="_blank"
                        class="group w-full bg-insta-gradient py-4 px-6 rounded-2xl shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-3 active:scale-95"
                        style="background: linear-gradient(to right, #833ab4, #fd1d1d, #fcb045) !important;">

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m22 2-7 20-4-9-9-4Z" />
                            <path d="M22 2 11 13" />
                        </svg>

                        <span style="color: white !important; font-weight: 900 !important; display: inline-block !important; font-size: 14px !important; letter-spacing: 0.1em !important;">
                            HUBUNGI KAMI
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </main>

    @push('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
        });
    </script>
    @endpush
</x-guest-layout>