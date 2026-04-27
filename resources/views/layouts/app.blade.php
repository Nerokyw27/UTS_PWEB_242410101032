<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') — Nero Gaming Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/nero.css') }}">
    @yield('head')
</head>
<body class="mg-page">

    {{--NAVBAR COMPONENT--}}
    <x-navbar :username="$username ?? 'Admin'" />

    {{--MAIN CONTENT--}}
    <main>
        @yield('content')
    </main>

    {{--FOOTER COMPONENT--}}
    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
