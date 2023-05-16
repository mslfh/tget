@extends('layouts.app')

@section('content')

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
            padding: 30px 70px;
            background-color: #fff;
            border: none
        }


        .account-style .login-form .card-body {
            padding: 0
        }

        /*.account-style .bottom-content {*/
        /*    margin-top: 20px*/
        /*}*/

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
            padding-left: 13px;
            padding-right: 13px;
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
            padding-left: 13px;
            padding-right: 13px;
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
            margin: 15px 0;
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


        .button-control1 .btn1:hover {
            color: #fff;
            background-color:blue;
        }

        .button-control1 .btn1 {
            display: inline-block;
            text-transform: capitalize;
            font-size: 15px;
            font-weight: 500;
            padding: 9px 13px;
            background-color: orangered;
            color: #fff;
            border: none;
            -webkit-transition: all .4s ease;
            transition: all .4s ease;
            border-radius: 15px;
            position: relative;
            z-index: 1;
            margin-right: 3px;
            overflow: hidden
        }


        .button-control1 .btn1:hover {
            color: #fff;
            background-color:blueviolet;
        }

        .formMargin{
            margin: 15px;
        }
    </style>

<div class="account-style">
    <div class="container section" style="margin-top: 20px">
        <div class=row>
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
                <div class="card login-form inner-content">
                        <h3 style="text-align: center; color: #452bac;">Profile</h3>
                        <div class="text-danger formMargin" id="error"></div>
                        <div class=card-body>
                            <div class="input-head">
                                <form  method='post' action="#" id="update-form">
                                    <div class=row>
                                        <div class="col-lg-5 col-6">
                                        <!-- name -->
                                            <label for="text" style="font-size: large; font-weight: 700;">Name</label>
                                            <div class="form-group input-group">
                                                <label><image src={{asset("assets/icon/user.png")}} height="25px"></image></label>
                                                <input class=form-control type='text' id="username" value="SellerA" style="font-weight:bold">
                                            </div>
                                            <!-- email -->
                                            <label for="email" style="font-size:large; font-weight: 700;">Email Address</label>
                                            <div class="form-group input-group">
                                                <label><image src={{asset("assets/icon/email.png")}} height="25px"></image></label>
                                                <input class=form-control type='email' id="userEmail" value="userEmail@gmail.com" readonly style="color:gray">
                                            </div>
                                            <!-- Position -->
                                            <label for="" style="font-size: large; font-weight: 700;">Position</label>
                                            <div class="form-group">
                                                <div>
                                                    <label><image src={{asset("assets/icon/role.png")}} height="25px"></image></label>
                                                    <select class="form-select" value="" style="font-weight:bold">
                                                        <option value="buyer">Buyer</option>
                                                        <option value="seller">Seller</option>
                                                        <option value="both">Buyer&Seller</option>
                                                        <option value="both">service manager</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Zone -->
                                            <label for="text" style="font-size: large; font-weight: 700;">Zone</label>
                                            <div class="form-group">
                                                <label><image src={{asset("assets/images/profile/location.png")}} height="25px"></image></label>
                                                <select class="form-select" value="" style="font-weight:bold">
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                </select>
                                            </div>
                                            <!-- Save Edit Details Button -->
                                            <div class='button-control1 mb-5 d-flex'>
                                                <button class='btn1 btn-primary' type='submit' id="save" style="padding: 15px;">Save</button>
                                            </div>
                                        </div>
                                        <!-- Image of user -->
                                        <div class="col-lg col"></div>
                                        <div class="col-lg-5 col-5" style="margin-top: 10px">
                                            <img id="ChangImage" src={{asset("assets/images/profile/personalAvatar.png")}} class="button-control" style="width:300px; max-height: 270px; " alt="">
                                            <div class="button-control">
                                                <button class="btn"  style="margin-top:5%; margin-left:19%;" id="picture">Change picture</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div style="position: absolute; right:10%; top:470px">
                                    {{--                                current balance--}}
                                    <form method='post' action="#" id="update-balance">
                                        <div class="col-lg-12 col-12">
                                            <label for="text" style="font-size:large; font-weight: 700;">Current Balance</label>
                                            <div class="form-group input-group">
                                                <label><image src={{asset("assets/images/profile/price.png")}} height="25px"></image></label>
                                                <input class=form-control type='text' id="balance" value="100" readonly style="color: gray">
                                            </div>
                                            <div class='button-control mb-5'>
                                                <button class='btn' type='button' data-bs-toggle="modal" data-bs-target="#rechargeModal" id="recharge" style="background-color:darkblue; padding: 7px">Recharge</button>
                                                <button class='btn' type='button' data-bs-toggle="modal" data-bs-target="#withdrawModal" id="withdraw" style="float: right; background-color:grey; padding: 7px">Withdraw</button>
                                                {{--                                            rechrage modal--}}
                                                <div class="modal" tabindex="-1" id="rechargeModal">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4>Recharge your amount</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {{--                                                            <p class="text-danger" id="error"></p>--}}
                                                                <div class="mb-3">
                                                                    <label for="Current Amount">Current Amount</label>
                                                                    <input type="text" class="form-control input-group" id="CurrentAmount" value="100" readonly>
                                                                </div>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label for="Recharge Amount">Recharge Amount</label>
                                                                    <input type="number" class="form-control input-group" id="RechargeAmount" value="0">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:gray;">Close</button>
                                                                <button type="button" class="btn btn-primary" id="rechargeAmount">Recharge Amount</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--                                            withdraw modal--}}
                                                <div class="modal" tabindex="-1" id="withdrawModal">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4>Withdraw your amount</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {{--                                                            <p class="text-danger" id="error"></p>--}}
                                                                <div class="mb-3">
                                                                    <label for="Current Amount">Current Amount</label>
                                                                    <input type="text" class="form-control input-group" id="CurrentAmount" value="100" readonly>
                                                                </div>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label for="Withdraw Amount">Withdraw Amount</label>
                                                                    <input type="number" class="form-control input-group" id="WithdrawAmount" value="0">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:gray;">Close</button>
                                                                <button type="button" class="btn btn-primary">Withdraw Amount</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                    <!-- Trading History -->
                                    <div class="col-lg-12 col-12 button-control mb-5">
                                        <div class="d-flex align-items-center">
                                            <label for="" style="font-size:large; font-weight: 700; vertical-align: middle">Trading History</label>
                                            <button class='btn mx-3' type='button' id="showTrading" style="padding:5px; font-size:15px; margin-bottom: 2%; background-color: #0000FF">More Details</button>
                                        </div>
                                        <div id="TradingHistory" style="display: none">
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
                                            <button class='btn col-lg-3 col-7' type='button' id="trading-history" style="float:right; background-color: #24126a;" id="download">Download</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>
            </div>
        </div>
</div>


<script>
{{--    trading details show or hidden--}}
    $(document).ready(function(){
        $("#showTrading").click(function(){
            $("#TradingHistory").toggle();
            if ($("#TradingHistory").is(":visible")) {
                $("#showTrading").text("Hide Details");
            } else {
                $("#showTrading").text("Show Details");
            }
        });
    });


    // JavaScript代码用于处理下载交易记录的功能
    function downloadTradingHistory() {
        // 这里编写下载交易记录的逻辑
    }
</script>

@endsection


