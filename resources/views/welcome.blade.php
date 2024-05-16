
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css','resources/js/app.js'])

        <!-- Styles -->
    </head>
    <body>
       <div class="">
        <x-Navbar />
        <x-breakingnews/>
        <x-headnews/>
        <x-newnews />
        <x-footer />
       </div>
    </body>
</html>
