@props(['title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'RILIS ID - Lampung' }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        <main>
            <x-Navbar />
            <div class="W-[90%] md:w-[70%] mx-auto">
            <x-tagnews/>
            {{$slot}}
            <x-footer />
        </main>
    </body>
</html>
