<aside
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
    class="fixed inset-y-0 left-0 z-40 w-64 bg-[#00479b] text-white flex flex-col p-6 shrink-0 transition-transform duration-300 ease-in-out md:static md:translate-x-0 shadow-2xl md:shadow-none">

    {{-- Header Sidebar khusus Mobile (Tombol Close) --}}
    <div class="md:hidden flex justify-end mb-4">
        <button @click="sidebarOpen = false" class="text-white p-2 hover:bg-white/10 rounded-full transition-colors">
            <i class="fas fa-times text-2xl"></i>
        </button>
    </div>

    {{-- Logo --}}
    <div class="mb-10 mt-2 text-center">
        <img src="{{ asset('images/logo-pkbi.png') }}"
            alt="PKBI"
            class="w-44 brightness-0 invert mx-auto">
    </div>

    {{-- Navigasi --}}
    <nav class="flex-1 space-y-4 overflow-y-auto px-2 custom-scrollbar">

        {{-- Dashboard --}}
        <a href="{{ route('dashboard') }}"
            class="block py-2.5 rounded-full uppercase tracking-wider text-xs font-black text-center transition duration-300 border-2
            {{ request()->routeIs('dashboard') ? 'bg-white/20 border-white text-white shadow-inner' : 'bg-white border-transparent text-[#00479b] hover:bg-gray-100' }}">
            Dashboard
        </a>

        {{-- Layanan --}}
        <a href="{{ route('layanan.index') }}"
            class="block py-2.5 rounded-full uppercase tracking-wider text-xs font-black text-center transition duration-300 border-2
            {{ request()->routeIs('layanan.*') ? 'bg-white/20 border-white text-white shadow-inner' : 'bg-white border-transparent text-[#00479b] hover:bg-gray-100' }}">
            Layanan
        </a>

        {{-- Dropdown Berita (Revisi Rute Admin) --}}
        <div x-data="{ open: {{ request()->routeIs('admin.berita.*') ? 'true' : 'false' }} }">
            <button @click="open = !open"
                class="w-full py-2.5 rounded-full uppercase tracking-wider text-xs font-black flex items-center justify-center gap-2 transition border-2
                {{ request()->routeIs('admin.berita.*') ? 'bg-white/20 border-white text-white' : 'bg-white border-transparent text-[#00479b]' }}">
                Berita <i class="fas fa-chevron-down text-[10px] transition-transform" :class="open ? 'rotate-180' : ''"></i>
            </button>

            <div x-show="open"
                x-cloak
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                class="mt-2 space-y-1 bg-[#003d82] rounded-2xl p-1">

                <a href="{{ route('admin.berita.klinik') }}"
                    class="block py-2 font-black text-center uppercase text-[10px] rounded-xl transition
                    {{ request()->routeIs('admin.berita.klinik') ? 'bg-white/30 text-white' : 'text-white hover:bg-blue-500' }}">
                    Klinik
                </a>

                <a href="{{ route('admin.berita.kartini') }}"
                    class="block py-2 font-black text-center uppercase text-[10px] rounded-xl transition
                    {{ request()->routeIs('admin.berita.kartini') ? 'bg-white/30 text-white' : 'text-white hover:bg-blue-500' }}">
                    Kartini
                </a>
            </div>
        </div>
    </nav>

    {{-- Logout --}}
    <div class="mt-auto pt-6 px-2">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full bg-white text-[#00479b] font-black py-2.5 rounded-full uppercase text-xs flex items-center justify-center gap-2 hover:bg-red-50 hover:text-red-600 transition shadow-lg">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </div>
</aside>