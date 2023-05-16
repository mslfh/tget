@extends('layouts.app')

@section('content')

    {{--        <link rel="stylesheet" href={{asset("assets/css/style.min.css")}}>--}}

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
                    <h3 class=form-title>Service Fee</h3>
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
                            <th scope="row">15.00</th>
                            <td>20.00</td>
                            <td>
                                <button class="btn btn-sm btn-default">
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
                                            <div id="orders">
                                                <div class="table_page table-responsive">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>May 10, 2018</td>
                                                            <td><span class="success">Completed</span></td>
                                                            <td>$25.00 for 1 item</td>
                                                            <td>
                                                                <div>
                                                                    <button class="btn btn-sm btn-default"><i class="bi bi-pencil-square"></i>
                                                                    </button>
                                                                    <button class="btn btn-sm btn-default"><i class="bi bi-trash3"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>May 10, 2018</td>
                                                            <td>Processing</td>
                                                            <td>$17.00 for 1 item</td>
                                                            <td><a href="cart.html" class="view">view</a></td>
                                                        </tr>
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
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>May 10, 2018</td>
                                                            <td><span class="success">Completed</span></td>
                                                            <td>$25.00 for 1 item</td>
                                                            <td>
                                                                <div class=button>
                                                                    <button href="#" data-bs-toggle="modal" class="btn btn-primary btn-sm"
                                                                            data-bs-target="#viewOrder">view
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>May 10, 2018</td>
                                                            <td>Processing</td>
                                                            <td>$17.00 for 1 item</td>
                                                            <td><a href="cart.html" class="view">view</a></td>
                                                        </tr>
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

{{--            <div class=" contact-form">--}}
{{--            asdasdas--}}
{{--            </div>--}}
    </div>



    <div class="modal" tabindex="-1" role="dialog" id="AddRenewableEnergy">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Renewable Energy</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <table>
                                <tr>
                                    <td>Title</td>
                                    <td><input type="input" class="form-control" placeholder="Enter title"></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><input type="input" class="form-control" placeholder="Enter Description"></td>
                                </tr>
                                <tr>
                                    <td>Type</td>
                                    <td><input type="input" class="form-control" placeholder="Enter Type"></td>
                                </tr>
                                <tr>
                                    <td>Price per kWh</td>
                                    <td><input type="input" class="form-control" placeholder="Enter Price per kWh"></td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td>
                                        <button type="file">Change image</button>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Update</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="updateDetails">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Renewable Energy</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <div style="text-align:center">
                                <img src="assets/images/solar.jpg" class="energyPlaceholerDetail"><br>
                                <button type="file" class="btn btn-light">Upload image</button>
                            </div>
                            <table>
                                <tr>
                                    <td>Title</td>
                                    <td><input type="input" class="form-control" placeholder="Enter title"
                                               value="On-grid solar"></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><input type="input" class="form-control" placeholder="Enter Description"
                                               value="On-grid means your solar system is tied to your local utility's GRID	">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Type</td>
                                    <td><input type="input" class="form-control" placeholder="Enter Type" value="Solar">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Price per kWh</td>
                                    <td><input type="input" class="form-control" placeholder="Enter Price per kWh"
                                               value="2.12"></td>
                                </tr>
                            </table>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Update</button>
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
                    <h4>Sell Your Energy</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    {{--                    <div class="col-lg-5 mt-md-30px mt-lm-30px">--}}
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        <li><span class="order-middle-left">Product Name X 1</span> <span
                                                class="order-price">$100 </span></li>
                                        <li><span class="order-middle-left">Product Name X 1</span> <span
                                                class="order-price">$100 </span></li>
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping</li>
                                        <li>Free shipping</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li>$100</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div id="faq" class="panel-group">
                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse"
                                                                           href="#my-account-1" class="collapsed"
                                                                           aria-expanded="true">Direct bank transfer</a>
                                                </h4>
                                            </div>
                                            <div id="my-account-1" class="panel-collapse collapse show"
                                                 data-bs-parent="#faq">

                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town,
                                                        Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse"
                                                                           href="#my-account-2" aria-expanded="false"
                                                                           class="collapsed">Check payments</a></h4>
                                            </div>
                                            <div id="my-account-2" class="panel-collapse collapse"
                                                 data-bs-parent="#faq">

                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town,
                                                        Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse"
                                                                           href="#my-account-3">Cash on delivery</a>
                                                </h4>
                                            </div>
                                            <div id="my-account-3" class="panel-collapse collapse"
                                                 data-bs-parent="#faq">

                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town,
                                                        Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Place-order mt-25">
                            <a class="btn-hover" href="#">Place Order</a>
                        </div>
                        {{--                </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
