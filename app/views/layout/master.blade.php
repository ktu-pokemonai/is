<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dormitory</title>

@include('layout.partial.styles')
@include('layout.partial.scripts')
@yield('head')
</head>
<body>
    @include('layout.partial.navbar')

    <div class="container">
        @yield('header')

        @section('messages')
            @include('layout.messages')
        @show

        @yield('content')
    </div>

    @include('layout.partial.footer')

</body>
</html>