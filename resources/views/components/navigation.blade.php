<div class="fixed top-0 left-0 w-full z-[100]" x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)">
    {{-- TOPBAR --}}
    <div class="bg-[#102a6e] text-white text-[10px] md:text-xs py-2 px-4 md:px-12 flex relative z-50">
        <div class="max-w-7xl mx-auto flex justify-between md:justify-start gap-4 md:gap-8 w-full">
            <div class="flex items-center gap-2">
                <i class="fas fa-phone"></i>
                <span class="whitespace-nowrap">+62 82289985675</span>
            </div>
            <div class="flex items-center gap-2">
                <i class="fas fa-envelope"></i>
                {{-- EMAIL SEKARANG MUNCUL DI SEMUA LAYAR --}}
                <span class="inline-block tracking-tighter sm:tracking-normal">pkbijepara12@gmail.com</span>
            </div>
        </div>
    </div>

    {{-- NAVBAR --}}
    <nav :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-md py-3' : 'bg-gradient-to-r from-[#ffe4e6] via-white to-white py-4 shadow-sm'"
        class="px-4 md:px-12 transition-all duration-300 relative">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-center">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="transition-transform hover:scale-105 duration-300">
                    <img src="{{ asset('images/logo-pkbi.png') }}" alt="Logo PKBI" class="h-9 md:h-12 w-auto object-contain">
                </a>

                {{-- Menu Desktop --}}
                <div class="hidden md:flex gap-6 text-sm font-semibold uppercase tracking-tight items-center">
                    @php
                    $navLinks = [
                    'home' => 'Beranda',
                    'berita.index' => 'Berita',
                    'layanan.publik' => 'Layanan',
                    'youth-center' => 'Youth Center',
                    'about' => 'Tentang Kami',
                    ];
                    @endphp

                    @foreach($navLinks as $routeName => $label)
                    @php
                    // Logika pengecekan aktif yang lebih kuat
                    $isActive = request()->routeIs($routeName) || request()->routeIs($routeName . '.*');
                    @endphp
                    <a href="{{ Route::has($routeName) ? route($routeName) : $routeName }}"
                        class="relative group {{ $isActive ? 'text-red-500 font-bold' : 'text-[#102a6e] hover:text-red-500 transition-colors' }}">
                        {{ $label }}
                        <span class="absolute left-0 -bottom-1 h-[2px] bg-red-500 {{ $isActive ? 'w-full' : 'w-0' }} group-hover:w-full transition-all duration-300"></span>
                    </a>
                    @endforeach
                </div>

                {{-- Tombol Mobile --}}
                <button class="md:hidden text-[#102a6e] p-2" @click="mobileMenu = !mobileMenu">
                    <i class="fas transition-transform duration-300" :class="mobileMenu ? 'fa-times rotate-90' : 'fa-bars'" style="font-size: 24px;"></i>
                </button>
            </div>

            {{-- Mobile Menu --}}
            <div x-show="mobileMenu"
                x-cloak
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-10"
                @click.away="mobileMenu = false"
                class="md:hidden absolute top-full left-0 w-full bg-white shadow-xl flex flex-col items-center py-6 gap-2 font-bold text-sm uppercase border-t border-slate-100">

                @foreach($navLinks as $routeName => $label)
                @php
                $isActiveMobile = request()->routeIs($routeName) || request()->routeIs($routeName . '.*');
                @endphp
                <a href="{{ Route::has($routeName) ? route($routeName) : $routeName }}"
                    class="w-full text-center py-3 transition-colors {{ $isActiveMobile ? 'text-red-500 bg-red-50' : 'text-[#102a6e] hover:text-red-500 hover:bg-slate-50' }}">
                    {{ $label }}
                </a>
                @endforeach

                {{-- Tombol aksi tambahan --}}
                <div class="pt-4 border-t w-[80%] flex justify-center">
                    <a href="https://wa.me/6282289985675" class="bg-[#102a6e] text-white px-8 py-3 rounded-full text-xs text-center w-full shadow-lg active:scale-95 transition-all">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </nav>
</div>