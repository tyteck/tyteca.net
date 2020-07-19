<!--made with passion by fred-->
<!doctype html>

<html prefix="og: http://ogp.me/ns#" lang="{{ app()->getLocale() }}">

@include ('layout.head')

<body id="page-top">

    @yield('content')

    @include ('layout.footer')

</body>

</html>