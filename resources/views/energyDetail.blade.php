@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href={{asset("css/energyDetail.css")}}>

    <!-- Start Feature Area -->
    <div class="feature section" style="padding-bottom: 0px">
        <br>
        <br>
        <br>
        <div class="row">
            <div class=" col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Energy Details </h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Trade your energy to save the environment. Check out
                        the
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

                                <input style="display: none" id="energyId" value="{{$energy['id']}}">
                                <input style="display: none" id="storeId" value="0">
                                <input style="display: none" id="sellerId" value="0">
                                <div class="swiper-slide zoom-image-hover">
                                    <img class="img-responsive m-auto" src={{$energy['image']}}
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content ml-25px">
                            <h2 id="energy_title">{{$energy['title']}} </h2>
                            <div class="pricing-meta">
                                <ul class="d-flex">
                                    <li class="new-price" id="energyPrice">${{$energy['price']}}</li>
                                </ul>
                            </div>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <img height="20px" src={{asset("assets/images/trading/star.png")}} alt="">
                                    <img height="20px" src={{asset("assets/images/trading/star.png")}} alt="">
                                    <img height="20px" src={{asset("assets/images/trading/star.png")}} alt="">
                                    <img height="20px" src={{asset("assets/images/trading/star.png")}} alt="">
                                    <img height="20px" src={{asset("assets/images/trading/star.png")}} alt="">
                                </div>
                            </div>
                            <div class="stock mt-30px">
                                <span class="avallabillty">Availability:
                                    @foreach($storeList as $store)
                                        <a href="#" data-current-volume="{{ $store['current_volume'] }}">
                                        <span class="in-stock">
                                           &nbsp; {{$store['seller']['name']}}; &nbsp;
                                        </span>
                                            <input style="display: none" id="seller_Id" value="{{$store['seller']['id']}}">
                                            <input style="display: none" id="store_Id" value="{{$store['id']}}">
                                    </a>
                                    @endforeach
                                </span>
                            </div>

                            <div class="stock mt-30px">
                                <span class="avallabillty">Stock:
                                    <span class="in-stock mx-5" id="current-volume">  {{$storeList[0]['current_volume'].' kWh'}}
                                    </span>
                                </span>
                            </div>

                            <p class="mt-30px mb-0">{{$energy['description']}} </p>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1"/>
                                </div>
                                <div class="pro-details-cart">
                                    <button type="button" class="add-cart buy-button" data-bs-toggle="modal"
                                            data-bs-target="#buyerModal" id="buyEnergyButton">Buy It Now
                                    </button>
                                </div>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex">
                                <span>Zone: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">{{$energy['zone']}} </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex">
                                <span>Categories: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#" id="energy_Type">{{$energy['type']}} </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="pro-details-social-info pro-details-same-style d-flex">
                                <span>Share: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a> <i class="bi bi-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a> <i class="bi bi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a> <i class="bi bi-google"></i></a>
                                    </li>
                                    <li>
                                        <a> <i class="bi bi-youtube"></i></a>
                                    </li>
                                </ul>
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
                            <label for="Title">Energy Title</label>
                            <input type="text" class="form-control" id="energyTitleInput" value="100" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="buyPrice">Buy Price</label>
                            <input type="text" class="form-control" id="buyPrice" value="1.9 /kWh" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="buyVolume">Buy Volume</label>
                            <input type="text" class="form-control" id="buyVolume" value="1000" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="buyVolume">Remark</label>
                            <input type="text" class="form-control" id="remark" >
                        </div>
                    </form>
                    <div class="container" id="summaryDetail" style="display: none;">
                        <h3>Summary of the Price</h3>
                        <ul>
                            <li>Price (Buy volume x Buy price): $<span id="total_price"></span></li>
                            <li>Admin Fee: ${{$tax['administration_fee']}}</li>
                            <li>Tax Fee: $<span id="tax"></span></li>
                            <li>Total: (Price + Admin Fee + tax): $<span id="total_fee"></span></li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    {{--                <button type="button" class="btn btn-danger" id="cancelButton" onclick="cancel()"--}}
                    {{--                        data-bs-dismiss="modal">Cancel</button>--}}
                    <button type="button" class="btn btn-primary" id="buyCheckButton" onclick="checkBuyVolume()">
                        Confirm
                    </button>
                    <button type="button" class="btn btn-primary" id="buySubmitButton" onclick="submitBuy()"
                            style="display: none;" data-bs-dismiss="modal">Submit
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {

            // 添加点击事件监听器
            $('#buyEnergyButton').click(function() {
                var energyTypeInput = $('#energyType');
                var buyPrice = $('#buyPrice');
                var energyTitleInput = $('#energyTitleInput');
                var buyVolume = $('#buyVolume');

                // 获取商品信息和购买数量
                var energyType = $('#energy_Type').text(); // 这里是示例，根据实际情况获取商品类型
                var price = $('#energyPrice').text(); // 这里是示例，根据实际情况获取商品类型
                var title = $('#energy_title').text(); // 这里是示例，根据实际情况获取商品类型
                var volume = $('input[name="qtybutton"]').val(); // 获取购买数量输入框的值

                // 将信息填充到模态框中的表单字段中
                energyTypeInput.val(energyType);
                energyTitleInput.val(title);
                buyVolume.val(volume);
                buyPrice.val(price);
            });


            $('a[data-current-volume]').click(function (e) {
                e.preventDefault();

                $("#sellerId").val( $(this).find('input#seller_Id').val())
                $("#storeId").val( $(this).find('input#store_Id').val())
                // 移除之前的样式
                $('a[data-current-volume] span').removeClass('active-span');

                var currentVolume = $(this).data('current-volume');
                $('#current-volume').text(currentVolume + ' mL');

                $(this).find('span').addClass('active-span');
            });
        });
        function submitBuy(){

            if( $("#sellerId").val() == "0"   ){
                $("#sellerId").val({{$storeList[0]['seller']['id']}})
            }
            if( $("#storeId").val() == "0" ){
                $("#storeId").val({{$storeList[0]['id']}})
            }

            $("#buySubmitButton").css('display','none')
            $("#buyCheckButton").css('display','')
            $("#summaryDetail").css('display','none')
            $("#buyerMarketList").css('display','')

            var url = "/trading/submitOrder";
            var data = {
                "energy_id":  $("#energyId").val(),
                "volume": $('#buyVolume').val(),
                "seller_id": $("#sellerId").val( ),
                "store_id":  $("#storeId").val( ),
                "remark":  $("#remark").val()
            };
            console.log(data)
            $.post(url, data, function(response) {
                alert(response.msg)
                location.reload()
            });

        }

        function checkBuyVolume(){
            var availableVolume = $('#current-volume').html().match(/\d+/)[0];
            let inputVolume = $("#buyVolume").val()

            if(!inputVolume){
                alert("Please enter the amount of volume to buy")
                return
            }

            if(inputVolume > availableVolume){
                $("#error").html("Buy Volume exceed the Available volume. Please check again")
            } else {
                var buyPrice = $('#buyPrice').val().match(/\d+/)[0];
                var buyVolume = $('#buyVolume').val().match(/\d+/)[0];

                var tax = buyPrice * buyVolume * {{$tax['tax']}} / 100;
                var fee =  buyPrice * buyVolume + {{$tax['administration_fee']}}
                    + tax ;

                $('#total_price').html(buyPrice * buyVolume )
                $('#tax').html(tax)
                $('#total_fee').html(fee)
                $("#buyCheckButton").css('display','none')
                $("#error").html("")
                $("#buySubmitButton").css('display','')
                // Display the summary price details
                // In the future change it with proper function to display the selected energy
                $("#summaryDetail").css('display','')
            }
        }
    </script>
@endsection
