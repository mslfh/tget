@extends('layouts.app')

@section('content')
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
                                                <th class="border-top-0" colspan="2">Energy Type</th>
                                                <th class="border-top-0">Volume</th>
                                                <th class="border-top-0">Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            {{--                                        @foreach( $data as $item)--}}
                                            {{--                                            <tr>--}}
                                            {{--                                                <td style="width:50px;"><span class="round">{{$item['title']}}</span></td>--}}
                                            {{--                                                <td class="align-middle">--}}
                                            {{--                                                    <h6>{{$item['type']}}</h6>--}}
                                            {{--                                                </td>--}}
                                            {{--                                                <td class="align-middle">{{$item['total_volume']}}</td>--}}
                                            {{--                                                <td class="align-middle">{{$item['avg_price']}}</td>--}}
                                            {{--                                            </tr>--}}
                                            {{--                                        @endforeach--}}



                                            <tr class="active">
                                                <td><span class="round"><img src="../assets/images/users/2.jpg"
                                                                             alt="user" width="50"></span></td>
                                                <td class="align-middle">
                                                    <h6>Solar</h6>
                                                </td>
                                                <td class="align-middle">12.50</td>
                                                <td class="align-middle">$16.90</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-success">B</span></td>
                                                <td class="align-middle">
                                                    <h6>Solar</h6>
                                                </td>
                                                <td class="align-middle">12.50</td>
                                                <td class="align-middle">$16.90</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-primary">N</span></td>
                                                <td class="align-middle">
                                                    <h6>Solar</h6>
                                                </td>
                                                <td class="align-middle">12.50</td>
                                                <td class="align-middle">$16.90</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-warning">M</span></td>
                                                <td class="align-middle">
                                                    <h6>Solar</h6>
                                                </td>
                                                <td class="align-middle">12.50</td>
                                                <td class="align-middle">$16.90</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--All Charts--}}
                    <div class="row" id="charts">
                        {{--                        Trading Price Chart--}}
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 align-content-center">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6 class="title">Trading Price Over Time</h6>
                                                    <i class="fas fa-minus"></i>
                                                </div>
                                                <div class="card-body">
                                                    <div id="pricehistory-chart" class="chart-placeholder"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        Traded Energy Chart--}}
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6 class="title">Traded Energy Chart</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div id="tradinghistory-chart" class="chart-placeholder"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Manager only view--}}
                    {{--User Summary per zone--}}
                    <div class="row" id="user-summary">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-md-flex">
                                        <h4 class="card-title col-md-9 mb-md-0 mb-3 align-self-center">User Summary per Zone</h4>
                                    </div>
                                    <div class="table-responsive mt-5">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="border-top-0">#</th>
                                                <th class="border-top-0">Zone</th>
                                                <th class="border-top-0">Number of Buyer</th>
                                                <th class="border-top-0">Number of Seller</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>A</td>
                                                <td>25</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>B</td>
                                                <td>29</td>
                                                <td>33</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>C</td>
                                                <td>40</td>
                                                <td>13</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>D</td>
                                                <td>12</td>
                                                <td>45</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>E</td>
                                                <td>21</td>
                                                <td>10</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
