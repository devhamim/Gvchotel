@extends('frontend.layout.app')

@section('content')
<!--==================================================-->
<!-- Start Royella Breadcumb Area -->
<section class="inner-banner" style="background-repeat: no-repeat !important; background-position: center !important; background-size: cover !important;  background: url('{{ asset('frontend/img/Sub-Banner-4.jpg') }}');">
    <div class="thm-container">
        <h2>Checkout</h2>
        <div class="breadcumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Checkout</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->
<!--==================================================-->
<!-- End Royella Breadcumb Area -->
<!--==================================================-->

<!-- ======================= Product Detail ======================== -->
<section class="middle">
    <div class="container" style="padding: 100px 0">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 pb-5">
                <div class="text-center d-block mb-5">
                    <h2>Payment Gateway</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-12 col-lg-7 col-md-12 m-auto">
                <form method="POST" action="{{route('booking.payment.store')}}">
                    @csrf
                    <input type="hidden" name="gestcheckout_id" value="{{$checkoutdata}}">

                    <h5 class="mb-4 ft-medium">Payments</h5>

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">PayPal</a></li>
                            <li><a data-toggle="tab" href="#menu1">Debit Or Credit</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                              <div class="form-group">
                                  <label class="text-dark">PayPal Email</label>
                                  <input type="email" class="form-control simple" name="paypal_mail" placeholder="paypal@gmail.com">
                                  @error('paypal_mail')
                                      <strong class="text-danger">{{$message}}</strong>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="text-dark">Password</label>
                                  <input type="password" class="form-control simple" name="transaction_id" placeholder="Password">
                                  @error('transaction_id')
                                      <strong class="text-danger">{{$message}}</strong>
                                  @enderror
                              </div>
                              <div class="form-group mb-5">
                                  <input type="hidden" name="paypal" value="Paypal">
                                  <button type="submit" name="btn" value="1" class="btn btn-dark py-2 px-5 mt-3 full-width">Pay Now</button>
                              </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                              <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                      <div class="form-group">
                                          <label class="text-dark">Card Holder Name *</label>
                                          <input type="text" class="form-control" name="card_holder" placeholder="Card Holder Name" />
                                          @error('card_holder')
                                          <strong class="text-danger">{{$message}}</strong>
                                      @enderror
                                      </div>
                                  </div>

                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                      <div class="form-group">
                                          <label class="text-dark">Card Number *</label>
                                          <input type="text" class="form-control" name="card_number" placeholder="7589 6356 8547 9120" />
                                          @error('card_number')
                                          <strong class="text-danger">{{$message}}</strong>
                                      @enderror
                                      </div>
                                  </div>

                                  <div class="col-lg-5 col-md-5 col-sm-6">
                                      <div class="form-group">
                                          <label class="text-dark">Expire Month *</label>
                                          <select class="form-control" name="expire_month">
                                              <option value="january" selected="">January</option>
                                              <option value="february">February</option>
                                              <option value="march">March</option>
                                              <option value="april">April</option>
                                              <option value="may">May</option>
                                              <option value="june">June</option>
                                              <option value="july">July</option>
                                              <option value="august">August</option>
                                              <option value="September">September</option>
                                              <option value="october">October</option>
                                              <option value="november">November</option>
                                              <option value="december">December</option>
                                          </select>
                                          @error('expire_month')
                                          <strong class="text-danger">{{$message}}</strong>
                                      @enderror
                                      </div>
                                  </div>

                                  <div class="col-lg-5 col-md-5 col-sm-6">
                                      <div class="form-group">
                                          <label class="text-dark">Expire Year *</label>
                                          <select class="form-control" name="expire_year">
                                              <option value="2024" selected="">2024</option>
                                              <option value="2025">2025</option>
                                              <option value="2026">2026</option>
                                              <option value="2027">2027</option>
                                              <option value="2028">2028</option>
                                              <option value="2029">2029</option>
                                              <option value="2030">2030</option>
                                          </select>
                                          @error('expire_year')
                                          <strong class="text-danger">{{$message}}</strong>
                                      @enderror
                                      </div>
                                  </div>

                                  <div class="col-lg-2 col-md-2 col-sm-12">
                                      <div class="form-group">
                                          <label class="text-dark">CVC *</label>
                                          <input type="text" class="form-control" name="cvc" placeholder="CVC*" />
                                          @error('cvc')
                                          <strong class="text-danger">{{$message}}</strong>
                                      @enderror
                                      </div>
                                  </div>
                                  <div class="form-group mb-5">
                                      <input type="hidden" name="debit" value="Debit">
                                      <button type="submit" name="btn" value="3" class="btn btn-dark py-2 px-5 mt-3 full-width">Pay Now</button>
                                  </div>
                              </div>
                            </div>
                          </div>

                </form>
            </div>

        </div>
    </div>
</section>
<!-- ======================= Product Detail End ======================== -->
@endsection

@if(session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
@endif
