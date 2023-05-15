@extends('layouts.app')

@section('content')
<!-- Start Feature Area -->
<div class="feature section">
    <br>
    <br>
    <br>
    <div class="container">

        <div class="row">
            <div class=" col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Energy Market List </h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Trade your energy to save the environment. Check out the
                        energies available in the market.</p>
                </div>
                <div class="col-12">
                <button type="button" class="btn btn-outline-success sell-button mb-3" data-bs-toggle="modal"
                        data-bs-target="#sellerModal" id="sellEnergyButton">Sell Energy</button>

                </div>
            </div>



        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                <a class="btn btn-link"  href="{{ route('energyDetail') }}">
                    <div class="feature-box">
                        <div class="tumb">
                            <img src="./assets/images/trading/hydro.png" alt="solar energy">>
                            <br>
                        </div>
                        <h4 class="solar1">Solar Energy</h4>
                        <p>Energy produced from sunrays</p>
                        <p>Seller: John Doe</p>
                        <p>Volume: 100kwh</p>
                        <p>Zone: A</p>
                        <p>Price: $2/kWh</p>
                        <p>Created: 05 Jan 2023</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="feature-box">
                    <div class="tumb">
                        <img src="./assets/images/trading/solar2.png" alt="wind energy">
                    </div>
                    <h4 class="wind1">Wind Energy</h4>
                    <p>Energy produced from wind turbines</p>
                    <p>Seller: John Doe</p>
                    <p>Volume: 195kwh</p>
                    <p>Zone: A</p>
                    <p>Price: $2/kWh</p>
                    <p>Created: 28 Jan 2023</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                <div class="feature-box">
                    <div class="tumb">
                        <img src="./assets/images/trading/wind.png" alt="solar energy">
                    </div>
                    <h4 class="solar=2">Solar Energy</h4>
                    <p>Energy produced from sunrays</p>
                    <p>Seller: Kath Lene</p>
                    <p>Volume: 150kwh</p>
                    <p>Zone: C</p>
                    <p>Price: $2.50/kWh</p>
                    <p>Created: 12 Feb 2023</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                <div class="feature-box">
                    <div class="tumb">
                        <img src="./assets/images/trading/hydro.png" alt="hydro energy">
                    </div>
                    <h4 class="hydro1">Hydro Energy</h4>
                    <p>Energy produced from hydro power</p>
                    <p>Seller: Mark Sean</p>
                    <p>Volume: 150kwh</p>
                    <p>Zone: C</p>
                    <p>Price: $1.80/kWh</p>
                    <p>Created: 19 Feb 2023</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="feature-box">
                    <div class="tumb">
                        <img src="./assets/images/trading/wind.png" alt="wing energy">
                    </div>
                    <h4 class="wind2">Wind Energy</h4>
                    <p>Energy produced from wind turbines</p>
                    <p>Seller: Sam Smith</p>
                    <p>Volume: 100kwh</p>
                    <p>Zone: B</p>
                    <p>Price: $2/kWh</p>
                    <p>Created: 11 Mar 2023</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                <div class="feature-box">
                    <div class="tumb">
                        <img src="./assets/images/trading/solar2.png" alt="solar energy">
                    </div>
                    <h4 class="solar3">Solar Energy</h4>
                    <p>Energy produced from sunrays</p>
                    <p>Seller: Sam Smith</p>
                    <p>Volume: 250kwh</p>
                    <p>Zone: B</p>
                    <p>Price: $2/kWh</p>
                    <p>Created: 22 Mar 2023</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Features Area -->

<!-- Sell or Buy Energy -->
<div class="bottom-container" style="text-align: center;">
    <button type="button" class="btn btn-outline-success sell-button mb-3" data-bs-toggle="modal"
            data-bs-target="#sellerModal" id="sellEnergyButton">Sell Energy</button>
    <div class="modal" tabindex="-1" id="sellerModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Sell Your Energy</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="sellError" class="text-danger"></p>
                    <form>
                        <div class="mb-3">
                            <label for="inputEnergyType">Energy Type</label>
                            <select id="inputEnergyType" class="form-control">
                                <option selected>Choose...</option>
                                <option>Solar</option>
                                <option>Wind</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputSellVolume">Sell Volume</label>
                            <input type="number" class="form-control" id="inputSellVolume" value="">
                        </div>
                        <div class="mb-3">
                            <label for="inputSellPrice">Sell Price</label>
                            <input type="number" class="form-control" id="inputSellPrice" value="">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="cancelButton" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="sellSubmitButton" onclick="submitSell()">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Buy Energy -->
    <button type="button" class="btn btn-outline-primary buy-button mb-3" data-bs-toggle="modal"
            data-bs-target="#buyerModal" id="buyEnergyButton">Buy Energy</button>
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
                            <input type="number" class="form-control" id="buyVolume" value="">
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
                    <button type="button" class="btn btn-danger" id="cancelButton" onclick="cancel()"
                            data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="buyCheckButton" onclick="checkBuyVolume()">Check</button>
                    <button type="button" class="btn btn-primary" id="buySubmitButton" onclick="submitBuy()"
                            style="display: none;" data-bs-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" id="sellerModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Sell Your Energy</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="sellError" class="text-danger"></p>
                <form>
                    <div class="mb-3">
                        <label for="inputEnergyType">Energy Type</label>
                        <select id="inputEnergyType" class="form-control">
                            <option selected>Choose...</option>
                            <option>Solar</option>
                            <option>Wind</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputSellVolume">Sell Volume</label>
                        <input type="number" class="form-control" id="inputSellVolume" value="">
                    </div>
                    <div class="mb-3">
                        <label for="inputSellPrice">Sell Price</label>
                        <input type="number" class="form-control" id="inputSellPrice" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="cancelButton" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="sellSubmitButton" onclick="submitSell()">Submit</button>
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
