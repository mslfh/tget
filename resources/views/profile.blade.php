@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}" />
    <!-- ========================= JS here ========================= -->
    <script src="{{asset("js/jquery-3.6.4.min.js")}}"></script>
    <script src="{{asset("js/bootstrap.min.js")}}"></script>
    <style>
        .account-style {
            background-color: #f4f7fa
        }

        .account-style .login-form {
            padding: 60px 70px;
            background-color: #fff;
            border: none
        }


        .account-style .login-form .card-body {
            padding: 0
        }

        .account-style .bottom-content {
            margin-top: 25px
        }

        .account-style .form-group {
            margin-bottom: 20px;
            position: relative
        }

        .account-style .form-group label {
            position: absolute;
            left: 20px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            z-index: 9
        }

        .account-style .form-group .form-control {
            padding: 0 18px;
            -webkit-transition: all .4s ease;
            transition: all .4s ease;
            border: 1px solid #eee;
            background-color: #f4f7fa;
            color: #505050;
            font-size: 15px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            height: 52px;
            border-radius: 30px !important;
            overflow: hidden;
            width: 100%;
            padding-left: 55px
        }

        .account-style .form-select{
            padding: 0 18px;
            -webkit-transition: all .4s ease;
            transition: all .4s ease;
            border: 1px solid #eee;
            background-color: #f4f7fa;
            color: #505050;
            font-size: 15px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            height: 52px;
            border-radius: 30px !important;
            overflow: hidden;
            width: 100%;
            padding-left: 55px
        }

        .account-style .form-group .form-control:focus {
            border-color: #3e80ff;
            -webkit-box-shadow: 0 5px 8px rgba(0, 0, 0, .233);
            box-shadow: 0 5px 8px rgba(0, 0, 0, .233)
        }

        .account-style .lost-pass {
            color: #888
        }

        .account-style .lost-pass:hover {
            color: #3e80ff
        }

        .account-style .button {
            margin-top: 40px;
            text-align: center
        }

        .account-style .button .btn {
            padding: 14px 40px;
            margin-right: 20px;
            width: 100%
        }

        .account-style .button .btn:last-child {
            margin: 0
        }

        .account-style .or {
            position: relative;
            text-align: center;
            margin: 30px 0;
            z-index: 0
        }

        .account-style .or span {
            text-align: center;
            font-size: 16px;
            background-color: #fff;
            padding: 5px 12px
        }

        .account-style .or::before {
            position: absolute;
            content: "";
            left: 0;
            top: 50%;
            margin-top: -1px;
            background-color: #e8e8e8;
            height: 1px;
            width: 100%;
            z-index: -1
        }

        .account-style .alt-option {
            margin-top: 30px;
            text-align: center
        }

        .account-style .alt-option .small-title {
            margin-bottom: 15px;
            text-align: center;
            display: block
        }

        .account-style .alt-option .option-button {
            padding: 14px 25px 14px 15px;
            border: 1px solid #eee;
            border-radius: 30px;
            display: inline-block;
            text-align: center;
            color: #727272
        }

        .account-style .alt-option .option-button img {
            display: inline-block;
            margin-right: 15px
        }

        .account-style .alt-option li {
            font-weight: 500;
            display: inline-block;
            margin-right: 15px
        }


        .account-style .alt-option li span {
            color: #727272;
            display: inline-block
        }

        .account-style .alt-option li:last-child {
            margin: 0
        }

        .account-style .alt-option li a {
            color: #3e80ff
        }

        .account-style .alt-option li a:hover {
            color: #24126a
        }

        .account-style .login-form .card-body {
            padding: 0
        }

        .account-style .inner-content {
            border-radius: 8px;
            overflow: hidden;
            -webkit-box-shadow: 0 10px 30px rgba(0, 0, 0, .075);
            box-shadow: 0 10px 30px rgba(0, 0, 0, .075)
        }

        .account-style .inner-content {
            border-radius: 8px;
            overflow: hidden;
            -webkit-box-shadow: 0 10px 30px rgba(0, 0, 0, .075);
            box-shadow: 0 10px 30px rgba(0, 0, 0, .075)
        }

        .button-control .btn {
            display: inline-block;
            text-transform: capitalize;
            font-size: 15px;
            font-weight: 500;
            padding: 14px 30px;
            background-color: green;
            color: #fff;
            border: none;
            -webkit-transition: all .4s ease;
            transition: all .4s ease;
            border-radius: 30px;
            position: relative;
            z-index: 1;
            margin-right: 7px;
            overflow: hidden
        }


        .button-control .btn:hover {
            color: #fff;
            background-color:yellowgreen;
        }

        .formMargin{
            margin: 25px;
        }
    </style>

<body>
<div class="account-style">
    <div class=container>
        <div class=row>
            <div class="col-12">
                <h3 class="card-header" style="text-align: center; color: #452bac;">Profile</h3>
                <form class="card login-form inner-content" method='post' action="#" id="update-form">
                    <div class="text-danger formMargin" id="error"></div>
                    <div class=card-body>
                        <div class=input-head>
                            <div class=row>
                                <div class="col-lg-7 col-7">
                                    <!-- name -->
                                    <label for="text" style="font-size: xx-large; font-weight: 700;">Name</label>
                                    <div class="form-group input-group">
                                        <label><image src={{asset("assets/icon/user.png")}} height="25px"></image></label>
                                        <input class=form-control type='text' id="username" value="SellerA">
                                    </div>
                                    <!-- email -->
                                    <label for="email" style="font-size: xx-large; font-weight: 700;">Email Address</label>
                                    <div class="form-group input-group">
                                        <label><image src={{asset("assets/icon/email.png")}} height="25px"></image></label>
                                        <input class=form-control type='email' id="userEmail" value="userEmail@gmail.com" required>
                                    </div>
                                    <!-- Position -->
                                    <label for="" style="font-size: xx-large; font-weight: 700;">Position</label>
                                    <div class="form-group">
                                        <div>
                                            <label><image src={{asset("assets/icon/role.png")}} height="25px"></image></label>
                                            <select class="form-select" value="">
                                                <option value="buyer">Buyer</option>
                                                <option value="seller">Seller</option>
                                                <option value="both">Buyer&Seller</option>
                                                <option value="both">service manager</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Zone -->
                                    <label for="text" style="font-size: xx-large; font-weight: 700;">Zone</label>
                                    <div class="form-group">
                                        <label><image src={{asset("assets/images/profile/location.png")}} height="25px"></image></label>
                                        <select class="form-select" value="">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Image of user -->
                                <div class="col-lg col"></div>
                                <div class="col-lg-3 col-3" style="margin-top: 90px">
                                    <img id="ChangImage" src={{asset("assets/images/profile/personalAvatar.png")}} class="button-control" style="width:300px; max-height: 270px; " alt="">
                                    <div class="button-control">
                                        <button class="btn" style="margin-top:5%; margin-left:19%; background-color: chocolate;" id="picture">Change picture</button>
                                    </div>
                                </div>
                                <!-- Save Edit Details Button -->
                                <div class='button-control mb-5'>
                                    <button class='btn col-lg-2 col-3' type='submit' id="save">Save Details</button>
                                </div>

                                <!-- Balance -->
                                <div class="col-lg-12 col-12 mt-5">
                                    <label for="text" style="font-size: xx-large; font-weight: 700;">Current Balance</label>
                                    <div class="form-group input-group">
                                        <label><image src={{asset("assets/images/profile/price.png")}} height="25px"></image></label>
                                        <input class=form-control type='text' id="balance" value="100" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <label for="text" style="font-size: xx-large; font-weight: 700;">Recharge Amount</label>
                                    <div class="form-group input-group">
                                        <label><image src={{asset("assets/images/profile/changeMoney.png")}} height="25px"></image></label>
                                        <input class=form-control type='text' placeholder="enter recharge amount">
                                    </div>
                                </div>
                                <!-- Money -->
                                <div class='button-control mb-5'>
                                    <button class='btn col-lg-2 col-3' type='button' id="recharge" style="background-color:gray;">Recharge</button>
                                </div>
                                <!-- Trading History -->
                                <div class="col-lg-12 col-12 button-control mb-5">
                                    <label for="" style="font-size: xx-large; font-weight: 700; color: #452bac;">Trading History</label>
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>NO.</th>
                                            <th>Energy of Type</th>
                                            <th>Amount of transaction</th>
                                            <th>Trading date</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Solar</td>
                                            <td>30</td>
                                            <td>1-April</td>
                                            <td>enough</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>wind</td>
                                            <td>30</td>
                                            <td>10-April</td>
                                            <td>ok</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>wind</td>
                                            <td>30</td>
                                            <td>15-April</td>
                                            <td>good</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <button class='btn col-lg-2 col-3' type='button' id="trading-history" style="float:right; background-color: #24126a;" id="download">Download</button>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript代码用于处理下载交易记录的功能
    function downloadTradingHistory() {
        // 这里编写下载交易记录的逻辑
    }
</script>
</body>
</html>

@endsection
