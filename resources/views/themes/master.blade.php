
<!doctype html>
<html lang="en">

@include('themes.subviews.head')

<body>

    @include('themes.subviews.nav')

    @include('themes.subviews.hero')

    {{-- --------main contant-------- --}}
    @yield('contant')


    @include('themes.subviews.footer')

    @include('themes.subviews.scripts')


</body>

</html>
