@extends('layouts.app')

@section('content')
<div class="container section">
    <div class="row justify-content-center container">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
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
