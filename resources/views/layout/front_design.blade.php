<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Feng Shui Help Me"
        content="Feng Shui Help Me is the place where you can find your remedy for health, prosperity, love and fortune. We also have training courses and consultations.">

    <title>Feng Shui Help Me</title>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    @include('layout.navbar')

    @yield('content')

    @include('layout.footer')

    <!-- Javascript -->
    <script src="{{ asset('js/side-nav.js') }}"></script>
</body>

</html>