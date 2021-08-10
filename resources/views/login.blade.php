@extends('master-sign')
@section("content")
<div class="form-container">
  <form action="login" method="POST" class="d-flex container justify-content-center">
    <div class="login-container form-group col-lg-4 col-md-8 col-sm-12">
      @csrf
      <label class="form-label d-flex justify-content-center fs-3 mt-4">Login</label>
      <div class="form-floating mb-3 col-12">
        <input type="email" class="form-control" name="email" id="emailInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating  mb-4">
        <input type="password" class="form-control" name="passsword" id="passwordInput" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <div class="d-grid mb-3">
        <button type="submit" class="btn btn-primary mb-0">Login</button>
      </div>
      <div class="form-floating d-flex justify-content-end mb-3">
        <a href="#" class="text-end text-info text-decoration-none">Create a new Account? Click here</a>
      </div>
    </div>
  </form>
</div>
  


@endsection

  
  