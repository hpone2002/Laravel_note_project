<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- CSS into public folder --}}
    </head>
    <body class="font-sans antialiased">
        @session('message')
            <div class="success-message">
                {{ session('message') }}
            </div>
        @endsession
        @session('delete_message')
            <div class="delete-message">
                {{ session('delete_message') }}
            </div>
        @endsession
        {{ $slot }}
        {{-- special variable for view content --}}
    </body>
</html>
