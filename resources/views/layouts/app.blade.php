<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <script>(function (html) { html.className = html.className.replace(/\bno-js\b/, 'js') })(document.documentElement)</script>
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link rel="dns-prefetch" href="//s.w.org">
        <link rel="icon" href="favicons/favicon.png" type="image/x-icon">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla:400,700i,700|Poppins:700">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}" type="text/css" media="all">
        <script src="https://kit.fontawesome.com/9bf03c26a7.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all">
        <link rel="stylesheet" href="{{ asset('assets/css/style-custom.css') }}" type="text/css" media="all">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="home border-dark" style="border-width: 7px">

        <div class="site" id="page">

           <!-- Page Heading -->
           @include('partials.header')

            <!-- Page Content -->
            @yield('content')

            <!-- Page Footer -->
            @include('partials.footer')

            <!-- Page Footer -->
            @include('partials.sidenav')
        </div>

        @stack('modals')

        @livewireScripts

        <script type="application/javascript" src="{{ asset('assets/js/lib.js') }}"></script>
        <script defer async type="application/javascript" src="{{ asset('assets/js/app.js') }}"></script>
    </body>
</html>
