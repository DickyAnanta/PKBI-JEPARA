@props(['title'])

<div class="relative flex items-center justify-between border-b-4 border-[#00479b] px-6 py-4 md:px-8 md:py-6 mb-10 bg-white sticky top-0 z-20 min-h-[70px] md:min-h-fit">

    <div class="flex items-center gap-4 z-10">
        <button @click="sidebarOpen = true" x-show="!sidebarOpen" class="md:hidden text-[#00479b] text-2xl focus:outline-none">
            <i class="fas fa-bars"></i>
        </button>

        <h1 class="text-[#00479b] hidden md:block text-3xl font-[900] italic uppercase tracking-tighter leading-none">
            {{ $title }}
        </h1>
    </div>

    <div x-show="!sidebarOpen"
        x-transition.opacity
        class="md:hidden absolute inset-0 flex items-start justify-center pt-2 pointer-events-none z-0">
        <img src="{{ asset('images/logo-pkbi.png') }}"
            alt="Logo"
            class="h-10 w-auto object-contain">
    </div>

    <div class="flex items-center gap-3 md:gap-4 z-10">
        <div class="text-right hidden sm:block">
            <p class="text-[9px] font-[900] text-[#00479b] uppercase italic leading-none mb-1">Logged In As</p>
            <p class="text-xs font-bold text-gray-500 uppercase tracking-wider">{{ Auth::user()->name }}</p>
        </div>

        <div class="w-10 h-10 md:w-12 md:h-12 bg-[#00479b] rounded-full flex items-center justify-center text-white text-lg md:text-xl font-black shadow-lg">
            {{ substr(Auth::user()->name, 0, 1) }}
        </div>
    </div>
</div>

<div class="md:hidden px-6 -mt-6 mb-8">
    <h2 class="text-[#00479b] text-xl font-[900] italic uppercase tracking-tighter border-l-4 border-[#00479b] pl-3">
        {{ $title }}
    </h2>
</div>