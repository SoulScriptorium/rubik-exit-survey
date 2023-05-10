<!-- The only way to do great work is to love what you do. - Steve Jobs -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tracer Study') }}</title>

    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Student of Ma Chung University" name="author" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

    {{ $slot }}

    @livewireScripts
</body>
