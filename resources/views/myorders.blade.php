
<?php 
$sr=1;
?>
@extends('master')
@section('content')
<div class="checkout-container bg-secondary row">

    <div class="cart-items col-lg-6 ">
    
        @foreach ($orders as $item )
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
                <div class="remove-item d-flex justify-content-around align-items-center">
                    <h6 class="fw-bold">Status: {{ $item->status }}</h6>
                    <h6 class="fw-bold">Payment method: {{ $item->payment_method }}</h6>
                </div>
            </div>
            
          </div>
          
        </div>
            
        @endforeach
    </div>
    <div class="bill-info col-lg-6">
        <div class="container">
           
        </div>
    </div>
</div>
@endsection