@extends('layouts.home')

@section('content')


    <!-- Start play Area -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src={{asset("assets/images/play/project-1.png")}} class="d-block" style="width:100%; height: 780px;">
            </div>
            <div class="carousel-item">
                <img src={{asset("assets/images/play/project-2.png")}} class="d-block" style="width:100%;height: 780px;">
            </div>
            <div class="carousel-item">
                <img src={{asset("assets/images/play/project-3.png")}} class="d-block" style="width:100%;height: 780px;">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <!-- End play Area -->

    <!-- Start Hero Area -->
    <section class="hello-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h4 class="wow fadeInUp" data-wow-delay=".2s">Start Investing & Earn Money</h4>
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">Say Hello
                            to <br>
                            <span>
                                <img class="text-shape" src={{asset("assets/images/hero/text-shape.svg")}} alt="#">
                                renewable energy
                            </span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Renewable energy sources are becoming increasingly <br>
                            cost-competitive with traditional fossil fuels, making<br> them a more viable option for widespread use.
                        </p>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="login.html" id="use-now-button">Use Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Feature Area -->
    <div class="feature section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Why choose us</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Our features</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many new energy available, we can provide all you
                            want in this market.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="feature-box">
                        <div class="tumb">
                            <img src={{asset("assets/images/features/feature-icon-3.png")}} alt="">
                        </div>
                        <h4 class="text-title">Instant Trading</h4>
                        <p>You can freely choose or sell new energy products instantly, only need simple operation.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="feature-box">
                        <div class="tumb">
                            <img src={{asset("assets/images/features/feature-icon-1.png")}} alt="">
                        </div>
                        <h4 class="text-title">One-to-One Exchage</h4>
                        <p height="20px">When you choose to buy, one-to-one seller selection will make you more comfortable,</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <div class="feature-box">
                        <div class="tumb">
                            <img src={{asset("assets/images/features/feature-icon-2.png")}} alt="">
                        </div>
                        <h4 class="text-title">Safe & Secure</h4>
                        <p>We have a strict security plan to protect your property and sound solution to solve transaction dispute.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <!-- Start Market Area -->
    <section class="market  section">
        <div class=container>
            <div class=row>
                <div class=col-12>
                    <div class=section-title>
                        <h3 class="wow zoomIn" data-wow-delay=.2s>Market</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=.4s>Our Renewable Energy </h2>
                        <p class="wow fadeInUp" data-wow-delay=.6s>Renewable energy is derived from natural resources that can be
                            replenished over time, such as wind, solar, and hydro power.</p>
                    </div>
                </div>
            </div>

            <div class="row testimonial-slider" id="energy-list">

                <div class="col-lg-6 col-12 ">
                    <div class=single-testimonial>
                        <div class=inner-content>
                            <div class=quote-icon> <i class="lni lni-quotation"></i> </div>
                            <div class=text>
                                <p>“Energy from the sun's rays that can be converted into electricity using solar panels or used
                                    directly for heating and lighting.”</p>
                            </div>
                            <div class=author> <img src={{asset("assets/images/energy-list/solar.jpg")}} alt="#">
                                <h4 class=name>Solar Energy <span class=deg>Sun's rays</span> </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 ">
                    <div class=single-testimonial>
                        <div class=inner-content>
                            <div class=quote-icon> <i class="lni lni-quotation"></i> </div>
                            <div class=text>
                                <p>“Energy harnessed from the wind through wind turbines that convert it into electricity for homes and
                                    businesses.”</p>
                            </div>
                            <div class=author> <img src={{asset("assets/images/energy-list/wind.jpg")}} alt="#">
                                <h4 class=name>Wind Energy <span class=deg>Wind turbines</span> </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 ">
                    <div class=single-testimonial>
                        <div class=inner-content>
                            <div class=quote-icon> <i class="lni lni-quotation"></i> </div>
                            <div class=text>
                                <p>“Energy derived from the movement of water through dams or turbines, providing a reliable source of
                                    clean electricity.”</p>
                            </div>
                            <div class=author> <img src={{asset("assets/images/energy-list/hydropower.jpg")}} alt="#">
                                <h4 class=name>Hydropower <span class=deg>Water</span> </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 ">
                    <div class=single-testimonial>
                        <div class=inner-content>
                            <div class=quote-icon> <i class="lni lni-quotation"></i> </div>
                            <div class=text>
                                <p>“Energy derived from the Earth's internal heat through the use of geothermal power plants, providing
                                    a constant and sustainable source of electricity.”</p>
                            </div>
                            <div class=author> <img src={{asset("assets/images/energy-list/geothermal.jpg")}} alt="#">
                                <h4 class=name>Geothermal Energy <span class=deg>Earth's heat </span> </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 ">
                    <div class=single-testimonial>
                        <div class=inner-content>
                            <div class=quote-icon> <i class="lni lni-quotation"></i> </div>
                            <div class=text>
                                <p>“Energy from the sun's rays that can be converted into electricity using solar panels or used
                                    directly for heating and lighting.”</p>
                            </div>
                            <div class=author> <img src={{asset("assets/images/energy-list/solar.jpg")}} alt="#">
                                <h4 class=name>Solar Energy <span class=deg>Sun's rays</span> </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 ">
                    <div class=single-testimonial>
                        <div class=inner-content>
                            <div class=quote-icon> <i class="lni lni-quotation"></i> </div>
                            <div class=text>
                                <p>“Energy derived from organic materials such as wood, crops, and waste that can be burned to produce
                                    heat or electricity, providing a clean and renewable energy source.”</p>
                            </div>
                            <div class=author> <img src={{asset("assets/images/energy-list/biomass.jpg")}} alt="#">
                                <h4 class=name>Biomass Energy <span class=deg>Organic materials</span> </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 ">
                    <div class=single-testimonial>
                        <div class=inner-content>
                            <div class=quote-icon> <i class="lni lni-quotation"></i> </div>
                            <div class=text>
                                <p>“Energy harnessed from the ocean's waves, tides, and currents through wave energy converters and
                                    tidal power turbines, offering a predictable and reliable source of electricity.”</p>
                            </div>
                            <div class=author> <img src={{asset("assets/images/energy-list/ocean.jpg")}} alt="#">
                                <h4 class=name>Ocean Energy <span class=deg>Ocean</span> </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Market Area -->

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
                                        <img src={{asset("assets/images/logo/bule-logo.png")}} alt="#">
                                    </a>
                                </div>
                                <p>Making the world a better place through developing newable energy.</p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Service</h3>
                                <ul>
                                    <li><a href="">Market</a></li>
                                    <li><a href="">Histroy</a></li>
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
                                        <button class="sub-btn"><image src={{asset("assets/icon/send.png")}}>
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

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <image src="{{asset("assets/icon/up.png")}}></image>
    </a>
    <!-- ========================= tiny-slide ========================= -->
    <script>tns({ container: '.testimonial-slider', items: 3, slideBy: 'page', autoplay: false, mouseDrag: true, gutter: 0, nav: true, controls: false, responsive: { 0: { items: 1, }, 540: { items: 1, }, 768: { items: 2, }, 992: { items: 2, }, 1170: { items: 3, } } }); var cu = new counterUp({ start: 0, duration: 2000, intvalues: true, interval: 100, append: " ", }); cu.start();</script>
    </script>



@endsection
