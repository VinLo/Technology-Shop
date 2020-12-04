<!DOCTYPE html>
<html lang="zxx">

<head>
    {{-- @include('frontend.widgets.head') --}}
</head>

<body>
    @include('frontend.widgets.top')

	<!-- //top-header -->

    @include('frontend.widgets.header')




	<!-- //header-bottom -->
    @include('frontend.widgets.menu')




    @yield('content')
    @include('frontend.widgets.banner')
    @include('frontend.widgets.footer')

    @include('frontend.widgets.js')
</body>

</html>
