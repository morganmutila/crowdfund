<!DOCTYPE html>
<html lang="en" @if(request()->routeIs('projects.create')) class="js" @endif>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>


        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        @if(request()->routeIs('projects.create'))
            <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];
                r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);
            </script>
        @endif    
    </head>
    <body class="{{ $bgColor }}">
        @includeUnless(request()->routeIs(['login', 'signup', 'password.request', 'home']), 'layouts.navigation')

        <!-- Page Content -->
            {{ $slot }}

        @includeUnless(request()->routeIs(['login', 'signup', 'password.request']), 'layouts.footer')
    </body>
</html>
