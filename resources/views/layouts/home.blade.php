<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TaGET Services</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("css/animate.css")}}" />
    <link rel="stylesheet" href="{{asset("css/tiny-slider.css")}}" />
    <link rel="stylesheet" href="{{asset("css/index.css")}}" />
    <link rel="stylesheet" href="{{asset("css/login.css")}}" />

    <!-- ========================= JS here ========================= -->
    <script src="{{asset("js/jquery-3.6.4.min.js")}}"></script>
    <script src="{{asset("js/bootstrap.min.js")}}"></script>
    <script src="{{asset("js/main.js")}}"></script>
    <script src="{{asset("js/tiny-slider.js")}}"></script>
    <script src="{{asset("js/count-up.min.js")}}"></script>
</head>

<body>

<div id="app">
    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container" style="max-width: 1500px;">
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
        @yield('content')
    </main>

</div>


</body>

<!-- End Header Area -->
