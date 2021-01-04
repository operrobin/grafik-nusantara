<html>
<head>
    @yield('seo')
    <title>Grafis Nusantara</title>
    @yield('style')
    @include('layouts.style')
</head>

<body>
    @include('layouts.header')
    <div class="content-body">
        @yield('content')
    </div>
    @include('layouts.footer')
</body>


@include('layouts.scripts')
@yield('scripts')
</html>
