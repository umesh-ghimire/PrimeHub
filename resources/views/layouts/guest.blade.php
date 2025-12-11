<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PrimeHub') }} @yield('title')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gradient-to-br from-emerald-50 via-white to-teal-50 min-h-screen">

    <div class="min-h-screen flex flex-col items-center justify-center px-4 py-12">

        {{-- <!-- Logo -->
        <a href="/" class="mb-8">
            <div class="p-3 bg-white rounded-2xl shadow-lg ring-1 ring-black/5">
                <x-application-logo class="w-14 h-14 text-emerald-600" />
            </div>
        </a> --}}

        <!-- SMART CONTAINER THAT NEVER SHRINKS -->
        <div class="w-full max-w-4xl mx-auto">
            <div class="bg-white/70 backdrop-blur-2xl rounded-3xl shadow-2xl ring-1 ring-black/5 overflow-hidden">
                <div class="h-2 bg-gradient-to-r from-emerald-500 to-teal-600"></div>
                <div class="p-8 lg:p-12">
                    {{ $slot }}
                </div>
            </div>

            <!-- Footer -->
            <p class="mt-10 text-center text-xs text-gray-600">
                © {{ date('Y') }} <span class="font-bold text-emerald-700">PrimeHub</span>™ — The Future of Shopping<br>
                <span class="text-gray-500">Secure • Fast • Yours</span>
            </p>
        </div>

        <!-- Background blobs -->
        <div class="fixed inset-0 -z-10 pointer-events-none overflow-hidden">
            <div class="absolute top-0 -left-40 w-96 h-96 bg-emerald-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
            <div class="absolute top-40 -right-40 w-96 h-96 bg-teal-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
        </div>
    </div>

    <style>
        @keyframes blob { 0%,100% { transform: translate(0px, 0px) scale(1); } 33% { transform: translate(30px, -50px) scale(1.1); } 66% { transform: translate(-20px, 20px) scale(0.9); } }
        .animate-blob { animation: blob 20s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }
    </style>
</body>
</html>