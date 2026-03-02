<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PKBI Jepara Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-white flex h-screen overflow-hidden font-sans" x-data="{ sidebarOpen: false }">

    <x-sidebar />

    <main class="flex-1 overflow-y-auto bg-white relative">
        {{ $slot }}
    </main>

    <div x-show="sidebarOpen"
        @click="sidebarOpen = false"
        class="fixed inset-0 bg-black/50 z-30 md:hidden"
        x-transition.opacity>
    </div>
</body>

</html>