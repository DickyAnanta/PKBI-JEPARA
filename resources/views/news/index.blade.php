<x-guest-layout>
    <div class="max-w-[1100px] mx-auto px-6 py-12">
        {{-- Slider 1: Klinik --}}
        @include('components.berita-slider', [
        'title' => 'Berita Klinik',
        'berita' => $beritaKlinik,
        'cardPeach' => '#fdeae9'
        ])

        {{-- Slider 2: Youth Center --}}
        @include('components.berita-slider', [
        'title' => 'Berita Youth Center',
        'berita' => $beritaKartini,
        'cardPeach' => '#fdeae9'
        ])
    </div>
</x-guest-layout>