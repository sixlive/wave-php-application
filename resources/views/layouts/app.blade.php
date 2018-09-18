<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Reading Log</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v1">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v1">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v1">
    <link rel="manifest" href="/site.webmanifest?v1">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5?v1">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-lightest h-screen antialiased">
    <div id="app">
        @if(session()->has('message'))
            <alert
               class="w-full fixed p-4 mb-2 {{ session()->get('message')->style }}"
                type="{{ session()->get('message')->type }}"
                message="{{ session()->get('message')->message }}"
                :flash="{{ session()->get('message')->flash }}"
            ></alert>
        @endif
        {{-- @include('layouts.navbar') --}}

        @yield('page-nav')

        <div class="max-w-xl m-auto bg-white p-4">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
