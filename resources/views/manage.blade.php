@extends('layouts.app')

@section('content')
    <div class="container page-wrapper page-content">
        <section class="content-header">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="title">User Management</h3>
                    </div>
                    <div class="col-sm-6" >
                        <input class="btn btn-primary" type="button" value="Add New User">
                    </div>
                </div>
            </div>
        </section>
        <section class="content-body">
            <div class="page-content">
                <div class="container-fluid">
                    {{--List of all users (buyers and sellers only--}}
                    <div class="row" id="all-users">
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
                                                <th colspan="3">Status</th>
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
@endsection



{{--@if status == 1--}}
{{--<div>--}}
{{--    11111--}}
{{--</div>--}}
{{--@else--}}
{{--    <div>--}}
{{--        2222--}}
{{--    </div>--}}
{{--@endif--}}
