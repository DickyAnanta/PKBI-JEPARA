<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin PKBI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 flex font-sans">
    <aside class="w-64 bg-[#00479b] min-h-screen text-white p-6 shadow-xl shrink-0">
        <div class="mb-10 text-center border-b border-blue-400 pb-4 uppercase tracking-widest font-bold">
            PKBI JEPARA
        </div>

        <nav class="space-y-4">
            <a href="{{ route('dashboard') }}" class="block text-center py-2 px-4 rounded-full font-bold {{ request()->routeIs('dashboard') ? 'bg-white text-[#00479b]' : 'hover:bg-blue-700' }}">DASHBOARD</a>
            <a href="{{ route('services.index') }}" class="block text-center py-2 px-4 rounded-full font-bold {{ request()->routeIs('services.*') ? 'bg-white text-[#00479b]' : 'hover:bg-blue-700' }}">LAYANAN</a>

            <div class="bg-white rounded-2xl overflow-hidden text-[#00479b]">
                <div class="py-2 text-center font-bold border-b italic uppercase text-sm">Berita</div>
                <a href="{{ route('news.index') }}" class="block py-2 text-center hover:bg-gray-100 font-semibold border-b">DAFTAR BERITA</a>
                <a href="{{ route('news.create') }}" class="block py-2 text-center hover:bg-gray-100 font-semibold">TAMBAH BARU</a>
            </div>

            <form method="POST" action="{{ route('logout') }}" class="pt-10">
                @csrf
                <button type="submit" class="w-full bg-white text-red-600 rounded-full py-2 font-bold hover:bg-red-50 transition">LOGOUT</button>
            </form>
        </nav>
    </aside>

    <main class="flex-1 p-10 overflow-y-auto">
        @yield('content')
    </main>
</body>

</html>