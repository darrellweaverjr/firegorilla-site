@extends('layouts.frontend')

@section('content')
<div class="agency-header">
  <div class="container">
    <div class="row">
      <div class="col">
        <!-- <div class="ready-to-start">Agency Solutions</div> -->
        <div class="sub-page-title">Sign Up</div>
      </div>
    </div>
  </div>
</div>
<div class="solutions-sect">
  <div class="container">

    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="signup-section">
          <div class="solution-title"><b>GET YOUR FREE ACCOUNT NOW</b> MAKE BETTER CAMPAIGNS WITH EASE THAT SAVE YOU MONEY.</div>
            <!-- <div class="solution-txt">
              <b>READY.</b> ATTRACT MORE PAYING CUSTOMERS.<br/>
              <b>AIM.</b> TARGET THE RIGHT PEOPLE FOR YOUR BUSINESS.<br/>
              <b>FIRE.</b> PUT FIRE GORILLA TO WORK FOR YOU TODAY.
            </div> -->

            <form class="needs-validation" novalidate>
              <div class="row">
                <div class="col-12 mb-3">
                  <label for="firstName">First name*</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-12 mb-3">
                  <label for="lastName">Last name*</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
                <div class="col-12 mb-3">
                  <label for="lastName">E-mail*</label>
                  <input type="text" class="form-control" id="email" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
                <div class="col-12 mb-3">
                  <label for="lastName">Phone*</label>
                  <input type="text" class="form-control" id="phone" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
                <div class="col-12 mb-3">
                  <label for="lastName">Zip Code*</label>
                  <input type="text" class="form-control" id="email" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
              </div>
            </form>

            <div class="agency-button">
              <button type="button" class="btn btn-gradient btn-fg-lg btn-block">start free trial</button>
            </div>
          </div>
      </div>
    </div>

  </div>

@endsection
