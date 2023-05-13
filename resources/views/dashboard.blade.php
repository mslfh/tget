@extends('layouts.app')

@section('content')
    <div class="container page-content mt-5">
        <section class="content-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-body">
            <div class="container">
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
                                            <tr>
                                                <td style="width:50px;"><span class="round">S</span></td>
                                                <td class="align-middle">
                                                    <h6>Solar</h6>
                                                </td>
                                                <td class="align-middle">12.50</td>
                                                <td class="align-middle">$16.90</td>
                                            </tr>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 align-content-center">
                                        <div class="card">
                                            <div class="card-header">
                                                <h6 class="title">Trading Price Over Time</h6>
                                            </div>
                                            <div class="card-body">
                                                <div id="pricehistory-chart" class="demo-placeholder" style="width:810px;height:430px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                        Traded Energy Chart--}}
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h6 class="title">Trading Price Chart</h6>
                                            </div>
                                            <div class="card-body">
                                                <div id="tradinghistory-chart" class="demo-placeholder" style="width:600px;height:300px"></div>
                                                <p id="choices" style="width:600px;height:300px";"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--Manager only view--}}
                <div class="row" id="manager-view">
                {{--user summary per zone--}}
                </div>
            </div>
        </section>
    </div>

    <div id="content">

        <p id="click"></p>

    </div>

@endsection
