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
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-mninus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">Current Trading Price</h3>
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

@endsection
