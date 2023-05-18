@extends('layouts.app')

@section('content')

    <div class="container page-wrapper page-content">
        <section class="content-header">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="title">User Management</h3>
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
                                        <h4 class="card-title col-md-9 mb-md-0 mb-3 align-self-center">List of Users</h4>
                                    </div><br>
                                    {{--Add User Button--}}
                                    <div class="col-sm-6" >
                                        <input class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#regModal" onclick="addUser()" value="Add New User">
                                    </div>
                                    <div class="modal fade" id="regModal" role="dialog">
                                        <div class="modal-dialog">
                                            {{--Modal Here--}}
                                            <div class="modal-content">
                                                <div class="modal-header" style="padding:30px 30px;">
                                                    <h4><span class="glyphicon glyphicon-lock"></span> Add User</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body" style="padding:30px 30px;">
                                                    <form role="form">
                                                        <div class="form-group">
                                                            <label for="name"><span class="glyphicon glyphicon-user"></span> Name</label>
                                                            <input type="text" class="form-control" id="name" placeholder="">
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="email"><span class="glyphicon glyphicon-user"></span> Email address</label>
                                                            <input type="email" class="form-control" id="email" placeholder="">
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="student">Select Role</label><br>
                                                            <div class="radio-container" style="display:flex; margin-bottom: 5px">
                                                                <input type="radio" style="margin: 5px" name="role" id="buyer">
                                                                <label for="buyer" style="margin: 5px">Buyer</label>
                                                                <input type="radio" style="margin: 5px" name="role" id="seller">
                                                                <label for="seller" style="margin: 5px">Seller</label>
                                                                <input type="radio" style="margin: 5px" name="role" id="buyerNseller">
                                                                <label for="buyerNseller" style="margin: 5px">Buyer and Seller</label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-secondary btn-default pull-left" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                                                    <button type="submit" class="btn btn-primary btn-default pull-left" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive mt-5">
                                        <table class="table"->
                                            <thead>
                                            <tr>
                                                <th class="border-top-0">ID</th>
                                                <th class="border-top-0" style="width:200px">Name</th>
                                                <th class="border-top-0" style="width:200px">Email</th>
                                                <th class="border-top-0" style="width:180px">Role</th>
                                                <th class="border-top-0">Status</th>
                                                <th colspan="2" class="text-center">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Test1</td>
                                                <td>test@test.com</td>
                                                <td>Seller</td>
                                                <td>Active</td>
                                                <td><input class="btn btn-secondary" type="button" value="Deactivate"></td>
                                                <td class="align-middle">
                                                    <input class="btn btn-danger delBtn" type="button" onclick="removeUser(1)" value="Delete">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Test2</td>
                                                <td>test2@test.com</td>
                                                <td>Seller</td>
                                                <td>Active</td>
                                                <td><input class="btn btn-secondary" type="button" value="Deactivate"></td>
                                                <td class="align-middle">
                                                    <input class="btn btn-danger delBtn" type="button" onclick="removeUser()" value="Delete">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Test3</td>
                                                <td>test3@test.com</td>
                                                <td>Buyer and Seller</td>
                                                <td>Active</td>
                                                <td><input class="btn btn-secondary" type="button" value="Deactivate"></td>
                                                <td class="align-middle">
                                                    <input class="btn btn-danger delBtn" type="button" onclick="removeUser()" value="Delete">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Test4</td>
                                                <td>test4@test.com</td>
                                                <td>Buyer</td>
                                                <td>Deactive</td>
                                                <td><input class="btn btn-success" type="button" value="Activate"></td>
                                                <td class="align-middle">
                                                    <input class="btn btn-danger delBtn" type="button" onclick="removeUser()" value="Delete">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Test5</td>
                                                <td>test5@test.com</td>
                                                <td>Buyer</td>
                                                <td>Active</td>
                                                <td><input class="btn btn-secondary" type="button" value="Deactivate"></td>
                                                <td class="align-middle">
                                                    <input class="btn btn-danger delBtn" type="button" onclick="removeUser()" value="Delete">
                                                </td>
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
