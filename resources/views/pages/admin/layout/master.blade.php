<!DOCTYPE html>
<html lang="en">
    @include('pages/admin/layout/head')
    <body>
        <div id="wrapper">
            @include('pages/admin/layout/top_and_left')
            @yield('content')
            @yield('script')
        </div>
        @include('pages/admin/layout/footer')
    </body>
</html>
