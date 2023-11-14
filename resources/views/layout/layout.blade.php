<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- icono --}}
    <link rel="icon" href="">
    <title>@yield('title', 'Portafolio')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('Partials.nav')
    {{-- esta resibe un parametro para diferenciar --}}
    @yield('content')
</body>
</html>
