@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="row product-details">
            <div class="col-sm-6">
                <div class="img-container">
                    <img class="display-product-image" src="{{ $product['product_image'] }}" alt="" srcset="">
                </div>
            </div>
            <div class="col-sm-5 desc p-6">
                <div class="product-container container">
                    <div class="product-title card-header">
                        <h5 class="fw-bold"> {{ $product['name'] }}</h5>
                    </div>
                    <div class="product-price mt-3">
                        <p class="text-dark fw-bold fs-5">Price :
                            <span class="bg-warning my-2 p-2 rounded-3">₹ {{ $product['price'] }}</span>
                        </p>
                    </div>
                    <div class="product-feature mt-5">
                        <p><span class="text-dark fw-bold">Features : </span><br>
                            {{ $product['description'] }}
                        </p>
                    </div>
                    <br><br>
                    <div class="btn-container d-flex justify-content-center">

                        <form action="/cart" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product['id'] }}" >
                            <button class="btn btn-outline-dark d-flex justify-content-center align-items-center me-3">Add to Cart&nbsp;<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="fill: #fff;transform: ;msFilter:;"><path d="M21 4H2v2h2.3l3.28 9a3 3 0 0 0 2.82 2H19v-2h-8.6a1 1 0 0 1-.94-.66L9 13h9.28a2 2 0 0 0 1.92-1.45L22 5.27A1 1 0 0 0 21.27 4 .84.84 0 0 0 21 4zm-2.75 7h-10L6.43 6h13.24z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="16.5" cy="19.5" r="1.5"></circle></svg></button>
                        </form>

                        <button class="btn btn-outline-info">Buy Now</button>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection