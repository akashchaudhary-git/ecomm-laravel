<?php
  use App\Http\Controllers\ProductController;
  $total = 0;

  if(Session::has('user')){
    $total = ProductController::cartItem();
  }
?>

{{--
  |-----------------------------------------------------------------
  |   Navbar
  |-----------------------------------------------------------------
--}}
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand fs-3 fw-bold" href="/">BuyKart</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav col-lg-4">
          <li class="nav-item">
            <a class="nav-link active" href="/">Home
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Fashion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/category?section=electronics">Electronics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kids Section</a>
          </li>
        </ul>
        <form action="/search" method="get" class="d-flex container-sm col-lg-5">
            <div class="input-group my-1" style="border-radius: 25px;padding-left: 25px;">
                
              <input type="text" name="term" class="form-control me-sm-2" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                {{--  <button class="btn btn-secondary my-sm-0" type="submit" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #7b8ab8;transform: ;msFilter:;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg></button>  --}}
              </div>
          
        </form>
        {{-------------------- 
                  Cart 
          --------------------}}
        <ul class="navbar-nav col-lg-3 d-flex justify-content-around align-items-center">
            <li class="nav-item">
                <a class="cart nav-link d-flex justify-content-center align-items-center" href="/cartlist" style="position:relative;">Cart &nbsp;
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="fill: #fff;transform: ;msFilter:;"><path d="M21 4H2v2h2.3l3.28 9a3 3 0 0 0 2.82 2H19v-2h-8.6a1 1 0 0 1-.94-.66L9 13h9.28a2 2 0 0 0 1.92-1.45L22 5.27A1 1 0 0 0 21.27 4 .84.84 0 0 0 21 4zm-2.75 7h-10L6.43 6h13.24z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="16.5" cy="19.5" r="1.5"></circle>
                
                  </svg>
                  <span class="cart-label bg-warning text-dark">{{ $total }}</span>
                </a>
            </li>

            @if (Session::has('user'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Session::get('user')['name'] }}</a>
              <div class="dropdown-menu" style="">
                <a class="dropdown-item" href="#">Order history</a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout">Log out</a>
              </div>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link fw-bold p-3 d-flex justify-content-center" href="/login">Login &nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255,255,255,0.7);transform: ;msFilter:;"><path d="m13 16 5-4-5-4v3H4v2h9z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>
              </a>
          </li>
            @endif
            
        </ul>
        

      </div>
    </div>
  </nav>