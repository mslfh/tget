@extends('layouts.app')

@section('content')

<link rel="stylesheet" href={{asset("assets/css/style.min.css")}}>
<link rel="stylesheet" href={{asset("assets/css/plugins/plugins.min.css")}}>
<link rel="stylesheet" href={{asset("assets/css/vendor/vendor.min.css")}}>

<!-- Start Feature Area -->
<div class="section">
    <br>
    <br>
    <br>
        <div class="row">
            <div class=" col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Energy Details </h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Trade your energy to save the environment. Check out the
                        energies available in the market.</p>
                </div>
            </div>
        </div>

<!-- Product Details Area Start -->
<div class="product-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                <!-- Swiper -->
                <div class="swiper-container zoom-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide zoom-image-hover">
                            <img class="img-responsive m-auto" src={{asset("assets/images/product-image/zoom-image/2.jpg")}}
                                 alt="">
                        </div>
                        <div class="swiper-slide zoom-image-hover">
                            <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/2.jpg"
                                 alt="">
                        </div>
                        <div class="swiper-slide zoom-image-hover">
                            <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/3.jpg"
                                 alt="">
                        </div>
                        <div class="swiper-slide zoom-image-hover">
                            <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/4.jpg"
                                 alt="">
                        </div>
                        <div class="swiper-slide zoom-image-hover">
                            <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/5.jpg"
                                 alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-container mt-20px zoom-thumbs ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="assets/images/product-image/small-image/1.jpg"
                                 alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="assets/images/product-image/small-image/2.jpg"
                                 alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="assets/images/product-image/small-image/3.jpg"
                                 alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="assets/images/product-image/small-image/4.jpg"
                                 alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="assets/images/product-image/small-image/5.jpg"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                <div class="product-details-content quickview-content ml-25px">
                    <h2>Wind</h2>
                    <div class="pricing-meta">
                        <ul class="d-flex">
                            <li class="new-price">$20.90</li>
                            <li class="old-price"><del>$30.90</del></li>
                        </ul>
                    </div>
                    <div class="pro-details-rating-wrap">
                        <div class="rating-product">
{{--                            <i class="fa fa-star"></i>--}}
{{--                            <i class="fa fa-star"></i>--}}
{{--                            <i class="fa fa-star"></i>--}}
{{--                            <i class="fa fa-star"></i>--}}
{{--                            <i class="fa fa-star"></i>--}}
                        </div>
                        <span class="read-review"><a class="reviews" href="#">( 2 Review )</a></span>
                    </div>
                    <div class="stock mt-30px">
                            <span class="avallabillty">Availability:
                                <span class="in-stock">
{{--                                    <i class="fa fa-check"></i>--}}
                                    Seller A
                                </span>

                                <span class="in-stock">
{{--                                    <i class="fa fa-check"></i>--}}
                                    Seller B
                                </span>

                                 <span class="in-stock">
{{--                                    <i class="fa fa-check"></i>--}}
                                    Seller C
                                </span>
                            </span>
                    </div>

                    <div class="stock mt-30px">
                            <span class="avallabillty">Stock:
                                <span class="in-stock mx-5">
{{--                                    <i class="fa fa-check"></i>--}}
                                 50
                                </span>
                            </span>
                    </div>

                    <p class="mt-30px mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmodol tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni nostrud
                        exercitation ullamco laboris </p>
                    <div class="pro-details-quality">
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />

                        </div>
{{--                        <span>/kwh</span>--}}
                        <div class="pro-details-cart">
                            <button type="button" class="add-cart buy-button" data-bs-toggle="modal"
                                    data-bs-target="#buyerModal" id="buyEnergyButton">Buy It Now</button>
{{--                            <button class="add-cart buy-button"> Buy It Now</button>--}}
                        </div>
{{--                        <div class="pro-details-compare-wishlist pro-details-wishlist ">--}}
{{--                            <a href="wishlist.html"><i class="pe-7s-like"></i></a>--}}
{{--                        </div>--}}
                    </div>
                    <div class="pro-details-categories-info pro-details-same-style d-flex">
                        <span>Categories: </span>
                        <ul class="d-flex">
                            <li>
                                <a href="#">Handmade, </a>
                            </li>
                            <li>
                                <a href="#">Furniture, </a>
                            </li>
                            <li>
                                <a href="#">Decore</a>
                            </li>
                        </ul>
                    </div>
                    <div class="pro-details-social-info pro-details-same-style d-flex">
                        <span>Share: </span>
                        <ul class="d-flex">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="payment-img">
                        <a href="#"><img src="assets/images//icons/payment.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- product details description area start -->

<!-- Buy Energy -->
<div class="modal" tabindex="-1" id="buyerModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Buy Available Energy</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-danger" id="error"></p>
                <form>
                    <div class="mb-3">
                        <label for="energyType">Energy Type</label>
                        <input type="text" class="form-control" id="energyType" value="Solar" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="availableVolume">Available Volume</label>
                        <input type="text" class="form-control" id="availableVolume" value="100" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="buyPrice">Buy Price</label>
                        <input type="text" class="form-control" id="buyPrice" value="1.9 /kWh" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="buyVolume">Buy Volume</label>
                        <input type="text" class="form-control" id="buyPrice" value="1000" readonly>
                    </div>
                </form>
                <div class="container" id="summaryDetail" style="display: none;">
                    <h3>Summary of the Price</h3>
                    <ul>
                        <li>Price (Buy volume x Buy price): $</li>
                        <li>Admin Fee: $</li>
                        <li>Tax Fee: $</li>
                        <li>Total Fee (Price + Admin Fee + tax): $</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
{{--                <button type="button" class="btn btn-danger" id="cancelButton" onclick="cancel()"--}}
{{--                        data-bs-dismiss="modal">Cancel</button>--}}
                <button type="button" class="btn btn-primary" id="buyCheckButton" onclick="checkBuyVolume()">Confirm</button>
                <button type="button" class="btn btn-primary" id="buySubmitButton" onclick="submitBuy()"
                        style="display: none;" data-bs-dismiss="modal">Submit</button>
            </div>
        </div>
    </div>
</div>

{{--<div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">--}}
{{--    <div class="container">--}}
{{--        <div class="description-review-wrapper">--}}
{{--            <div class="description-review-topbar nav">--}}
{{--                <a data-bs-toggle="tab" href="#des-details2">Information</a>--}}
{{--                <a class="active" data-bs-toggle="tab" href="#des-details1">Description</a>--}}
{{--                <a data-bs-toggle="tab" href="#des-details3">Reviews (02)</a>--}}
{{--            </div>--}}
{{--            <div class="tab-content description-review-bottom">--}}
{{--                <div id="des-details2" class="tab-pane">--}}
{{--                    <div class="product-anotherinfo-wrapper text-start">--}}
{{--                        <ul>--}}
{{--                            <li><span>Weight</span> 400 g</li>--}}
{{--                            <li><span>Dimensions</span>10 x 10 x 15 cm</li>--}}
{{--                            <li><span>Materials</span> 60% cotton, 40% polyester</li>--}}
{{--                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div id="des-details1" class="tab-pane active">--}}
{{--                    <div class="product-description-wrapper">--}}
{{--                        <p>--}}

{{--                            Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt--}}
{{--                            ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation--}}
{{--                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in--}}
{{--                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur--}}
{{--                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id--}}
{{--                            est laborum. Sed utlo perspiciatis unde omnis iste natus error sit voluptatem--}}
{{--                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore--}}
{{--                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam--}}
{{--                            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni--}}
{{--                            dolores eos qui ratione voluptatem sequi nesciunt.--}}

{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div id="des-details3" class="tab-pane">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-7">--}}
{{--                            <div class="review-wrapper">--}}
{{--                                <div class="single-review">--}}
{{--                                    <div class="review-img">--}}
{{--                                        <img src="assets/images/review-image/1.png" alt="" />--}}
{{--                                    </div>--}}
{{--                                    <div class="review-content">--}}
{{--                                        <div class="review-top-wrap">--}}
{{--                                            <div class="review-left">--}}
{{--                                                <div class="review-name">--}}
{{--                                                    <h4>White Lewis</h4>--}}
{{--                                                </div>--}}
{{--                                                <div class="rating-product">--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="review-left">--}}
{{--                                                <a href="#">Reply</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="review-bottom">--}}
{{--                                            <p>--}}
{{--                                                Vestibulum ante ipsum primis aucibus orci luctustrices posuere--}}
{{--                                                cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper--}}
{{--                                                euismod vehicula. Phasellus quam nisi, congue id nulla.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="single-review child-review">--}}
{{--                                    <div class="review-img">--}}
{{--                                        <img src="assets/images/review-image/2.png" alt="" />--}}
{{--                                    </div>--}}
{{--                                    <div class="review-content">--}}
{{--                                        <div class="review-top-wrap">--}}
{{--                                            <div class="review-left">--}}
{{--                                                <div class="review-name">--}}
{{--                                                    <h4>White Lewis</h4>--}}
{{--                                                </div>--}}
{{--                                                <div class="rating-product">--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                    <i class="fa fa-star"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="review-left">--}}
{{--                                                <a href="#">Reply</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="review-bottom">--}}
{{--                                            <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere--}}
{{--                                                cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper--}}
{{--                                                euismod vehicula.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-5">--}}
{{--                            <div class="ratting-form-wrapper pl-50">--}}
{{--                                <h3>Add a Review</h3>--}}
{{--                                <div class="ratting-form">--}}
{{--                                    <form action="#">--}}
{{--                                        <div class="star-box">--}}
{{--                                            <span>Your rating:</span>--}}
{{--                                            <div class="rating-product">--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="rating-form-style">--}}
{{--                                                    <input placeholder="Name" type="text" />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="rating-form-style">--}}
{{--                                                    <input placeholder="Email" type="email" />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-12">--}}
{{--                                                <div class="rating-form-style form-submit">--}}
{{--                                                    <textarea name="Your Review" placeholder="Message"></textarea>--}}
{{--                                                    <button class="btn btn-primary btn-hover-color-primary "--}}
{{--                                                            type="submit" value="Submit">Submit</button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- product details description area end -->

<!-- Start Footer Area -->
<footer class="footer section">
    <!-- Start Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-about">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/bule-logo.png" alt="#">
                                </a>
                            </div>
                            <p>Making the world a better place through developing renewable energy.</p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>Service</h3>
                            <ul>
                                <li><a href="">Market</a></li>
                                <li><a href="">History</a></li>
                                <li><a href="">Manage</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>Support</h3>
                            <ul>
                                <li><a href="">Pricing</a></li>
                                <li><a href="">Sell</a></li>
                                <li><a href="">Buy</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer newsletter">
                            <h3>Subscribe</h3>
                            <p>Our platform provides a revolutionary solution to the growing demand for renewable energy and the
                                need to reduce carbon emissions</p>
                            <form action="#" method="get" target="_blank" class="newsletter-form">
                                <input name="EMAIL" placeholder="Email address" required="required" type="email">
                                <div class="button">
                                    <button class="sub-btn">
                                        <image src="./assets/icon/send.png">
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Start Copyright Area -->
    <div class="copyright-area">
        <div class="container">
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <p class="copyright-text">© 2023 TaGET - All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area -->
</footer>
<!--/ End Footer Area -->
@endsection
