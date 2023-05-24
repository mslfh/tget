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
                        <p class="wow fadeInUp" data-wow-delay=".6s">Trade your energy to save the environment. Check
                            out the
                            energies available in the market.</p>
                    </div>


                    @if($role_id != 2 && $role_id != 1)
                        <div class="col-12" style="padding-left: 200px;">
                            <button type="button" class="btn btn-outline-success sell-button mb-3"
                                    data-bs-toggle="modal"
                                    data-bs-target="#sellerModal" id="sellEnergyButton">Sell Energy
                            </button>
                        </div>
                    @endif
                </div>

            </div>
            <div class="row">
                <div class="row">
                    @if(count($list)==0)
                        <h2 class="wow fadeInUp" data-wow-delay=".4s" style="text-align: center; color: #9c9191;">NO ENERGY...</h2>
                    @endif
                    @foreach($list as $item)
                        <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".{{2+$loop->index*2}}s">
                            <div class="feature-box">
                                <div class="tumb">
                                    @if(isset($item['vol']) )

                                    <a class="btn btn-link" href="/trading/energyDetail?id={{$item['id']}}">
                                        <img src="{{$item['image']}}" alt="{{$item['title']}}">
                                        <br>
                                    </a>
                                    @else
                                        <a class="btn btn-a-no" >
                                            <img src="{{$item['image']}}" alt="{{$item['title']}}">
                                            <br>
                                        </a>
                                    @endif
                                </div>
                                <h4 class="solar1">{{$item['title']}}</h4>
                                <p style="display: -webkit-box;
                                  -webkit-line-clamp: 2;
                                  -webkit-box-orient: vertical;
                                  overflow: hidden;
                                  text-overflow: ellipsis;">{{$item['description']}}</p>
                                <p >Volume: {{$item['vol']." kWh + "}}</p>
                                <p >Zone: {{$item['zone']}}</p>
                                <p >Price: ${{$item['price']}}/kWh </p>
                                <p style="color: grey">Created: {{$item['time']}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <div class="modal" tabindex="-1" id="sellerModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Sell Available Energy</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-danger" id="error"></p>
                    <div class="mb-3">
                        <label for="energySel">Energy</label>
                        <select class="form-select" value="" style="font-weight:bold" name="energySel"
                                id="energySel">
                            @foreach( $Energy as $Ener)
                                @if(isset($Ener['records'][0]["market_price"]))
                                <option value="{{$Ener['id']}}">{{$Ener['title']." ($".$Ener['records'][0]["market_price"].")"}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Sell Price</label>
                        <input  class="form-control" id="sellPrice"
                               placeholder="please input your selling price.">
                    </div>
                    <div class="mb-3">
                        <label for="buyVolume">Volume</label>
                        <input type="number" class="form-control" id="sellVolume"
                               placeholder="please input the volume.">
                    </div>
                    <div class="mb-3">
                        <label for="buyVolume">Zone</label>
                        <select class="form-select" name="location" id="sellZone">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="sellEnergy">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--Pagination-->
    <div class="pagination justify-content-center">
        <ul class="pagination-list">
            <!-- Previous Page Link -->
            @if ($list->onFirstPage())
                <li class="previous disabled"><a href="javascript:void(0)">Prev</a></li>
            @else
                <li class="previous"><a href="{{ $list->previousPageUrl() }}">Prev</a></li>
            @endif

        <!-- Pagination Elements -->
            @for ($i = 1; $i <= $list->lastPage(); $i++)
                @if ($i == $list->currentPage())
                    <li class="active"><a href="javascript:void(0)">{{ $i }}</a></li>
                @else
                    <li><a href="{{ $list->url($i) }}">{{ $i }}</a></li>
                @endif
            @endfor

        <!-- Next Page Link -->
            @if ($list->hasMorePages())
                <li class="next"><a href="{{ $list->nextPageUrl() }}">Next</a></li>
            @else
                <li class="next disabled"><a href="javascript:void(0)">Next</a></li>
            @endif
        </ul>
    </div>

    <script>

        $('#sellEnergy').click(function () {

            var $url = "/trading/submitEnergy";

            var formData = new FormData();

            if (!$.isNumeric($('#sellPrice').val()) || parseInt($('#sellPrice').val()) < 0) {
                alert("Please enter a valid number for the selling price.");
                return
            }

            if (!$.isNumeric($('#sellVolume').val()) || parseInt($('#sellVolume').val())< 0) {
                alert("Please enter a valid number for the selling volume.");
                return
            }


            var marketPriceText = $('#energySel option:selected').text().match(/\(\$(\d+)\)/);
            if (marketPriceText) {
                var marketPrice = parseInt(marketPriceText[1]);
                var sellPrice = parseInt($('#sellPrice').val());
                var priceDifference = Math.abs(sellPrice - marketPrice);
                var priceThreshold = marketPrice * 0.1; // 10% threshold

                if (priceDifference >= priceThreshold) {
                    alert("Selling price is outside ±10% of market price($"+marketPrice+").");
                    return
                }
            }

            formData.append("energy_id",$('#energySel').val());
            formData.append("selling_price", $('#sellPrice').val() );
            formData.append("volume",$('#sellVolume').val() );
            formData.append("location",$('#sellZone').val());
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

        $('a.btn-a-no').click(function (){
            alert('No Available Volume')
        });


    </script>
@endsection
