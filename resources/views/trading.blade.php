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


                @if($role != 2 && $role != 0)
                <div class="col-12">
                <button type="button" class="btn btn-outline-success sell-button mb-3" data-bs-toggle="modal"
                        data-bs-target="#sellerModal" id="sellEnergyButton">Sell Energy</button>
                </div>
                @endif
            </div>

        </div>
        <div class="row">
            <div class="row">
                @foreach($list as $item)
                    <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".{{2+$loop->index*2}}s">
                        <div class="feature-box">
                            <div class="tumb">
                                <a class="btn btn-link" href="/trading/energyDetail?id={{$item['id']}}">
                                    <img src="./assets/images/trading/hydro.png" alt="solar energy">
                                    <br>
                                </a>
                            </div>
                            <h4 class="solar1">{{$item['title']}}</h4>
                            <p>{{$item['description']}}</p>
                            <p>Volume: {{$item['vol']."kWh + "}}</p>
                            <p>Zone: {{$item['zone']}}</p>
                            <p>Price: ${{$item['price']}}/kWh</p>
                            <p>Created: {{$item['created_at']}}</p>
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
                <form>
                    <div class="mb-3">
                        <label for="energyType">Energy Type</label>
                        <select class="form-select" value="" style="font-weight:bold" name="energyType" id="energyType">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Title">Energy Title</label>
                        <input type="text" class="form-control" id="energyTitleInput" value="">
                    </div>
                    <div class="mb-3">
                        <label >Sell Price</label>
                        <input type="text" class="form-control" id="sellPrice"  placeholder="please input your selling price.">
                    </div>
                    <div class="mb-3">
                        <label for="buyVolume">Volume</label>
                        <input type="text" class="form-control" id="sellVolume" placeholder="please input the volume." >
                    </div>

                    <div class="mb-3">
                        <label for="buyVolume">Zone</label>
                        <select class="form-select" name="location" id="sellZone" >
                            <option value="" style="color: grey">please select selling zone.</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                {{--                <button type="button" class="btn btn-danger" id="cancelButton" onclick="cancel()"--}}
                {{--                        data-bs-dismiss="modal">Cancel</button>--}}
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

    </script>
@endsection
