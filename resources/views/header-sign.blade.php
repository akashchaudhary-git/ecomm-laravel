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
        <ul class="navbar-nav col-lg-3 d-flex justify-content-around align-items-center">
            <li class="nav-item">
                
            </li>
            
        </ul>
        

      </div>
    </div>
  </nav>