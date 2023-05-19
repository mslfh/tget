@extends('layouts.app')

@section('content')

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

        .account-style .form-select {
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
            background-color: blue;
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
            background-color: blueviolet;
        }

        .formMargin {
            margin: 15px;
        }


        .col-6 label {
            padding-bottom: 26px;
        }

        label img {
            height: 30px
        }

        .contact-form {
            padding: 60px 40px 10px 40px;
            -webkit-box-shadow: 0 8px 36px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 8px 36px 0 rgba(0, 0, 0, .1);
            border-radius: 20px
        }
    </style>

    <div class="account-style">
        <div class="container section" style="margin-top: 20px">
            <div class=row >
                <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
                    <div class="card login-form inner-content">
                        <h3 style="text-align: center; color: #452bac;">Profile</h3>

                        {{-- user--}}
                        <div class="text-danger formMargin" id="error"></div>
                        <form method='post' action="#" id="update-form">
                            <div class=row style="margin-bottom :0px">
                                <!-- Image of user -->
                                <div class="col-lg-5 col-5" style="margin-top: 10px; ">
                                    <img class="rounded-circle p-1 border"
                                         src={{asset("assets/images/profile/personalAvatar.png")}}>
                                    <img src="{{asset("assets/images/profile/upload.png")}}"
                                         style=" float: right; width: 10%">
                                    <!-- name -->

                                    <br>
                                    <br>
                                    <br>
                                    <div class="form-group input-group">
                                        <label style="padding: 0px;">
                                            <image src={{asset("assets/icon/user.png")}}></image>
                                        </label>
                                        {{--                                                <label for="text" style="font-size: large; font-weight: 700;">Name:</label>--}}
                                        <input class=form-control type='email' id="userEmail" value="Name: Ryan"
                                               readonly style="color:gray">

                                    </div>
                                    <br>
                                    <div class="form-group input-group">
                                        <label style="padding: 0px;">
                                            <image src={{asset("assets/icon/email.png")}}></image>
                                        </label>
                                        {{--                                                <label for="email" style="font-size:large; font-weight: 700;">Email Address</label>--}}
                                        <input class=form-control type='email' id="userEmail"
                                               value="Email: userEmail@gmail.com" readonly style="color:gray">
                                    </div>

                                    {{--                                            <!-- email -->--}}
                                    {{--                                            <label for="email" style="font-size:large; font-weight: 700;">Email Address</label>--}}
                                    {{--                                            <div class="form-group input-group">--}}
                                    {{--                                                <label style="padding: 0px;"><image src={{asset("assets/icon/email.png")}}></image></label>--}}
                                    {{--                                                <input class=form-control type='email' id="userEmail" value="userEmail@gmail.com" readonly style="color:gray">--}}
                                    {{--                                            </div>--}}
                                </div>

                                <div class="col-lg col"></div>

                                {{--  user information--}}

                                <div class="col-lg-6 col-6">

                                    <!-- Position -->
                                    <label for="" style="font-size: large; font-weight: 700;">Role</label>

                                    <div class="form-group">
                                        <div>
                                            <label style="padding: 0px;">
                                                <image src={{asset("assets/icon/role.png")}}></image>
                                            </label>
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
                                        <label style="padding: 0px;">
                                            <image src={{asset("assets/images/profile/location.png")}}></image>
                                        </label>
                                        <select class="form-select" value="" style="font-weight:bold">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                        </select>
                                    </div>


                                    <!-- password -->
                                    <label for="text" style="font-size: large; font-weight: 700;">Password</label>
                                    <div class="form-group">
                                        <label style="padding: 0px;">
                                            <image src={{asset("assets/images/profile/location.png")}}></image>
                                        </label>
                                        <select class="form-select" value="" style="font-weight:bold">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                        </select>
                                    </div>

                                    <!-- potal_address -->
                                    <label for="text" style="font-size: large; font-weight: 700;">Potal address</label>
                                    <div class="form-group">
                                        <label style="padding: 0px;">
                                            <image src={{asset("assets/images/profile/location.png")}}></image>
                                        </label>
                                        <select class="form-select" value="" style="font-weight:bold">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                        </select>
                                    </div>

                                    <!-- Save Edit Details Button -->
                                    <div class='button-control1 mb-5 d-flex' style="float: right;">
                                        <button class='btn1 btn-primary' type='submit' id="save">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        {{--balance--}}
                        <div class="contact-form" style="margin: 1%;">
                            <form method='post' action="#" id="update-balance">
                                <label for="text" style="font-size:large; font-weight: 700; padding-bottom: 20px;">Current
                                    Balance</label>

                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group input-group " style="width: 100%;">
                                            <label>
                                                <image
                                                    src={{asset("assets/images/profile/price.png")}} height="25px"></image>
                                            </label>
                                            <input  id="balance" class=form-control type='text' value="100" readonly
                                                   style="color: gray">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class='button-control mb-5 '>
                                            <button class='btn' type='button' data-bs-toggle="modal"
                                                    data-bs-target="#rechargeModal" id="recharge"
                                                    style="background-color:darkblue; padding: 7px">
                                                <i class="bi bi-currency-exchange"></i>
                                            </button>
                                            <button class='btn' type='button' data-bs-toggle="modal"
                                                    data-bs-target="#withdrawModal" id="withdraw"
                                                    style="background-color:grey; padding: 7px">
                                                <i class="bi bi-collection"></i>
                                            </button>
                                            {{--                                            rechrage modal--}}
                                            <div class="modal" tabindex="-1" id="rechargeModal">
                                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4>Recharge your amount</h4>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {{--                                                            <p class="text-danger" id="error"></p>--}}
                                                            <div class="mb-3">
                                                                <label for="Current Amount">Current Amount</label>
                                                                <input type="text" class="form-control input-group"
                                                                       id="CurrentAmount" value="-" readonly>
                                                            </div>
                                                            <br>
                                                            <div class="mb-3">
                                                                <label for="Recharge Amount">Recharge Amount</label>
                                                                <input type="number" class="form-control input-group"
                                                                       id="AddMoney" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal"
                                                                    style="background-color:gray;">Close
                                                            </button>
                                                            <button type="button" class="btn btn-primary"
                                                                    id="rechargeAmount">
                                                                Recharge Amount
                                                            </button>
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
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {{--                                                            <p class="text-danger" id="error"></p>--}}
                                                            <div class="mb-3">
                                                                <label for="Current Amount">Current Amount</label>
                                                                <input type="text" class="form-control input-group"
                                                                       id="CurrentAmount" value="100" readonly>
                                                            </div>
                                                            <br>
                                                            <div class="mb-3">
                                                                <label for="Withdraw Amount">Withdraw Amount</label>
                                                                <input type="number" class="form-control input-group"
                                                                       id="WithdrawAmount" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal"
                                                                    style="background-color:gray;">Close
                                                            </button>
                                                            <button type="button" class="btn btn-primary">Withdraw
                                                                Amount
                                                            </button>
                                                        </div>
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

                            <div class=container>
                                <br><br>
                                <div class=row>
                                    <div class=col-12>
                                        <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="200">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title">
                                                    <a data-bs-toggle="collapse" href="#show_Energy" aria-expanded="true" class="collapsed" style="padding: 0px;">
                                                        Trading history <i class="bi bi-caret-down-fill"></i></a>
                                                </h4>
                                            </div>
                                            <div id="show_Energy" class="panel-collapse collapse " data-bs-parent="#faq">
                                                <div class="panel-body">
                                                    <div class=container style="padding: 0px"><br><br>
                                                        <div class=row>
                                                            <div class=col-12>
                                                                <div id="orders">
                                                                    <div class="table_page table-responsive">

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
                                                                                <td>1</td>
                                                                                <td>Solar</td>
                                                                                <td>30</td>
                                                                                <td>1-April</td>
                                                                                <td>enough</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Solar</td>
                                                                                <td>30</td>
                                                                                <td>1-April</td>
                                                                                <td>enough</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Solar</td>
                                                                                <td>30</td>
                                                                                <td>1-April</td>
                                                                                <td>enough</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Solar</td>
                                                                                <td>30</td>
                                                                                <td>1-April</td>
                                                                                <td>enough</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Solar</td>
                                                                                <td>30</td>
                                                                                <td>1-April</td>
                                                                                <td>enough</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Solar</td>
                                                                                <td>30</td>
                                                                                <td>1-April</td>
                                                                                <td>enough</td>
                                                                            </tr> <tr>
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

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Pagination-->
                                                    <div class="pagination justify-content-center">
                                                        <ul class=pagination-list>
                                                            <li class="previous"><a href="javascript:void(0)">Prev</a></li>
                                                            <li class=active><a href="javascript:void(0)">1</a></li>
                                                            <li><a href="javascript:void(0)">2</a></li>
                                                            <li><a href="javascript:void(0)">3</a></li>
                                                            <li><a href="javascript:void(0)">4</a></li>
                                                            <li><a href="javascript:void(0)">5</a></li>
                                                            <li class="next"><a href="javascript:void(0)">Next</a></li>
                                                        </ul>
                                                    </div>
                                                    <button class='btn col-lg-3 col-7' type='button' id="trading-history"
                                                            style="float:right; background-color: #24126a;" id="download">Download
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
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
        $(document).ready(function () {
            $.ajax({
                url: '/getUserInfo',
                type: 'GET',
                success: function(result) {
                    var balance = $("#balance");

                    $("#balance").val(result.data.account_balance)
                }
            });
        })
        $("#rechargeAmount").click(function(){

            var money = $("#AddMoney").val()

            $.ajax({
                url: '/changeMoney',
                type: 'POST',
                data:{
                    "money": money,
                    "type" : "save"
                },
                success: function(result) {
                   alert(result.data)
                    location.reload()
                }
            });
        })
    </script>

@endsection


