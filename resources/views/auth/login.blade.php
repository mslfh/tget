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
{{--test--}}
</head>
@extends('layouts.app')

@section('content')
    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="card">
{{--                        <div class="card-header">{{ __('Login') }}</div>--}}
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" id="LF" class="login-form">
                                @csrf

                                <div class=title>
                                    <h3>{{ __('Login') }}</h3>
                                    <p>Login by entering the information below.</p>
                                    <div class="text-danger" id="logErr"></div>
                                </div>
{{--                                Email--}}
                                <div class="form-group input-group">
{{--                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}
                                    <label><img src={{asset("assets/icon/email.png")}} height="25px" alt=""></label>
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="                          Enter your email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
{{--                                password--}}
                                <div class="form-group input-group">
{{--                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}
                                    <label><img src={{asset("assets/icon/password.png")}} height="25px" alt=""></label>
                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="                          Enter your password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap justify-content-between bottom-content">
                                        <div class="form-check">
                                            <label for="remember" class="hover-orange form-check-label">
                                            <input class="form-check-input checkBox width-auto" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
{{--                                            <label class="form-check-label" for="remember">--}}
                                                {{ __('Remember Me') }}
                                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                                @endif
                                            </span>
                                        </div>
                                </div>

                                <div class="button">
                                        <button type="submit" class="btn btn-primary" id="LG">
                                            {{ __('Login') }}
                                        </button>
                                </div>
                                <h4 class=create-account>Don't have an account? <a href={{ route('register') }}>Registration Here</a> </h4>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{{--<div class="account-login section">--}}
{{--    <div class=container>--}}
{{--        <div class=row>--}}
{{--            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">--}}
{{--                <form class="login-form" action="#" method='post' id="LF" >--}}
{{--                    <div >--}}
{{--                        <div class=title>--}}
{{--                            <h3>Login</h3>--}}
{{--                            <p>Login by entering the information below.</p>--}}
{{--                            <div class="text-danger" id="logErr"></div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group input-group">--}}
{{--                            <label><img src="../html/assets/icon/email.png" height="25px" alt=""></label>--}}
{{--                            <input class='form-control placeholder-color' type='email' placeholder="Enter your email" id="LE" required>--}}
{{--                        </div>--}}
{{--                        <div class="form-group input-group">--}}
{{--                            <label><img src="../html/assets/icon/password.png" height="25px" alt=""></label>--}}
{{--                            <input class='form-control placeholder-color' type='password' placeholder="Enter your password" id="LPW" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex flex-wrap justify-content-between bottom-content">--}}
{{--                        <div class=form-check>--}}
{{--                            <label for="LCK" class="hover-orange form-check-label">--}}
{{--                                <input type="checkbox" class="form-check-input checkBox width-auto" id="LCK">--}}
{{--                                <b>Remember me!</b>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <a class=lost-pass href='./reset.html'>Forgot password?</a> </div>--}}
{{--                    <div class='button'>--}}
{{--                        <button class='btn' id="LG" type='submit'>Login</button>--}}
{{--                    </div>--}}
{{--                    <h4 class=create-account>Don't have an account? <a href='./registration.html'>Registration Here</a> </h4>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@endsection
