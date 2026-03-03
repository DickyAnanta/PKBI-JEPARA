<div class="mb-20" x-data="{ 
    scroll(direction) {
        const container = this.$refs.slider;
        const scrollAmount = direction === 'left' ? -350 : 350;
        container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
}">
    {{-- Header --}}
    <div class="w-full border-b-[2px] border-purple-500 pb-2 mb-10 flex justify-between items-end gap-4">
        <h2 class="text-blue-600 font-bold text-2xl italic tracking-wide">
            {{ $title ?? 'Berita Terkait' }}
        </h2>

        @if(isset($berita) && count($berita) > 0)
        <div class="flex gap-2 mb-1">
            <button @click="scroll('left')" class="p-2 rounded-full bg-purple-100 text-purple-700 hover:bg-purple-200 shadow-sm transition-all">
                <i class="fas fa-chevron-left text-sm"></i>
            </button>
            <button @click="scroll('right')" class="p-2 rounded-full bg-purple-100 text-purple-700 hover:bg-purple-200 shadow-sm transition-all">
                <i class="fas fa-chevron-right text-sm"></i>
            </button>
        </div>
        @endif
    </div>

    {{-- Slider Body --}}
    @if(isset($berita) && count($berita) > 0)
    <div x-ref="slider" class="flex overflow-x-auto snap-x snap-mandatory gap-5 pb-8 hide-scroll cursor-grab active:cursor-grabbing">
        @foreach($berita as $item)
        <a href="{{ url('/berita/' . $item->id) }}" class="block flex-none w-[65%] sm:w-[calc(50%-10px)] md:w-[calc(33.333%-14px)] lg:w-[calc(25%-15px)] snap-start group h-auto">

            {{-- Card Portrait (Style Gambar 2) --}}
            <div class="p-3 md:p-3.5 rounded-[1.5rem] shadow-sm hover:shadow-md transition-all duration-300 flex flex-col h-full" style="background-color: {{ $cardPeach }}">

                {{-- Rasio Gambar 4:5 (Penting untuk tampilan portrait) --}}
                <div class="relative w-full aspect-[4/5] rounded-[1.25rem] overflow-hidden mb-3">
                    <img src="{{ asset('uploads/news/' . ($item->gambar ?? $item->image)) }}"
                        alt="{{ $item->judul ?? $item->title }}"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>

                <div class="px-1 pb-1">
                    <p class="text-[#334155] text-xs font-medium leading-relaxed line-clamp-3">
                        {{ $item->judul ?? $item->title }}
                    </p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    @else
    <div class="w-full py-10 text-center border-2 border-dashed border-gray-100 rounded-3xl">
        <p class="text-gray-400 italic font-medium">Belum ada berita tersedia.</p>
    </div>
    @endif
</div>