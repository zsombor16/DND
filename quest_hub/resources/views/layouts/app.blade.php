<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

        
        <!-- Scripts -->
        <link rel="stylesheet" href="resources/css/app.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#f8edd6]">
        
            @include('layouts.navigation')
            <!-- Page Heading -->
            @isset($header)
                <header class="">
                    <div class="">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <div class="m-5 min-h-[90vh] flex items-center">
                <div class="min-w-full text-center">
                    @yield('MainContent')
                </div>
            </div>
        
    </body>
    <footer>
        @include('layouts.footer')
            <!-- Page Heading -->
            @isset($footer)
                <header class="">
                    <div class="">
                        {{ $footer }}
                    </div>
                </header>
            @endisset
    </footer>
</html>
