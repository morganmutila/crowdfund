<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>        
        <script src="{{ asset('js/manifest.js') }}" defer></script>
        <script src="{{ asset('js/vendor.js') }}" defer></script>
        <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];
            r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
        <style type="text/css">

            .js .custome-file-input {
                width: 0.1px;
                height: 0.1px;
                opacity: 0;
                overflow: hidden;
                position: absolute;
                z-index: -1;
            }

            .custome-file-input + label {
                text-overflow: ellipsis;
                white-space: nowrap;
                cursor: pointer;
                overflow: hidden;
                border: 4px dotted #83c5cd;
                color: #439ca7;
                background-color: #f0f8f9;
                opacity: .6;
            }

            .no-js .custome-file-input + label {
                display: none;
            }

            .custome-file-input:focus + label,
            .custome-file-input.has-focus + label,
            .custome-file-input + label:hover {
                outline: 0;
                outline: -webkit-focus-ring-color auto 0;
                opacity: 1;
                background-color: #f1f9f9;
            }

        </style>
    </head>
    <body class="font-sans antialiased bg-white">
        @include('layouts.navigation')

        <!-- Page Content -->
        {{-- <main class="container my-4"> --}}
            @yield('content')
        {{-- </main> --}}

        @include('layouts.footer')
    </body>
</html>
