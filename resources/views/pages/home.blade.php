@extends('layout')
@section('content')
    <div class="row">
        <h2 class="default-userProductList-InfoBar-title text-center"><i class="fa fa-heart-o" aria-hidden="true"></i> This
            Week Favoourites</h2>
        @foreach ($product as $key => $product1)
            <div class="col-sm-6 col-md-4" data-behavior="sample_code">
                <a href="{{URL::to('/detail-product/'.$product1->product_id)}}" class="thumbnail_item thumbnail less-padding less-margin">
                    <img src="public/uploads/product/{{ $product1->product_image }}" alt="risotto lemon">
                </a>
                <div class="caption box">
                    <h3>{{ $product1->product_name }}</h3>
                    <div class="row">
                        <div class="col-sm-8 col-xs-6">
                            {{-- <p><img src="public/uploads/product/{{$product1->product_image}}" style="width:250px; height:170px"/></p> --}}
                            <p>{{ number_format($product1->unit_price) . ' ' . 'VNĐ' }}</p>
                            <span class="min-order">10 pcs min order</span>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <button onclick="location.href='{{URL::to('/save-cart')}}'"
                                class="btn default-userProductList-CardList-button pull-right" role="button">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
