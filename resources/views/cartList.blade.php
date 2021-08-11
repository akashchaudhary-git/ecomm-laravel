@extends('master')
@section('content')
<div class="checkout-container bg-secondary row">

    <div class="cart-items col-lg-6 ">
    
        @foreach ($products as $item )
        <div class=" cart-item bg-white d-flex">
          <div class=" d-flex align-items-start row">
            <div class="col cart-product-container d-flex flex-column">
                <a href="detail/{{ $item->id }}" class="text-decoration-none">
                    <img src="{{ $item->product_image }}" alt="" class="trending-product-image">
                </a>
                <div class="price-section">
                    <div class="trending-product-price-tag fw-bold">
                        <span class="text-dark">Price: </span><span class="fs-6 text-danger fw-bold">₹ {{ $item->price}}</span>
                    </div>
                </div>
              
            </div>
            <div class="col details d-flex flex-column justify-content-between">
                <div class="trending-product-desc">
                    <a href="detail/{{ $item->id }}" class="text-decoration-none">
                        <h4 class="fs-5 fw-bold text-start ">{{ $item->name }}</h4> 
                    </a>
                    <h5 class="fs-6">{{ $item->description }}</h5> 
                    
                </div>
                <div class="remove-item d-flex align-items-center">
                    <button class="btn btn-sm remove-btn btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff;transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg> Remove
                    </button>
                </div>
            </div>
            
          </div>
          
        </div>
            
        @endforeach
    </div>
    <div class="bill-info col-lg-6"></div>
</div>
@endsection