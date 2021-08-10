@extends('master')
@section("content")
<div class="container custom-product">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach ($products as $item)
          <div class="carousel-item {{ $item['id']==1?'active':'' }}">
            <a href="detail/{{ $item['id'] }}">
              <img src="{{ $item['gallery'] }}" height="450" class="d-block w-100" alt="...">
              <div class="carousel-caption" style="background:rgba(0,0,0,0.5); padding:10px 20px;">
                  <h3 style="color:#fff;">{{ $item['name'] }}</h3>
                  <p>{{ $item['description'] }}</p>
              </div>
            </a>
          </div>
          @endforeach
          
            {{--  <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>  --}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
</div>
<div class="trending-wrapper bg-secondary pb-5">
    <div class="title ">
        <h3 class="text-dark p-3" >Trending Products</h3>
    </div>
    <div class="trending-products-section">
        @foreach ($products as $item )
        <div class="list-item bg-white">
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
</div>
<div class="space"></div>
@endsection

  
  