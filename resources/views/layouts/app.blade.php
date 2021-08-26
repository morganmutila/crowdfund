<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>


        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>        
        <script src="{{ asset('js/manifest.js') }}" defer></script>
        <script src="{{ asset('js/vendor.js') }}" defer></script>
        <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];
            r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);
        </script>
    </head>
    <body class="font-sans antialiased bg-white">
        @includeUnless(request()->routeIs('home'), 'layouts.navigation')

        <!-- Page Content -->
        {{-- <main class="container my-4"> --}}
            @yield('content')
        {{-- </main> --}}

        @includeUnless(request()->routeIs('login'), 'layouts.footer')
    </body>
</html>
