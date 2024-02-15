<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<div class="bg-base-100">
    <select class="select" data-choose-theme>
        <option disabled value="">
            Pick a theme
        </option>
        <option value="">Default</option>
        <option value="light">Light</option>
        <option value="retro">Retro</option>
        <option value="dracula">Dracula</option>
        <option value="cyberpunk">Cyberpunk</option>
    </select>
    <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>

</div>


@livewireScripts
</body>
</html>
