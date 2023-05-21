@extends('layouts.app')

@section('content')
    <script src="{{asset("/js/apexcharts.min.js")}}"></script>
    <script src="{{asset("/js/dashboard.js")}}"></script>

{{--    <link href={{asset("static/css/simplebar.css")}} rel="stylesheet">--}}
{{--    <link href={{asset("static/css/perfect-scrollbar.css")}} rel="stylesheet">--}}
{{--    <link href={{asset("static/css/metisMenu.min.css")}} rel="stylesheet">--}}
{{--    <link href={{asset("static/css/pace.min.css")}} rel="stylesheet">--}}
{{--    <link rel="stylesheet" href={{asset("static/css/bootstrap.min.css")}}>--}}
{{--    <link rel="stylesheet" href={{asset("static/css/icons.css")}}>--}}
{{--    <link rel="stylesheet" href={{asset("static/css/app.css")}}>--}}
{{--    <link rel="stylesheet" href={{asset("static/css/dark-style.css")}}>--}}

    <div class="container page-wrapper page-content">
        <section class="content-header">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="title">Dashboard</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-body">
            <div class="page-content">
                <div class="container-fluid">


                    <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="200">
                        <div class="panel-heading my-account-title">
                            <h4 class="panel-title">
                                <a data-bs-toggle="collapse" href="#show_detail" aria-expanded="false" class="collapsed">
                                    Trading History <i class="bi bi-caret-down-fill"></i></a>
                            </h4>
                        </div>
                        <div id="show_detail" class="panel-collapse collapse" data-bs-parent="#faq">
                            <div class="panel-body">
                                <div class=container><br>
                                    <div class=row>
                                        <div class=col-12>
                                            <div id="orders">
                                                <div class="table_page table-responsive">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>May 10, 2018</td>
                                                            <td><span class="success">Completed</span></td>
                                                            <td>$25.00 for 1 item</td>
                                                            <td>
                                                                <div class=button>
                                                                    <button href="#" data-bs-toggle="modal" class="btn btn-primary btn-sm"
                                                                            data-bs-target="#viewOrder">view
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>May 10, 2018</td>
                                                            <td>Processing</td>
                                                            <td>$17.00 for 1 item</td>
                                                            <td><a href="cart.html" class="view">view</a></td>
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
                            </div>
                        </div>
                    </div>


                    {{--Manager Only Views--}}
                    @if($role == 1)
                        <div class="row manager-view" id="user-summary">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-md-flex">
                                        <h4 class="card-title col-md-9 mb-md-0 mb-3 align-self-center">User Summary</h4>
                                    </div>
                                    <div class="table-responsive mt-5">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="border-top-0">Zone</th>
                                                <th class="border-top-0">Number of Buyer</th>
                                                <th class="border-top-0">Number of Seller</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {{--  Filling in the User Summary Data --}}
{{--                                            @foreach($userData as $user)--}}
{{--                                                <tr class="active">--}}
{{--                                                    <td class="align-middle">--}}
{{--                                                        <h6>{{user["postal_addr"]}}</h6>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="align-middle">{{user["buyer"]}}</td>--}}
{{--                                                    <td class="align-middle">{{user["seller"]}}</td>--}}
{{--                                                </tr>--}}
{{--                                            @endforeach--}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    {{--Market Summary--}}
                    <div class="row" id="market-summary">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header border-bottom-0">
                                    <div class="d-lg-flex align-items-center">
                                        <div>
                                            <h5 class="font-weight-bold mb-2 mb-lg-0">
                                                <a data-bs-toggle="collapse" href="#market-summary-detail" aria-expanded="false" class="collapsed">
                                                    Market Summary <i class="bi bi-caret-down-fill"></i></a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="market-summary-detail" class="table-responsive mt-5">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="border-top-0">Energy Type</th>
                                                <th class="border-top-0">Volume</th>
                                                <th class="border-top-0">Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {{--  Filling in the Market Summary Data --}}
                                            @foreach($data as $item)
                                                <tr class="active">
                                                    <td class="align-middle">
                                                        <h6>{{$item->type}}</h6>
                                                    </td>
                                                    <td class="align-middle">{{$item->total_volume}}</td>
                                                    <td class="align-middle">{{$item->avg_price}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{--Trading Price Charts--}}
                    <div class="row" id="trading-price-charts">
                        <div class="col-lg-12">
                            <div class="card radius-10">
                                <div class="card-header border-bottom-0">
                                    <div class="d-lg-flex align-items-center">
                                        <div>
                                            <h5 class="font-weight-bold mb-2 mb-lg-0">
                                                <a data-bs-toggle="collapse" href="#price-chart" aria-expanded="false" class="collapsed">
                                                    Trading Price History<i class="bi bi-caret-down-fill"></i></a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="price-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Trading History Charts--}}
                    <div class="row" id="trading-history-charts">
                        <div class="col-lg-12">
                            <div class="card radius-10">
                                <div class="card-header border-bottom-0">
                                    <div class="d-lg-flex align-items-center">
                                        <h5 class="font-weight-bold mb-2 mb-lg-0">
                                            <a data-bs-toggle="collapse" href="#trading-chart" aria-expanded="false" class="collapsed">
                                                Trading Transcation History<i class="bi bi-caret-down-fill"></i></a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="trading-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="content">

        <p id="click"></p>

    </div>




@endsection
