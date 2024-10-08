<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400..700;1,400..700&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        * {
            font-family: 'Outfit'
        }

        .text-poppins {
            font-family: 'Poppins'
        }

        .full-height {
            height: 100vh;
        }

        .hijau {
            color: #438e96;
        }

        .bg-green-light {
            background-color: #bfe0e2;
        }

        .bg-green-medium {
            background-color: #92cace;
        }

        .bg-green-bold {
            background-color: #438e96
        }

        .text-primary {
            color: #006FD6;
        }

        .bg-primary {
            background-color: #006FD6;
        }
    </style>
</head>
<body class="bg-white">
    <div id="app">
     

        <main class="py-4 mt-5 bs-success-bg-subtle">
            @yield('content')
        </main>
    </div>
</body>
</html>
