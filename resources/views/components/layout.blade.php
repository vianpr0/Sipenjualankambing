@props(['title', 'category'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} " x-data="{ theme: localStorage.getItem('theme') || 'dark' }" :data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'RILIS ID - Lampung' }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main>
        <x-Navbar />
        <div class="W-full md:w-[70%] mx-auto">
            <x-categorycom />

            {{ $slot }}
            <x-footer />
    </main>
</body>

</html>
