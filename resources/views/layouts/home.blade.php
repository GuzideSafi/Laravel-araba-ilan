<!DOCTYPE html>
<html lang="en">

<head>
    <title>Araba İlanı Sitesi</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    @yield('css')
    @yield('headerjs')
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</section>

@include('home._header')




@section('content')
@show

@include('home._footer')
@yield('footerjs')
</body>
</html>
