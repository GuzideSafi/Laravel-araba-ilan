<!DOCTYPE html>
<html lang="en">
<head>

    <title>@yield('title')</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="guzide">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @yield('css')
    @yield('headerjs')
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<!-- PRE LOADER -->
@include('home._menu')

<section class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>

    </div>
</section>


@section('content')
    içerik alanı
@show

@include('home._footer')
@yield('footerjs')

</body>
</html>
