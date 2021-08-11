@extends('master')
@section('content')
    
    <div class="order-form-container" style="padding-bottom:150px;">
        <form action="" class="row">
            <div class="col-lg-2"></div>
            <div class="shipping-pane col-lg-4 p-5">
                <div class="form-group">
                    <label for="fullname" class="form-label mt-4">Name</label>
                    <input type="email" class="form-control" id="fullname" placeholder="Enter full name">
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label mt-4">Phone</label>
                    <input type="email" class="form-control" id="phone" placeholder="Enter Phone">
                </div>
    
                <div class="form-group">
                    <label for="address" class="form-label mt-4">Address</label>
                    <textarea class="form-control" id="address" rows="3"></textarea>
                </div>
                <div class="form-group ">
                    <label for="pincode" class="form-label mt-4">Pincode</label>
                    <input type="text" class="form-control" id="pincode" placeholder="Pincode">
                </div>
                <br><br>
                
                
            </div>

            
            <div class="col-lg-4 mt-5 p-5">
                <div class="card bg-light text-dark container">
                    <div class="payment-select d-flex justify-content-center m-3">
                        <fieldset class="form-group">
                            <legend class="mt-4">Payment mode</legend>
                            <div class="form-check ">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="payment" id="upi" value="upi" checked="">
                                UPI payment
                              </label>
                            </div>
                            <div class="form-check ">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="payment" id="card" value="card">
                                Credit/Debit Card
                              </label>
                            </div>
                            <div class="form-check ">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="payment" id="emi" value="emi">
                                EMI
                              </label>
                            </div>
                            <div class="form-check ">
                              <label class="form-check-label ">
                                <input type="radio" class="form-check-input" name="payment" id="cod" value="cod" >
                                Cash on Delivery
                              </label>
                            </div>
                          </fieldset>
                    </div>
                    <div class="submit-form row mt-3 m-3 d-flex align-items-center justify-content-between">
                        <h5 class="col-sm-12 text-center">Total Amount {{ $total + 100 }}</h5>
                        <button class="btn mt-2 col-sm-12 text-dark btn-outline-warning" type="submit">Continue to pay</button>
                    </div>
                </div>
            </div> 
            <div class="col-lg-2">

            </div>
                
        </form>


            
            
    </div>
    
@endsection