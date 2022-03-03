<!DOCTYPE html>
<html lang="en">
    @include('layout/head')
    <title>@yield('title')</title>
    <body>
        @include('layout/header')
        @yield('content')
        @include('layout/footer')
    </body>
</html>
