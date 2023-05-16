@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/masterTrading.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/trading.css" />

    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/count-up.min.js"></script>
    <script src="js/trading.js"></script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .energyPlaceholer {
            border-radius: 50%;
            width: 30px;
            height: 30px;
        }

        .energyPlaceholerDetail {
            border-radius: 50%;
            width: 70px;
            height: 70px;
        }

    </style>
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="css/index.css" />
    <!-- ========================= JS here ========================= -->
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <div class="renewable-energy section">
        <div class=container>
            <div class=row>
                <div class="col-12">
                    <div class=contact-form>
                        <br><br>
                        <h3 class=form-title>Service Fee</h3>
                        <table style="width: 70%;">
                            <tr>
                                <td>Administration Fee ($)</td>
                                <td><input type="text" class="form-control" placeholder="Enter Name" value="10"></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm">Update</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Tax Fee (%)</td>
                                <td><input type="text" class="form-control" placeholder="Enter Name" value="5.4"></td>
                                <td><button type="button" class="btn btn-primary btn-sm">Update</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=container>
            <br><br>
            <div class=row>
                <div class="col-12">
                    <div class=contact-form>
                        <h3 class=form-title>Renewable Energy Types and Prices</h3>
                        <div class=col-12>

                            <div class=button>
                                <button href="#" data-bs-toggle="modal"  class="btn btn-primary btn-sm" data-bs-target="#AddRenewableEnergy">Add Renewable Enery</button>
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
                                                    <div style="text-align:center">
                                                        <img src="assets/images/energy.png" class="energyPlaceholerDetail"><br>
                                                        <button type="file" class="btn btn-light">Upload image</button>
                                                    </div>
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



                        </div>
                        <br>
                        <table>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Price per kWh</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td><img src="assets/images/solar.jpg" class="energyPlaceholer"></td>
                                <td>Utility-Scale Wind</td>
                                <td>This defines wind turbines that range in size from 100 kilowatts to several megawatts</td>
                                <td>Wind</td>
                                <td>0.56</td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#updateDetails"
                                            class="btn btn-primary btn-sm">Modify</button>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/solar.jpg" class="energyPlaceholer"></td>
                                <td>On-grid solar</td>
                                <td>On-grid means your solar system is tied to your local utility's GRID</td>
                                <td>Solar</td>
                                <td>2.12</td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#updateDetails"
                                            class="btn btn-primary btn-sm">Modify</button>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/solar.jpg" class="energyPlaceholer"></td>
                                <td>Hybrid solar</td>
                                <td>Hybrid solar power systems offer the best of both worlds</td>
                                <td>Solar</td>
                                <td>3.76</td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#updateDetails"
                                            class="btn btn-primary btn-sm">Modify</button>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

{{--        <div class=container><br><br>--}}
{{--            <div class=row>--}}
{{--                <div class=col-12>--}}
{{--                    <div class=container>--}}
{{--                        <div class=row>--}}
{{--                            <div class="col-12">--}}
{{--                                <div class=contact-form>--}}
{{--                                    <h3 class=form-title>Trading History</h3><br>--}}
{{--                                    <table>--}}
{{--                                        <tr>--}}
{{--                                            <th>Seller</th>--}}
{{--                                            <th>Buyer</th>--}}
{{--                                            <th>Type of Energy</th>--}}
{{--                                            <th>Volume (kWh)</th>--}}
{{--                                            <th>Price per kWh</th>--}}
{{--                                            <th>Total Price</th>--}}
{{--                                            <th>Trading Time</th>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>Seller 1</td>--}}
{{--                                            <td>Buyer 1</td>--}}
{{--                                            <td>Wind</td>--}}
{{--                                            <td>1000</td>--}}
{{--                                            <td>0.15</td>--}}
{{--                                            <td>150.00</td>--}}
{{--                                            <td>13 March 2023 09:00</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>Seller 2</td>--}}
{{--                                            <td>Buyer 2</td>--}}
{{--                                            <td>Hydro</td>--}}
{{--                                            <td>500</td>--}}
{{--                                            <td>0.12</td>--}}
{{--                                            <td>60.00</td>--}}
{{--                                            <td>14 March 2023 10:00</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>Seller 3</td>--}}
{{--                                            <td>Buyer 3</td>--}}
{{--                                            <td>Solar</td>--}}
{{--                                            <td>2500</td>--}}
{{--                                            <td>0.10</td>--}}
{{--                                            <td>250.00</td>--}}
{{--                                            <td>15 March 2023 05:00</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>Seller 3</td>--}}
{{--                                            <td>Buyer 3</td>--}}
{{--                                            <td>Solar</td>--}}
{{--                                            <td>2500</td>--}}
{{--                                            <td>0.10</td>--}}
{{--                                            <td>250.00</td>--}}
{{--                                            <td>15 March 2023 05:00</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>Seller 3</td>--}}
{{--                                            <td>Buyer 3</td>--}}
{{--                                            <td>Solar</td>--}}
{{--                                            <td>2500</td>--}}
{{--                                            <td>0.10</td>--}}
{{--                                            <td>250.00</td>--}}
{{--                                            <td>15 March 2023 05:00</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>Seller 3</td>--}}
{{--                                            <td>Buyer 3</td>--}}
{{--                                            <td>Solar</td>--}}
{{--                                            <td>2500</td>--}}
{{--                                            <td>0.10</td>--}}
{{--                                            <td>250.00</td>--}}
{{--                                            <td>15 March 2023 05:00</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>Seller 3</td>--}}
{{--                                            <td>Buyer 3</td>--}}
{{--                                            <td>Solar</td>--}}
{{--                                            <td>2500</td>--}}
{{--                                            <td>0.10</td>--}}
{{--                                            <td>250.00</td>--}}
{{--                                            <td>15 March 2023 05:00</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>Seller 3</td>--}}
{{--                                            <td>Buyer 3</td>--}}
{{--                                            <td>Solar</td>--}}
{{--                                            <td>2500</td>--}}
{{--                                            <td>0.10</td>--}}
{{--                                            <td>250.00</td>--}}
{{--                                            <td>15 March 2023 05:00</td>--}}
{{--                                        </tr>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class=container><br><br>
            <div class=row>
                <div class=col-12>
                    <div class=container>
                        <div class=row>
                            <div class="col-12">
                                <div class="tab-pane" id="orders">
                                    <h4>Trading History</h4>
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
                                                <td>$25.00 for 1 item </td>
                                                <td>
                                                    <div class=button>
                                                        <button href="#" data-bs-toggle="modal"  class="btn btn-primary btn-sm" data-bs-target="#viewOrder">view</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>May 10, 2018</td>
                                                <td>Processing</td>
                                                <td>$17.00 for 1 item </td>
                                                <td><a href="cart.html" class="view">view</a></td>
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
                                    <td><button type="file">Change image</button></td>
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
                                    <td><input type="input" class="form-control" placeholder="Enter title" value="On-grid solar"></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><input type="input" class="form-control" placeholder="Enter Description"
                                               value="On-grid means your solar system is tied to your local utility's GRID	"></td>
                                </tr>
                                <tr>
                                    <td>Type</td>
                                    <td><input type="input" class="form-control" placeholder="Enter Type" value="Solar"></td>
                                </tr>
                                <tr>
                                    <td>Price per kWh</td>
                                    <td><input type="input" class="form-control" placeholder="Enter Price per kWh" value="2.12"></td>
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
                                                                       href="#my-account-3">Cash on delivery</a></h4>
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
