@extends('master')
@section('content')
<div class="searched-items row d-flex">

    @foreach ($data as $item )
    <div class="item bg-white col-lg-3 col-md-6 col-sm-12">
      <a href="detail/{{ $item['id'] }}" class="text-decoration-none">
        <div class="trending-product-container ">
          <img src="{{ $item['product_image'] }}" alt="" class="trending-product-image">
          <div class="trending-product-desc">
              <h4 class="">{{ $item['name'] }}</h4> 
          </div>
          
        </div>
        <div class="price-section">
          <div class="trending-product-price-tag fw-bold">
            <span class="text-dark">Price: </span><span class="fs-6 text-danger fw-bold">₹ {{ $item['price'] }}</span>
          </div>
        </div>
      </a>
    </div>
        
    @endforeach
</div>

@endsection