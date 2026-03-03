<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKBI Jepara</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="images/bg-klinik.png">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif']
                    },
                    colors: {
                        blueText: '#102a6e',
                        blueDark: '#0b2359'
                    }
                }
            }
        }
    </script>

    <style>
        [x-cloak] {
            display: none !important;
        }

        .bg-peach-gradient {
            background: linear-gradient(to right, #ffafbd, #ffc3a0);
        }

        .bg-card-gradient {
            background: linear-gradient(to bottom, #1e3a8a, #4c6ef5);
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="min-h-screen bg-white font-sans text-blueText overflow-x-hidden" x-data="{ isPopupOpen: false, mobileMenu: false }">

    @if (!request()->routeIs('login') && !request()->routeIs('register'))
    <x-navigation />
    @endif

    {{-- Konten Utama --}}
    <main class="{{ (!request()->routeIs('login') && !request()->routeIs('register')) ? 'pt-[115px] md:pt-[112px]' : '' }}">
        {{ $slot }}
    </main>

    @if (!request()->routeIs('login') && !request()->routeIs('register'))
    <x-footer />
    <x-modal-konsultasi />
    @endif

</body>

</html>