<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quest Hub</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-#F8EDD6">
        {{-- 
        Place of first nav and hamburger menu #TODO
        --}}


        {{-- Place of option bar and hamburger menu #TODO --}}
        
    <div class="m-5 min-h[90vh] flex">
        <div class="min-w-full">
            @yield('MainContent')
        </div>
    </div>

    {{-- Place of footer and hamburger footer #TODO--}}
</body>
</html>