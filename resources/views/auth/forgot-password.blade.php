@extends('layouts.app')

@section('content')


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
            <div class="account-login section">
                <div class=container>
                    <div class=row>
                        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                            <form class="card login-form inner-content" method=post>
                                <div class=card-body>
                                    <div class=title>
                                        <h3>Reset Password</h3>
                                        <p>Need to reset your password? No problem! Just enter your email & click the button
                                            below.</p>
                                    </div>
                                    <div class=input-head>
                                        <div class="form-group input-group">
                                            <label><img src={{asset("assets/icon/email.png")}} height="25px" alt=""></label>
                                            <input class=form-control type=email id=reg-email placeholder="Enter your email" required>
                                        </div>
                                    </div>
                                    <div class=button style="margin-top: 20px;">
                                        <button class=btn type=submit>Send Rest Link</button>
                                    </div>
                                    <h4 class=create-account>Login to your account <a href={{route('login')}}>Click here</a> </h4>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
