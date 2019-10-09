@extends('layouts.frontend')

@section('content')
@foreach($agencySolution as $agencySolutions)
<div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="attract-title">{{$agencySolutions->headerTitle}}</div>
          <div class="header-sub-txt">{{$agencySolutions->headerSubtitle}}</div>
          <div class="attract-txt">
            {{$agencySolutions->headerBody}}
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
              <div class="discover-title">{{$agencySolutions->sectionOneTitle}}</div>
              <div class="steps-sub-txt">{{$agencySolutions->sectionOneSubtitle}}</div>
              <div class="discover-txt">
                {{$agencySolutions->sectionOneBody}}
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
              <div class="attack-title">{{$agencySolutions->sectionTwoTitle}}</div>
              <div class="steps-sub-txt">{{$agencySolutions->sectionTwoSubtitle}}</div>
              <div class="discover-txt">
                {{$agencySolutions->sectionTwoBody}}
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
              <div class="create-title">{{$agencySolutions->sectionThreeTitle}}</div>
              <div class="steps-sub-txt">{{$agencySolutions->sectionThreeSubtitle}}</div>
              <div class="discover-txt">
                {{$agencySolutions->sectionThreeBody}}
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
    @endforeach
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
                  <a href="quick-guide" class="btn btn-outline-dark btn-block">Download</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="https://storage.googleapis.com/fg-bucket/livevegas.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="quick-guide" class="btn btn-outline-dark btn-block">Download</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="https://storage.googleapis.com/fg-bucket/livevegas.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="quick-guide" class="btn btn-outline-dark btn-block">Download</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('includes.joinbanner')

@endsection