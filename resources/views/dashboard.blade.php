@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            {{--            Market Summary--}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="title">Current Trading Price</h5>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h6 class="title">Trading Price Chart</h6>
                                            </div>
                                            <div class="card-body">
                                                <div id="placeholder" class="demo-placeholder" style="width:600px;height:300px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>

                </div>
            </div>
        </section>
    </div>

    <div id="content">

        <p id="click"></p>

    </div>

@endsection
