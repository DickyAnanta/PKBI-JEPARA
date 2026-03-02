<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat p-4 md:p-0"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/bg-klinik.png') }}');">

        <div class="w-full max-w-7xl flex flex-col md:flex-row bg-white rounded-[30px] md:rounded-[40px] shadow-2xl overflow-hidden min-h-[500px] md:min-h-[650px]">

            <div class="w-full md:w-1/2 p-10 sm:p-14 md:p-20 bg-[#00479b] flex flex-col justify-center">

                <div class="md:hidden flex justify-center mb-8">
                    <img src="{{ asset('images/bg-klinik.png') }}" alt="Logo PKBI" class="w-28 h-auto brightness-0 invert">
                </div>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-10 md:mb-16 text-center w-full tracking-wide">
                    Login disini ya!
                </h2>

                <form method="POST" action="{{ route('login') }}" class="space-y-6 md:space-y-10">
                    @csrf

                    <div class="relative">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="Username / Email"
                            class="w-full px-8 py-4 md:py-6 text-lg md:text-xl border-none rounded-full focus:ring-4 focus:ring-blue-300 shadow-inner text-gray-800 transition-all">
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-white font-semibold italic text-sm text-center" />
                    </div>

                    <div class="relative">
                        <input id="password" type="password" name="password" required
                            placeholder="Password"
                            class="w-full px-8 py-4 md:py-6 text-lg md:text-xl border-none rounded-full focus:ring-4 focus:ring-blue-300 shadow-inner text-gray-800 transition-all">
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-white font-semibold italic text-sm text-center" />
                    </div>

                    <div class="flex justify-center mt-10 md:mt-14">
                        <button type="submit" class="w-full md:w-auto px-16 md:px-24 py-4 md:py-6 text-xl md:text-2xl font-black text-[#00479b] bg-white rounded-full hover:bg-gray-100 transition-all active:scale-95 shadow-xl uppercase tracking-widest">
                            {{ __('LOGIN') }}
                        </button>
                    </div>
                </form>
            </div>

            <div class="hidden md:flex w-1/2 p-16 flex flex-col items-center justify-center bg-white text-center border-l border-gray-100">

                <img src="{{ asset('images/bg-klinik.png') }}" alt="PKBI Logo" class="w-64 mb-12 object-contain hover:scale-105 transition-transform duration-300">

                <div class="text-[#00479b] space-y-4">
                    <p class="text-2xl font-semibold uppercase tracking-widest">Klinik Pratama Wahana Sejahtera</p>

                    <h1 class="text-6xl lg:text-7xl font-black mb-4">PKBI JEPARA</h1>

                    <div class="h-1.5 w-24 bg-[#00479b] mx-auto rounded-full mb-6"></div>

                    <p class="text-2xl lg:text-3xl font-medium italic leading-relaxed px-6">
                        "Sahabat Menuju Keluarga Kecil Sehat Sejahtera"
                    </p>
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>