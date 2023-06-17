<!-- The only way to do great work is to love what you do. - Steve Jobs -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tracer Study') }} || Ma Chung University</title>

    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Student of Ma Chung University" name="author" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles

</head>
<body>
    <div class="min-h-screen">
        <div wire:loading class="fixed top-0 left-0 right-0 bottom-0 w-full h-screen z-50 overflow-hidden bg-gray-700 opacity-75 flex flex-col items-center justify-center">
            <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-200 h-12 w-12 mb-4"></div>
            <h2 class="text-center text-white text-xl font-semibold">Loading...</h2>
            <p class="w-1/3 text-center text-white">This may take a few seconds, please don't close this page.</p>
        </div>

        <main>
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
