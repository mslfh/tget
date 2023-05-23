<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TaGET Services</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <!-- ========================= bootstrap icon here ========================= -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("css/animate.css")}}" />
    <link rel="stylesheet" href="{{asset("css/tiny-slider.css")}}" />
    <link rel="stylesheet" href="{{asset("css/index.css")}}" />
    <link rel="stylesheet" href="{{asset("css/login.css")}}" />
    <link rel="stylesheet" href="{{asset("css/registration.css")}}" />
    <link rel="stylesheet" href="{{asset("css/trading.css")}}" />
    <link rel="stylesheet" href="{{asset("css/dashboard.css")}}" />
    <link rel="stylesheet" href="{{asset("css/masterTrading.css")}}" />
    <link rel="stylesheet" href="{{asset("css/fonts.css")}}" />


    <!-- ========================= JS here ========================= -->
    <script src="{{asset("js/bootstrap.min.js")}}"></script>
    <script src="{{asset("js/jquery-3.6.4.min.js")}}"></script>
    <script src="{{asset("js/main.js")}}"></script>
    <script src="{{asset("js/tiny-slider.js")}}"></script>
    <script src="{{asset("js/count-up.min.js")}}"></script>

</head>

<body>

<div id="app">
    <!-- Start Header Area -->
    <header class="header navbar-area">
        <img id="header_img" style="position: absolute;" src="{{asset("assets/images/header.png")}}">
        <div class="container" style="max-width: 1500px">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">

                            <a class="navbar-brand" href={{route('home')}}>
                                <img src={{asset("assets/images/logo/logo.png")}} alt="Logo">
                            </a>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href={{route("home")}}  aria-label="Toggle">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href={{route('trading')}} class="trading" aria-label="Toggle navigation">Trading</a>
                                    </li>
                                    @if(isset($role_id))

                                    @if($role_id ==1 && $role_id !=0)
                                        <li class="nav-item">
                                            <a href={{route('masterTrading')}} class="trading" aria-label="Toggle navigation">Master of Trading</a>
                                        </li>
                                    @endif
                                    @if($role_id ==1 && $role_id !=0)
                                        <li class="nav-item">
                                            <a href={{route('dashboard')}} class="trading" aria-label="Toggle navigation">Dashboard</a>
                                        </li>
                                    @endif
                                    @if($role_id ==1 && $role_id !=0)
                                        <li class="nav-item">
                                            <a href={{route('manage')}} class="trading" aria-label="Toggle navigation">Manage</a>
                                        </li>
                                    @endif

                                    @endif
                                    <li class="nav-item">
                                        <a href={{route('profile')}} class="trading" aria-label="Toggle navigation">Profile</a>
                                    </li>
</ul>
</div>
<div class="button">
<input placeholder="Renewable energy type" class="search" id="search-input">
<button id="search-button" class="search-button" >Search</button>
</div>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Left Side Of Navbar -->
<ul class="navbar-nav me-auto">

</ul>

<!-- Right Side Of Navbar -->
<ul class="navbar-nav ms-auto">
<!-- Authentication Links -->
@guest
    @if (Route::has('login'))
        <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif

    @if (Route::has('register'))
        <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
@else
    <li class="nav-item dropdown">
        <a style="color: #c6ccdb; font-size: 20px;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();" style="padding: 0px 20px;color: #0000ff87;">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
@endguest
</ul>
</div>
</nav>
<!-- End Navbar -->
</div>
</div>
</div> <!-- row -->
</div> <!-- container -->
</header>
<!-- End Header Area -->

<main >
<div class="section" >
@yield('content')
</div>
</main>

</div>


<!-- Start Footer Area -->
<footer class="footer section">
<!-- Start Footer Top -->
<div class="footer-top">
<div class="container">
<div class="inner-content">
<div class="row">
<div class="col-lg-4 col-md-6 col-12">
<!-- Single Widget -->
<div class="single-footer f-about">
<div class="logo">
<a href="index.html">
<img src={{asset("assets/images/logo/bule-logo.png")}} alt="#">
</a>
</div>
<p>Making the world a better place through developing newable energy.</p>
</div>
<!-- End Single Widget -->
</div>
<div class="col-lg-2 col-md-6 col-12">
<!-- Single Widget -->
<div class="single-footer f-link">
<h3>Service</h3>
<ul>
<li><a href="">Market</a></li>
<li><a href="">History</a></li>
<li><a href="">Manage</a></li>
</ul>
</div>
<!-- End Single Widget -->
</div>
<div class="col-lg-2 col-md-6 col-12">
<!-- Single Widget -->
<div class="single-footer f-link">
<h3>Support</h3>
<ul>
<li><a href="">Pricing</a></li>
<li><a href="">Sell</a></li>
<li><a href="">Buy</a></li>
</ul>
</div>
<!-- End Single Widget -->
</div>
<div class="col-lg-4 col-md-6 col-12">
<!-- Single Widget -->
<div class="single-footer newsletter">
<h3>Subscribe</h3>
<p>Our platform provides a revolutionary solution to the growing demand for renewable energy and the
need to reduce carbon emissions</p>
<form action="#" method="get" target="_blank" class="newsletter-form">
<input name="EMAIL" placeholder="Email address" required="required" type="email">
<div class="button">
<button class="sub-btn"><image src={{asset("assets/icon/send.png")}}></image>
</button>
</div>
</form>
</div>
<!-- End Single Widget -->
</div>
</div>
</div>
</div>
</div>
<!--/ End Footer Top -->
<!-- Start Copyright Area -->
<div class="copyright-area">
<div class="container">
<div class="inner-content">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<p class="copyright-text">© 2023 TaGET - All Rights Reserved</p>
</div>
</div>
</div>
</div>
</div>
<!-- End Copyright Area -->
</footer>
<!--/ End Footer Area -->
</body>
<!-- End Header Area -->
