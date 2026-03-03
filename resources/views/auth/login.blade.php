<x-guest-layout>
    {{-- Container Background tetap Full Screen --}}
    <div class="min-h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat p-4 sm:p-6"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/Bangunan.png') }}');">

        {{-- Parent Card: Default BG Biru (untuk mobile), Desktop tetap bisa beda warna --}}
        <div class="w-full max-w-4xl flex flex-col md:flex-row bg-[#00479b] rounded-[30px] md:rounded-[40px] shadow-2xl overflow-hidden min-h-[450px] md:min-h-[550px]">

            {{-- Sisi Kiri (Form) - Selalu Biru --}}
            <div class="w-full md:w-1/2 p-8 sm:p-12 md:p-14 flex flex-col justify-center bg-[#00479b]">

                {{-- Logo Mobile: Muncul saat responsive --}}
                <div class="md:hidden flex justify-center mb-6">
                    <img src="{{ asset('images/bg-klinik.png') }}" alt="Logo PKBI" class="w-20 h-auto brightness-0 invert">
                </div>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-8 md:mb-12 text-center w-full tracking-wide italic">
                    Login disini ya!
                </h2>

                <form method="POST" action="{{ route('login') }}" class="space-y-5 md:space-y-7">
                    @csrf

                    <div class="relative">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="Username / Email"
                            class="w-full px-6 py-3 md:py-4 text-base md:text-lg border-none rounded-full focus:ring-4 focus:ring-blue-300 shadow-inner text-gray-800 transition-all">
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-white font-semibold italic text-xs text-center" />
                    </div>

                    <div class="relative">
                        <input id="password" type="password" name="password" required
                            placeholder="Password"
                            class="w-full px-6 py-3 md:py-4 text-base md:text-lg border-none rounded-full focus:ring-4 focus:ring-blue-300 shadow-inner text-gray-800 transition-all">
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-white font-semibold italic text-xs text-center" />
                    </div>

                    <div class="flex justify-center mt-6 md:mt-10">
                        <button type="submit" class="w-full md:w-auto px-12 md:px-16 py-3 md:py-4 text-lg md:text-xl font-black text-[#00479b] bg-white rounded-full hover:bg-gray-100 transition-all active:scale-95 shadow-xl uppercase tracking-widest">
                            {{ __('LOGIN') }}
                        </button>
                    </div>
                </form>
            </div>

            {{-- Sisi Kanan (Branding) --}}
            {{-- md:bg-white membuat sisi ini jadi putih hanya di desktop. Di mobile div ini tersembunyi (hidden) --}}
            <div class="hidden md:flex w-1/2 p-10 flex flex-col items-center justify-center bg-white text-center border-l border-gray-100">

                <img src="{{ asset('images/bg-klinik.png') }}" alt="PKBI Logo" class="w-48 mb-8 object-contain hover:scale-105 transition-transform duration-300">

                <div class="text-[#00479b] space-y-3">
                    <p class="text-lg font-semibold uppercase tracking-widest leading-tight">
                        Klinik Pratama Wahana Sejahtera PKBI Jepara
                    </p>
                    <div class="h-1 w-16 bg-[#00479b] mx-auto rounded-full mt-4"></div>
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>