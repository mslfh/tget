@extends('layouts.app')

@section('content')


    <div class=" section">

    <div class="container">

            <br>
            <br>
            <br>
            <div class="row">
                <div class=" col-12 ">
                    <div class="section-title" style="margin-bottom: 0px;">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Manage Market </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Manage energy of the market. xxxxxx</p>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class=row>

                <div class="col-12 " style="padding: 15px 55px;">
                    <br><br>
                    <h3 class=form-title style="color: #397d98; padding-bottom: 20px">Service Fee</h3>
                    <table class="table table-striped table-bordered mb-0" id="table1">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" width="50%">Administration Fee ($)</th>
                            <th scope="col">Tax Fee (%)</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th id="AdministrationFee">{{$fee['administration_fee']}}</th>
                            <td id="TaxFee">{{$fee['tax']}}</td>
                            <td id="Action">
                                <button class="btn btn-sm btn-default" id="editBtn">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{--        Renewable Energy Types and Prices--}}
        <div class=container><br><br>
            <div class=row>
                <div class=col-12>
                    <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="200">
                        <div class="panel-heading my-account-title">
                            <h4 class="panel-title">
                                <a data-bs-toggle="collapse" href="#show_Energy" aria-expanded="true" class="collapsed">
                                    Renewable Energy Types and Prices <i class="bi bi-caret-down-fill"></i></a>
                            </h4>
                        </div>
                        <div id="show_Energy" class="panel-collapse collapse show" data-bs-parent="#faq">
                            <div class="panel-body">
                                <div class=container><br><br>
                                    <div class=row>
                                        <div class=col-12>

                                            <button type="button" class="btn btn-outline-success sell-button mb-4" id="addEnergyBtn" data-bs-toggle="modal" data-bs-target="#addRenewableEnergy" >Add new energy</button>

                                            <div id="orders">
                                                <div class="table_page table-responsive">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th>Energy</th>
                                                            <th>Title</th>
                                                            <th>Type</th>
                                                            <th>Description</th>
                                                            <th>Zone</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach($energyList as $energy)
                                                        <tr>
                                                            <td><img width="40px" src="{{asset($energy->image)}}"></td>
                                                            <td>{{$energy->title}}</td>
                                                            <td>{{$energy->type}}</td>
                                                            <td>{{$energy->description}}</td>
                                                            <td>{{$energy->zone}}</td>
                                                            <td>
                                                                <div>
                                                                    <button id="editEnergy-Btn-{{$energy->id}}" type="button" class="btn btn-sm btn-default editEnergy-bt" data-bs-toggle="modal" data-bs-target="#editRenewableEnergy" ><i class="bi bi-pencil-square"></i></button>
                                                                    <button id="deleteEnergy-Btn-{{$energy->id}}" class="btn btn-sm btn-default deleteEnergy-bt" data-bs-toggle="modal" data-bs-target="#confirmModal"><i class="bi bi-trash3"></i></button>
                                                                </div>
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
                </div>
            </div>
        </div>

        {{--        Trading History--}}
        <div class=container><br><br>
            <div class=row>
                <div class=col-12>
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
                                                            <th>No</th>
                                                            <th>Buyer</th>
                                                            <th>Seller</th>
                                                            <th>Energy</th>
                                                            <th>Volume</th>
                                                            <th>Trading Price</th>
                                                            <th>Tax/Market Fee</th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($tradingHistory as $history)
                                                            <tr>
                                                                <td>{{$history->order_no}}</td>
                                                                <td>{{$history->buyer->name}}</td>
                                                                <td>{{$history->seller->name}}</td>
                                                                <td><img width="20px" src="{{$history->store->energy->image}}"> {{$history->store->energy->title}}</td>
                                                                <td>{{$history->volume}}/kwh</td>
                                                                <td>$ {{$history->trading_price}}</td>
                                                                <td>${{$history->administration_fee}} / {{$history->tax}}%</td>
                                                                <td>{{$history->created_at}}</td>
                                                                <td>
                                                                    <div class=button>
                                                                        <button id="btn-view-{{$history->id}}" href="#" data-bs-toggle="modal" class="btn btn-primary btn-sm btn-view-order"
                                                                                data-bs-target="#viewOrder">view
                                                                        </button>
                                                                    </div>
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
                    </div>
                </div>
            </div>
        </div>

{{--            <div class=" contact-form">--}}
{{--            asdasdas--}}
{{--            </div>--}}
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="editRenewableEnergy">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Renewable Energy</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" >
                    <form action="#" method="post">
                        <div class="form-group">
                            <table>
                                <input style="display: none" id="energyIdInput">
                                <tr>
                                    <td>Image</td>
                                    <td>
                                        <button type="file">Change image</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Title</td>
                                    <td><input type="input" class="form-control" name="title" placeholder="Enter title"></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><input type="input" class="form-control" name="description" placeholder="Enter Description"></td>
                                </tr>
                                <tr>
                                    <td>Type</td>
                                    <td><input type="input" class="form-control" name="type" placeholder="Enter Type"></td>
                                </tr>
                                <tr>
                                    <td>Market Price (kWh)</td>
                                    <td><input type="input" class="form-control" name="price" placeholder="Enter Price per kWh"></td>
                                </tr>

                            </table>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="updateEnergyBtn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="addRenewableEnergy">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Add Renewable Energy</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <div class="energy-area">
                            <table >
                                <input style="display: none" id="energyIdInput">
                                <tr>
                                    <td>Image</td>
                                    <td>
                                        <input type="file" id="energyImage" placeholder="upload file">
                                    </td>
                                </tr>
                                <tr style="height: 10px;">
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Title:</td>
                                    <td><input type="input" class="form-control" name="title" placeholder="Enter title" required></td>
                                </tr>

                                <tr style="height: 20px;">
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Description: </td>
                                    <td><input type="input" class="form-control" name="description" placeholder="Enter Description"></td>
                                </tr>
                                <tr style="height:20px;">
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Type:</td>
                                    <td><input type="input" class="form-control" name="type" placeholder="Enter Type" required> </td>
                                </tr>
                                <tr style="height: 20px;">
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Market Price (kWh):</td>
                                    <td><input type="input" class="form-control" name="price" placeholder="Enter Price per kWh" required></td>
                                </tr>
                            </table>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="saveEnergyBtn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="viewOrder">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Trading detail</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding: 0px">

                    <div class="your-order-area">

                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li><b>Product</b></li>
                                        <li><b>Price</b></li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        <li><span class="order-middle-left" id="ProductContent"></span>
                                            <span class="order-price" id="average_price"></span></li>
                                    </ul>
                                </div>

                                <div class="your-order-middle">
                                    <ul>
                                        <li><span class="order-middle-left" >Tax</span><span class="order-price" id="Tax"></span></li>
                                    </ul>
                                </div>

                                <div class="your-order-middle">
                                    <ul>
                                        <li><span class="order-middle-left">Administration Fee</span><span class="order-price" id="Administration_Fee"></span></li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        <li><span class="order-middle-left">Market Price</span><span class="order-price" id="Market_Price"></span></li>
                                    </ul>
                                </div>

                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li id="trading_price"></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div id="faq" class="panel-group">

                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse" href="#buyer-info" class="collapsed" aria-expanded="true">Buyer&nbsp;&nbsp;<i class="bi bi-chevron-down"></i></a></h4>
                                            </div>
                                            <div id="buyer-info" class="panel-collapse collapse show" data-bs-parent="#faq">
                                                <div class="panel-body">
                                                    <p class="buyer-info" id="buyer-info"></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse" href="#seller-info" class="collapsed" aria-expanded="true">Seller&nbsp;&nbsp;<i class="bi bi-chevron-down"></i></a></h4>
                                            </div>
                                            <div id="seller-info" class="panel-collapse collapse show" data-bs-parent="#faq">
                                                <div class="panel-body">
                                                    <p class="seller-info"></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse" href="#order-info" class="collapsed" aria-expanded="true">Order&nbsp;&nbsp;<i class="bi bi-chevron-down"></i></a></h4>
                                            </div>
                                            <div id="order-info" class="panel-collapse collapse show" data-bs-parent="#faq">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="Place-order mt-25" style="">
                            <a class="btn-hover" href="#">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Confirm delete</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding: 0px">

                    <div class="your-order-area">

                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-total">
                                    <input style="display: none" id="energyId">
                                    <span class="order-total" style="font-size: 20px;">Are you sure to delete this energy?</span>
                                </div>
                            </div>
                        </div>

                        <div class="Place-order mt-25" >
                            <a class="btn-hover" style="background-color: rgba(200,87,87,0.74);" >
                                <button class="btn btn-sm btn-default deleteBtn"  id="confirm_delete_btn" >I'm confirmed</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#editBtn').click(function() {
                var administrationFee = $('#AdministrationFee').text().trim();
                var taxFee = $('#TaxFee').text().trim();

                var administrationFeeInput = $('<input>').attr({
                    type: 'text',
                    value: administrationFee,
                    id: 'AdministrationFeeInput'
                });

                var taxFeeInput = $('<input>').attr({
                    type: 'text',
                    value: taxFee,
                    id: 'TaxFeeInput'
                });

                $('#AdministrationFee').html(administrationFeeInput);
                $('#TaxFee').html(taxFeeInput);

                var columnIndex = $(this).closest('td').index();
                var table = $('#table1');
                table.find('tr').each(function() {
                    $(this).find('td').eq(columnIndex-1).hide();
                });

                var checkButton = $('<button>').attr({
                    class: 'btn btn-sm btn-default',
                    id: 'CheckButton'
                }).html('<i class="bi bi-check-lg"></i>');

                var cancelButton = $('<button>').attr({
                    class: 'btn btn-sm btn-default',
                    id: 'CancelButton'
                }).html('<i class="bi bi-x-lg"></i>');

                $('#table1 tbody tr').append($('<td>').append(checkButton).append(cancelButton));
            });

            $(document).on('click', '#CheckButton', function() {
                var administrationFee = $('#AdministrationFeeInput').val();
                var taxFee = $('#TaxFeeInput').val();

                $.post('/mtrading/updateFee',{
                    "administration_fee": administrationFee,
                    "tax": taxFee
                },function ($data){
                    alert($data.msg)
                    location.reload()
                });
            });

            $(document).on('click', '#CancelButton', function() {
                var administrationFee = $('#AdministrationFeeInput').val();
                var taxFee = $('#TaxFeeInput').val();

                $('#AdministrationFee').html($('<span>').text(administrationFee));
                $('#TaxFee').html($('<span>').text(taxFee));

                $('#CheckButton').parent('td').remove();
                $('#CancelButton').parent('td').remove();

                var columnIndex = $(this).closest('td').index();
                var table = $('#table1');
                table.find('tr').each(function() {
                    $(this).find('td').eq(columnIndex).show();
                });
            });

        });

        $('.editEnergy-bt').click(function () {
            var energyId = $(this).attr('id').split('-')[2];

            var modal = $('#editRenewableEnergy');

            // Make an AJAX request to fetch energy details
            $.get("/mtrading/getEnergyDetail", {
                "id": energyId
            }, function(data) {
                if (data.status === 1) {
                    $('#energyIdInput').val(energyId);
                    modal.find('input[name="title"]').val(data.data.title);
                    modal.find('input[name="description"]').val(data.data.description);
                    modal.find('input[name="type"]').val(data.data.type);
                    modal.find('input[name="price"]').val(data.data.market_price);
                    modal.find('input[name="price"]').val(data.data.market_price);
                    modal.modal('show');
                }
            });
        });


        $('.deleteEnergy-bt').click(function () {

            var energyId = $(this).attr('id').split('-')[2];
            var modal = $('#confirmModal');
            // Make an AJAX request to fetch energy details
            modal.find('#energyId').val(energyId);
        });

        $('.btn-view-order').click(function () {
                var orderId = $(this).attr('id').split('-')[2];

                var modal = $('#viewOrder');

                // Make an AJAX request to fetch energy details
                $.get("/mtrading/getOrderDetail", {
                    "id": orderId
                }, function(data) {
                    if (data.status === 1) {
                        var order = data.data;
                        modal.find('#ProductContent').text(order.store.energy.title + ' x ' + order.volume+" /kwh");
                        modal.find('#average_price').text("$ "+order.average_price);
                        modal.find('#Tax').text(order.tax+ " %");
                        modal.find('#Administration_Fee').text("$ "+order.administration_fee);
                        modal.find('#Market_Price').text("$ "+order.market_price);
                        modal.find('#trading_price').text("$ "+order.trading_price);
                        modal.find('#buyer-info').html("<span class='Trading-info'>Name:   "+order.buyer.name+"<br>Email:   "+order.buyer.email+"<br> Zone:   "+order.buyer.zone+"</span >");
                        modal.find('#seller-info').html("<span class='Trading-info'>Name: "+order.seller.name+"<br>Email:   "+order.seller.email+"<br> Zone:  "+order.seller.zone+"</span >");
                        modal.find('#order-info').html("<span class='Trading-info'>Order time:  "+order.created_at +"<br>Remark:   "+order.remark+"</span >");
                        // Update HTML witTh order details
                        modal.modal('show');
                    }
                });
            });

        $('#updateEnergyBtn').click(function() {
            var $form = $('#editRenewableEnergy form');

            var energyId =   $('#energyIdInput').val()

            var $url = "/mtrading/updateEnergy?id="+energyId; // Set the URL for updating the energy data
            var $data = {
                "title": $form.find('input[name="title"]').val(),
                "description": $form.find('input[name="description"]').val(),
                "type": $form.find('input[name="type"]').val(),
                "market_price": $form.find('input[name="price"]').val(),
                // Get other form field values as needed
            };

            $.post($url, $data, function($response) {
                alert($response.msg)
                location.reload()
            });
        });


        $('#confirm_delete_btn').click(function() {

            var energyId =   $('#confirmModal').find('#energyId').val();


            $.ajax({
                url: 'mtrading/deleteEnergy?id='+energyId,
                type: 'DELETE',
                success: function(result) {
                    alert(result.msg)
                    location.reload()
                }
            });
        });

        $('#saveEnergyBtn').click(function() {

            var $form = $('#addRenewableEnergy form');
            var $url = "mtrading/addNewEnergy";

// 创建FormData对象
            var formData = new FormData();

// 添加文本字段数据
            formData.append("title", $form.find('input[name="title"]').val());
            formData.append("description", $form.find('input[name="description"]').val());
            formData.append("type", $form.find('input[name="type"]').val());
            formData.append("market_price", $form.find('input[name="price"]').val());

// 添加图片文件
            var imageFile = $('#energyImage')[0].files[0];
            formData.append("image", imageFile);

// 使用$.ajax进行POST请求
            $.ajax({
                url: $url,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    alert(response.msg);
                    location.reload();
                }
            });

        });

    </script>
@endsection
