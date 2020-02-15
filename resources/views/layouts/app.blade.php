<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accelerate</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/tailwind.css">
        <link rel="stylesheet" href="https://use.typekit.net/ldj6unm.css">
        @yield('head')
    </head>
    <body>
        <!-- Render the default header unless specified otherwise -->
        @section('header')
            @include('layouts.header')
        @show

        <!-- Render the page content -->
        @yield('content')

        <!-- Render the default footer unless specified otherwise -->
        @section('footer')
            @include('layouts.footer')
        @show

    </body>
    <script src="https://kit.fontawesome.com/b39fed3245.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
    @yield('scripts')
</html>