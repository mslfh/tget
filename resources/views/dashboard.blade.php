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
    <div class="section">
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
                    @if($role_id == 1)
                        <div class="row manager-view" id="user-summary">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header border-bottom-0">
                                    <div class="d-lg-flex align-items-center">
                                        <div>
                                            <h5 class="font-weight-bold mb-2 mb-lg-0">
                                                <a data-bs-toggle="collapse" href="#user-summary-detail" aria-expanded="false" class="collapsed">
                                                    User Summary <i class="bi bi-caret-down-fill"></i></a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="user-summary-detail" class="table-responsive mt-5">
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
                                            @foreach($userData as $user)
                                                <tr class="active">
                                                    <td class="align-middle">
                                                        <h6>{{$user->zone}}</h6>
                                                    </td>
                                                    <td class="align-middle">{{$user->total_buyer}}</td>
                                                    <td class="align-middle">{{$user->total_seller}}</td>
                                                </tr>
                                            @endforeach
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
                                                <th class="border-top-0">Available Volume</th>
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
                                                Traded Energy Volume over Time<i class="bi bi-caret-down-fill"></i></a>
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
    </div>
@endsection
