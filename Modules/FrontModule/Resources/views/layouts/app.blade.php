<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/FontAwesome/all.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/FontAwesome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/animate.css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/owl.carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/owl.carousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/venobox/venobox.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">

    <!--============== remove comment for (ltr) ================-->
    <!-- <link rel="stylesheet" href="{{ asset('front/assets/css/style-ar.css') }}"> -->
</head>
<body>
    @include('frontmodule::layouts.nav_bar.nav')
    @yield('content')
    @include('frontmodule::layouts.footer.main-footer')
    @include('frontmodule::layouts.scripts.index')
</body>
</html>