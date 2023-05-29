<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400&family=Odibee+Sans&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <title>DC Comics - @yield("pagetitle", "Default")</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include("partials.header")
    <main>
        @include("partials.jumbo")
        @yield("content")
        @include("partials.banner")
    </main>
    @include("partials.footer")
</body>

</html>