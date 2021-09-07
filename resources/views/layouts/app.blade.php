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
        <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];
            r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document, window, 0);
        </script>
    </head>
    <body>
        @includeUnless(request()->routeIs(['home', 'password.reset', 'password.request']), 'layouts.navigation')

        <!-- Page Content -->
            @yield('content')

        @includeUnless(request()->routeIs(['login', 'signup', 'password.reset', 'password.request']), 'layouts.footer')
    </body>
</html>
