@extends('master')
@section("content")

<form class="d-flex container justify-content-center">
  <div class="form-group col-lg-4 col-md-8 col-sm-12">
    <label class="form-label d-flex justify-content-center fs-3 mt-4">Login</label>
    <div class="form-floating mb-3 col-12">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating  mb-4">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating d-flex justify-content-end mb-3">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="form-floating d-flex justify-content-end mb-3">
      <a href="#" class="text-end text-info text-decoration-none">Create a new Account? Click here</a>
    </div>
  </div>
</form>

@endsection

  
  