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
    <link rel="stylesheet" href="{{asset("css/registration.css")}}" />

    <!-- ========================= JS here ========================= -->
    <script src="{{asset("js/jquery-3.6.4.min.js")}}"></script>
    <script src="{{asset("js/bootstrap.min.js")}}"></script>
    <script src="{{asset("js/main.js")}}"></script>
    <script src="{{asset("js/tiny-slider.js")}}"></script>
    <script src="{{asset("js/count-up.min.js")}}"></script>

    <style>
        input::placeholder {
            text-align: center;
        }
    </style>

    <script>
        $(document).ready(function() {

            $("#SB").click(function(e) {
                e.preventDefault();

                var username = $("#name").val().trim();
                var role = $("#role").val();
                var email = $("#email").val().trim();
                var password = $("#password").val().trim();
                var confirmPassword = $("#password-confirm").val().trim();
                var postalAddress = $("#postalAddress").val().trim();
                var zone = $("#zone").val();
                var acknowledge = $("#CKB").prop("checked");

                if (username.length < 1) {
                    $("#Err").text("Please enter your name.");
                    return;
                }

                if($('role').val() ==="Select an option"){
                    $("#Err").text("Please, choose buyer, seller or both!");
                    return;
                }

                if (!["seller", "buyer", "both"].includes(role)) {
                    $("#Err").text("Please, choose buyer, seller or both!");
                    return;
                }

                //check email
                var emailPattern = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
                if (!emailPattern.test(email)) {
                    $("#Err").text("The email address is incorrect.");
                    return;
                }

                //check password
                var passwordPattern = /^(?=.*[A-Z].*[A-Z])(?=.*\d)(?=.*[~`!@#$%^&*()_+-={}|\\:;"'<>,.?/])(?!.*\s).{5,10}$/;
                if (!passwordPattern.test(password)) {
                    $("#Err").text("Password include 5~10 characters in length, at least 2 uppercase letters, 1 number and one of special.");
                    return;
                }

                // double check the password
                if (confirmPassword !== password) {
                    $("#Err").text("The two password entries are inconsistent.");
                    return;
                }


                if (postalAddress === "") {
                    $("#Err").text("Please input your address detail.");
                    return;
                }

                if (!["A", "B", "C", "D", "E"].includes(zone)) {
                    $("#Err").text("Please select one option from A, B, C, D, or E.");
                    return;
                }

                if (!acknowledge) {
                    $("#Err").text("Please confirm that you have read and understand the terms and conditions");
                    return;
                }

                // all pass then submit
                $("#Err").text("");
                $(this).unbind("click").submit();
            });
        });

    </script>
</head>

@extends('layouts.app')

@section('content')
<div class="account-login section">
    <h3 style="text-align: center; color: #452bac;">{{ __('Register') }}</h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
                    <form class="card login-form inner-content" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="text-danger formMargin" id="Err"></div>
                        <div  class="card-body">
                            <div class="form-group input-group">
    {{--                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}
                                <label><image src={{asset("assets/icon/user.png")}} height="25px"></image></label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your name, please">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><image src={{asset("assets/icon/role.png")}} height="25px"></image></label>
                                <select class="form-select" value="" id="role">
                                    <option value="">Select an option</option>
                                    <option value="buyer">Buyer</option>
                                    <option value="seller">Seller</option>
                                    <option value="both">Both(Seller&Buyer)</option>
                                </select>
                            </div>
                            <div class="form-group input-group">
    {{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}
                                <label><image src={{asset("assets/icon/email.png")}} height="25px"></image></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group input-group">
                                <div class="form-group input-group">
                                    <label><image src={{asset("assets/icon/phone.png")}} height="25px"></image></label>
                                    <input class=form-control type='number' placeholder="Your phone" maxlength="10" required>
                                </div>
                            </div>
                            <div class="form-group input-group">
                                <label><image src={{asset("assets/icon/password.png")}} height="25px"></image></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group input-group">
    {{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}
                                <label><image src="./assets/icon/password.png" height="25px"></image></label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Double check your password">
                            </div>
                            <div class="form-group input-group">
                                <label><image src="./assets/icon/home.png" height="25px"></label>
                                <input class=form-control type='text' placeholder="Postal address" id="postalAddress" required>
                            </div>
                            <div class="form-group">
                                    <label><image src={{asset("assets/images/profile/location.png")}} height="25px"></image></label>
                                    <select class="form-select" value="" id="zone">
                                        <option value="">Select your zone</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="CKB" class="hover-orange">
                                    <input type="checkbox" class="form-check-input checkBox" id="CKB">
                                    <b>*I acknowledge that I have read and understand the terms and conditions.</b>
                                </label>
                            </div>

                            <div class="button">
                                <button type="submit" class="btn btn-primary" id="SB">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <h4 class='create-account'>Already have an account? <a href={{route('login')}}>Login</a></h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
