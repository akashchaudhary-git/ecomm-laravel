@extends('master')
@section('content')
    
    <div class="order-form-container" style="padding-bottom:150px;">
        <form action="/processpayment" method="POST" class="row">
          @csrf
            <div class="col-lg-2"></div>
            <div class="shipping-pane col-lg-4 p-5">
              <h4>Shipment details</h4>
                <div class="form-group">
                    <label for="fullname" class="form-label mt-4">Name</label>
                    <input type="text" name="name" class="form-control" id="fullname" placeholder="Enter full name" required>
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label mt-4">Phone</label>
                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter Phone" required>
                </div>
    
                <div class="form-group">
                    <label for="address" class="form-label mt-4">Address</label>
                    <textarea name="address" class="form-control" id="address" rows="3"></textarea required>
                </div>
                <div class="form-group ">
                    <label for="pincode" class="form-label mt-4">Pincode</label>
                    <input type="text" name="pincode" class="form-control" id="pincode" placeholder="Pincode" required>
                </div>
                <br><br>
                
                
            </div>

            
            <div class="col-lg-4 mt-5 p-5">
              <h4>Choose your payment method</h4>

                <div class="card bg-light text-dark mt-4 container">
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
                      <h5 class="col-sm-12 text-center">Total Amount {{ $total}}</h5>
                      <input type="hidden" name="total" value="{{ $total }}">
                      <button class="btn mt-2 col-sm-12 text-dark btn-outline-warning" type="submit">Continue to pay</button>
                    </div>
                </div>
            </div> 
            <div class="col-lg-2">

            </div>
                
        </form>


            
            
    </div>
    
@endsection