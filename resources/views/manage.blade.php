@extends('layouts.app')

@section('content')
    <script src="{{asset("/js/manage.js")}}"></script>

    @if($role == 1)
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
                                        </div>
                                        {{--Add User Button--}}
                                        <div class="d-md-flex">
                                            <input type="button" class="btn btn-primary" value="Add New User" data-bs-toggle="modal" data-bs-target="#addUserModal">
                                        </div>
                                        <div class="table-responsive mt-5">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="border-top-0">ID</th>
                                                        <th class="border-top-0">Name</th>
                                                        <th class="border-top-0">Email</th>
                                                        <th class="border-top-0">Role</th>
                                                        <th class="border-top-0">Status</th>
                                                        <th colspan="2" class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                        <tr>
                                                            <td>{{$user->id}}</td>
                                                            <td>{{$user->name}}</td>
                                                            <td>{{$user->email}}</td>
                                                            <td>{{$user->role_id}}</td>
                                                            @if($user->status == 1)
                                                                <td>Active</td>
                                                            @else
                                                                <td>Inactive</td>
                                                            @endif
                                                            @if($user->status == 1)
                                                                <td><input class="btn btn-warning" type="submit" value="Deactivate" onclick="changeUserStatus({{$user->id}},0)"></td>
                                                            @else
                                                                <td><input class="btn btn-success" type="submit" value="Activate" onclick="changeUserStatus({{$user->id}},1)"></td>
                                                            @endif
                                                            <td>
                                                                <input class="btn btn-danger" type="button" onclick="removeUser({{$user->id}})" value="Delete">
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--Modal to handle Add New User Form --}}
                        <div class="modal fade" id="addUserModal" role="dialog">
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
                                                <label for="role"><span class="glyphicon glyphicon-user"></span>Select Role</label>
                                                <input type="role" class="form-control" id="student" placeholder="" disabled>
                                            </div>
                                            <div>
                                                <div class="radio-container" style="display:flex; margin-bottom: 5px">
                                                    <input type="radio" style="margin: 5px" name="role" id="manager" value="1">
                                                    <label for="buyer" style="margin: 5px">Manager</label>
                                                    <input type="radio" style="margin: 5px" name="role" id="buyer" value="2">
                                                    <label for="buyer" style="margin: 5px">Buyer</label>
                                                    <input type="radio" style="margin: 5px" name="role" id="seller" value="3">
                                                    <label for="seller" style="margin: 5px">Seller</label>
                                                    <input type="radio" style="margin: 5px" name="role" id="buyerNseller" value="4">
                                                    <label for="buyerNseller" style="margin: 5px">Buyer and Seller</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary btn-default pull-left" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                                        <button type="submit" class="btn btn-primary btn-default pull-left" data-bs-dismiss="modal" onclick="addUser()"><span class="glyphicon glyphicon-remove"></span> Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @else
        <div class="container page-wrapper page-content">
            <section class="content-header">
                <div class="page-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="title">You are not authorised to access this page!</h3>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endif
@endsection
