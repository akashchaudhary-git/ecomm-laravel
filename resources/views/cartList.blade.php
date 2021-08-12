
<?php 
$sr=1;
?>
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
                    <a href="/removeitem/{{$item->cartId}}" class="btn btn-sm remove-btn btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff;transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg> Remove
                    </a>
                </div>
            </div>
            
          </div>
          
        </div>
            
        @endforeach
    </div>
    <div class="bill-info col-lg-6">
        <div class="container">
            <div class="card bg-light mb-3">
                <div class="card-header">
                    <h4 class="card-title">Cart summary</h4>
                </div>
                <div class="card-body">
                    <div class="table-container">
                        <table class="table">
                            <thead>
                              <tr class="table-dark">
                                <th class="text-center"  scope="col">Sr.No</th>
                                <th class="text-center" scope="col">Item</th>
                                <th class="text-start" scope="col">Price&nbsp;₹</th>
                              </tr>
                            </thead>
                            <tbody class="table-body">
                              
                             
                                @foreach ($products as $item)
                                <tr class="table-info">
                                    <td class="text-center">{{ $sr++ }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td class="text-left">{{ $item->price }}</td>
                                
                                </tr>
                                @endforeach
                                <tr class="table-secondary">
                                    <td class="text-center"></td>
                                    <td class="text-end">Delivery</td>
                                    <td class="text-center">{{ $delivery }}</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td class="text-center"></td>
                                    <td class="text-end fw-bold fs-5">Total</td>
                                    <td class="text-center fw-bold fs-5">{{ $total = $total + $delivery }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="total d-flex justify-content-center">
                       
                    </div>
                    <form action="/ordernow" method="post">
                        @csrf
                        <div class="button d-flex justify-content-between align-items-center">
                            <h4>Total &nbsp; ₹{{ $total }}</h4>
                            <input type="hidden" name="total" value="{{ $total }}"> 
                            <input type="hidden" name="delivery" value="{{ $delivery }}"> 
                            <button type="submit" class="btn btn-outline-warning text-dark">Order Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection