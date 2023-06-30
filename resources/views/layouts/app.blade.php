<!DOCTYPE html>
<html>
    <head><title>@yield('title')</title></head>
    <body>
        @section('navbar')
        @show

        @yield('content')

        @section('footer')
        <p>Footer</p>
        @show
    </body>
</html>