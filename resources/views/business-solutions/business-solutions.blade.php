@extends('layouts.frontend')

@section('content')
@foreach($businessSolution as $businessSolutions)
<div class="header">

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="attract-title">{{$businessSolutions->headerTitle}}</div>
          <div class="header-sub-txt">{{$businessSolutions->headerSubtitle}}</div>
          <div class="attract-txt">
            {{$businessSolutions->headerBody}}
          </div>
          <div class="">
            <a class="btn btn-fg-light btn-lg" href="signup">Sign Up</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="header-object-2"><img src="https://storage.googleapis.com/fg-bucket/header-extra-info.png" alt="Firegorilla"></div>
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
            <div class="discover-title">{{$businessSolutions->discoverTitle}}</div>
            <div class="steps-sub-txt">{{$businessSolutions->discoverSubtitle}}</div>
            <div class="discover-txt">
              {{$businessSolutions->discoverBody}}
            </div>
            <!-- <div class="">
              <a class="btn btn-outline-dark" href="signup">Sign Up</a>
            </div> -->
          </div>
          <div class="col-md-6">
            <div id="discover-screen-object" class="discover-screen">
              <img src="{{$businessSolutions->sectionOneIMG}}" alt="Firegorilla">
            </div>
            <div class="mobile-discover-object">
              <img src="{{$businessSolutions->sectionOneIMG}}" alt="Firegorilla">
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
            <div class="attack-title">{{$businessSolutions->attackTitle}}</div>
            <div class="steps-sub-txt">{{$businessSolutions->attackSubtitle}}</div>
            <div class="discover-txt">
              {{$businessSolutions->attackBody}}
            </div>
          </div>
          <div class="col-md-6">
            <div id="attack-screen-object" class="attack-screen">
              <img src="{{$businessSolutions->sectionTwoIMG}}" alt="Firegorilla">
            </div>
            <div class="mobile-discover-object">
              <img src="{{$businessSolutions->sectionTwoIMG}}" alt="Firegorilla">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="firegorilla-steps-white-2">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="create-title">{{$businessSolutions->createTitle}}</div>
            <div class="steps-sub-txt">{{$businessSolutions->createSubtitle}}</div>
            <div class="discover-txt">
              {{$businessSolutions->createBody}}
            </div>
          </div>
          <div class="col-md-6">
            <div id="create-screen-object" class="create-screen">
              <img src="{{$businessSolutions->sectionThreeIMG}}" alt="Firegorilla">
            </div>
            <div class="mobile-discover-object">
              <img src="{{$businessSolutions->sectionThreeIMG}}" alt="Firegorilla">
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
            @foreach($resources->slice(0,3) as $resource)
            <div class="col-md-4">
              <div class="card">
                <img src="{{$resource->featuredImage}}" class="card-img-top" alt="{{$resource->resourcesTitle}}">
                <div class="card-body">
                  <h5 class="card-title">{{$resource->resourcesTitle}}</h5>
                  <p class="card-text">{{  Str::limit($resource->resourcesDesc, $limit = 160, $end = '...') }}.</p>
                  <a href="quick-guide" class="btn btn-outline-dark btn-block">Download</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      @include('includes.joinbanner')

@endsection
