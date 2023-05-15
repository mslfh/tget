


<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <br><br><br>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

<!DOCTYPE html>
<html class="no-js" lang="zxx">


{{--<head>--}}
{{--    <meta charset="utf-8" />--}}
{{--    <meta http-equiv="x-ua-compatible" content="ie=edge" />--}}
{{--    <title>TaGET Services</title>--}}
{{--    <meta name="description" content="" />--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1" />--}}

{{--    <!-- ========================= CSS here ========================= -->--}}
{{--    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}" />--}}
{{--    <link rel="stylesheet" href="{{asset("css/animate.css")}}" />--}}
{{--    <link rel="stylesheet" href="{{asset("css/tiny-slider.css")}}" />--}}
{{--    <link rel="stylesheet" href="{{asset("css/index.css")}}" />--}}
{{--    <link rel="stylesheet" href="{{asset("css/login.css")}}" />--}}

{{--    <!-- ========================= JS here ========================= -->--}}
{{--    <script src="{{asset("js/jquery-3.6.4.min.js")}}"></script>--}}
{{--    <script src="{{asset("js/bootstrap.min.js")}}"></script>--}}
{{--    <script src="{{asset("js/main.js")}}"></script>--}}
{{--    <script src="{{asset("js/tiny-slider.js")}}"></script>--}}
{{--    <script src="{{asset("js/count-up.min.js")}}"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<x-guest-layout>--}}
{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}
{{--            <div class="account-login section">--}}
{{--                <div class=container>--}}
{{--                    <div class=row>--}}
{{--                        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">--}}
{{--                            <form class="card login-form inner-content" method=post>--}}
{{--                                <div class=card-body>--}}
{{--                                    <div class=title>--}}
{{--                                        <h3>Reset Password</h3>--}}
{{--                                        <p>Need to reset your password? No problem! Just enter your email & click the button--}}
{{--                                            below.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class=input-head>--}}
{{--                                        <div class="form-group input-group">--}}
{{--                                            <label><img src={{asset("assets/icon/email.png")}} height="25px" alt=""></label>--}}
{{--                                            <input class=form-control type=email id=reg-email placeholder="Enter your email" required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class=button style="margin-top: 20px;">--}}
{{--                                        <button class=btn type=submit>Send Rest Link</button>--}}
{{--                                    </div>--}}
{{--                                    <h4 class=create-account>Login to your account <a href={{route('login')}}>Click here</a> </h4>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}
{{--</body>--}}
