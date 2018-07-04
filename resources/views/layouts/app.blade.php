<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name') }}</title>

        <!-- BEGIN HEADER -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('head')
        <!-- END HEADER -->
    </head>
    <body>
        <!-- BEGIN NAV -->
        @include('includes.nav')
        @yield('nav')
        <!-- END NAV -->

        <!-- BEGIN CONTENT -->
        @yield('content')
        <!-- END CONTENT -->

        <!-- BEGIN SCRIPTS -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('footer')
        <!-- END SCRIPTS -->
    </body>
</html>