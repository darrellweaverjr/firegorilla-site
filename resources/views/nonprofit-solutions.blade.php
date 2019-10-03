@extends('layouts.frontend')

@section('content')
<div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="attract-title">Nonprofit Solutions</div>
          <div class="header-sub-txt">Create Google Ads Search campaigns for your nonprofit.</div>
          <div class="attract-txt">
            If you're ready to attract more customers but don't know where to start with Google Ads,
            Fire Gorilla is your end-to-end solution! Answer a few questions about your business and your competitors,
            write one ad, and build highly performant Paid Search campaigns to target the right traffic for your business.
            Put Fire Gorilla to work for you today and build your first set of campaigns for free!
          </div>
          <div class="">
            <a class="btn btn-fg-light btn-lg" href="signup">Sign Up</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="header-object-2"><img src="images/header-extra-info.png" alt="Firegorilla"></div>
          <div id="header-screen-object" class="header-screen">
            <img src="https://storage.googleapis.com/fg-bucket/firegorilla-screen-1.jpg" alt="Firegorilla">
          </div>
          <div class="mobile-header-object">
            <img src="https://storage.googleapis.com/fg-bucket/firegorilla-header-screen.png" alt="firegorilla">
          </div>
        </div>
      </div>
    </div>

    <div class="firegorilla-steps-white">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="discover-title">Discover Keywords</div>
              <div class="steps-sub-txt">Tell us about your business</div>
              <div class="discover-txt">
                To get started with Fire Gorilla, enter a few keywords that people might search to find your business and enter your website. Our keyword analysis engine will discover the most relevant keywords for your campaign by analyzing your website and keywords related to the results. You decide what keywords we keep
                and use in your campaigns.
              </div>
              <!-- <div class="">
                <a class="btn btn-outline-dark" href="signup">Sign Up</a>
              </div> -->
            </div>
            <div class="col-md-6">
              <div id="discover-screen-object" class="discover-screen">
                <img src="https://storage.googleapis.com/fg-bucket/firegorilla-screen-1.jpg" alt="Firegorilla">
              </div>
              <div class="mobile-discover-object">
                <img src="https://storage.googleapis.com/fg-bucket/firegorilla-screen-1.jpg" alt="Firegorilla">
              </div>
            </div>
          </div>
        </div>
    </div>

  </div>


    <div class="firegorilla-steps-grey">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="attack-title">Attack Competitors</div>
              <div class="steps-sub-txt">Tell us about your competitors</div>
              <div class="discover-txt">
                Enter your own and competitors' brand keywords so we can build special campaigns with them. Include any product names, company names, trademarks, or other phrases that are unique to your company in the "brand" section and anything unique to your competitors in the "conquesting" section. Fire Gorilla will build campaigns that safeguard your brand keywords and attack your competitors.
              </div>
            </div>
            <div class="col-md-6">
              <div id="attack-screen-object" class="attack-screen">
                <img src="https://storage.googleapis.com/fg-bucket/firegorilla-screen-2.jpg" alt="Firegorilla">
              </div>
              <div class="mobile-discover-object">
                <img src="https://storage.googleapis.com/fg-bucket/firegorilla-screen-2.jpg" alt="Firegorilla">
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="firegorilla-steps-white-2">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="create-title">Create Ads</div>
              <div class="steps-sub-txt">Give us at least one example ad</div>
              <div class="discover-txt">
                Before specifying your budget and targeting details, you write one general advertisement for Fire Gorilla to use as a prototype for hundreds or even thousands of ads. We utilize your keywords to make a special ad for every keyword in your brand, general, and conquesting campaigns. Fire Gorilla helps protect your brand position, drive traffic from general keywords, and attack competitors
                like a gorilla on fire.
              </div>
            </div>
            <div class="col-md-6">
              <div id="create-screen-object" class="create-screen">
                <img src="https://storage.googleapis.com/fg-bucket/firegorilla-screen-3.jpg" alt="Firegorilla">
              </div>
              <div class="mobile-discover-object">
                <img src="https://storage.googleapis.com/fg-bucket/firegorilla-screen-3.jpg" alt="Firegorilla">
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="resources-sect">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="lets-get-started"><b>Key Resources</b> with<br/>Fire Gorilla</div>
          </div>
        </div>
        <div class="resource-examples">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <img src="https://storage.googleapis.com/fg-bucket/livevegas.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button type="button" class="btn btn-outline-dark btn-block">Download</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="https://storage.googleapis.com/fg-bucket/livevegas.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button type="button" class="btn btn-outline-dark btn-block">Download</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="https://storage.googleapis.com/fg-bucket/livevegas.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button type="button" class="btn btn-outline-dark btn-block">Download</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('includes.joinbanner')

@endsection
