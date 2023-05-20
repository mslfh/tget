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


                @if($role != 2 )
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


{{--<script src="{{asset("/js/trading.js")}}"></script>--}}

@endsection
