@extends('layouts.subpages')

@section('content')
<div class="resources-header">
  <div class="container">
    <div class="row">
      <div class="col">
        <!-- <div class="ready-to-start">Agency Solutions</div> -->
        <div class="sub-page-title">Quick Guide</div>
      </div>
    </div>
  </div>
</div>

<div class="resources-page">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="lets-get-started"><b>Strategies for your</b><br/>CAMPAIGNS with<br/>Fire Gorilla</div>
      </div>
    </div>
    <div class="resources-projects">

      <div class="row">
        <div class="col-md-6">
          <b>How will you succeed in 2019?</b> Download our latest guide to see the key campaign strategies for your business.
          <ul class="quick-guide-steps">
            <li>Deepen subscriber insights by sharing data across systems</li>
            <li>Enjoy higher acceptance rates with unlimited flexibility in routing payments</li>
            <li>Reduce involuntary churn with retry strategies and machine learning</li>
            <li>And, much more.</li>
          </ul>
        </div>
        <div class="col-md-6">
          <div class="quick-guide-form">
            <!-- <img src="https://storage.googleapis.com/fg-bucket/firegorilla-screen-3.jpg" alt="Firegorilla" width="100%"> -->
            <div class="solution-title"><b>Get Your Guide</b><hr></div>
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
              <button type="button" class="btn btn-gradient btn-fg-lg btn-block">submit</button>
            </div>
        </div>
      </div>

    </div>
  </div>
</div>
@include('includes.joinbanner')

@endsection
