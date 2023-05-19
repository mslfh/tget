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
                                <div class="card-body">
                                    <div class="d-md-flex">
                                        <h4 class="card-title col-md-9 mb-md-0 mb-3 align-self-center">Market Summary</h4>
                                    </div>
                                    <div class="table-responsive mt-5">
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
                                                            <h6>{{item["type"]}}</h6>
                                                        </td>
                                                        <td class="align-middle">{{item["total_volume"]}}</td>
                                                        <td class="align-middle">{{item["avg_price"]}}</td>
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
                                            <h5 class="font-weight-bold mb-2 mb-lg-0">Trading Price History</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="price-chart"></div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="col-12 col-lg-4">--}}
{{--                            <div class="card radius-10 bg-red-light">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="media align-items-center">--}}
{{--                                        <img src="static/picture/appointment-book.png" width="45" alt="">--}}
{{--                                        <div class="media-body text-right">--}}
{{--                                            <p class="mb-0 text-white"><i class='bx bxs-arrow-from-bottom'></i> 2.69%</p>--}}
{{--                                            <p class="mb-0 text-white">Since Last Month</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="media align-items-center mt-3">--}}
{{--                                        <div class="media-body">--}}
{{--                                            <p class="mb-1 text-white">Appointments</p>--}}
{{--                                            <h4 class="mb-0 text-white font-weight-bold">1879</h4>--}}
{{--                                        </div>--}}
{{--                                        <div id="chart2"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card radius-10 bg-primary-blue">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="media align-items-center">--}}
{{--                                        <img src="static/picture/surgery.png" width="45" alt="">--}}
{{--                                        <div class="media-body text-right">--}}
{{--                                            <p class="mb-0 text-white"><i class='bx bxs-arrow-from-bottom'></i> 3.56%</p>--}}
{{--                                            <p class="mb-0 text-white">Since Last Month</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="media align-items-center mt-3">--}}
{{--                                        <div class="media-body">--}}
{{--                                            <p class="mb-1 text-white">Surgery</p>--}}
{{--                                            <h4 class="mb-0 text-white font-weight-bold">3768</h4>--}}
{{--                                        </div>--}}
{{--                                        <div id="chart3"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        {{--                        Trading Price Chart--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-12 align-content-center">--}}
{{--                                            <div class="card">--}}
{{--                                                <div class="card-header">--}}
{{--                                                    <h6 class="title">Trading Price Over Time</h6>--}}
{{--                                                    <i class="fas fa-minus"></i>--}}
{{--                                                </div>--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <div id="pricehistory-chart" class="chart-placeholder"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

            </div>
                    {{--Trading History Charts--}}
                    <div class="row" id="trading-history-charts">
                        <div class="col-lg-12">
                            <div class="card radius-10">
                                <div class="card-header border-bottom-0">
                                    <div class="d-lg-flex align-items-center">
                                        <div>
                                            <h5 class="font-weight-bold mb-2 mb-lg-0">Trading Transaction History</h5>
                                        </div>
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
