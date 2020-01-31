@extends('layouts.businesspage')

@section('content')
@foreach($businessSolution as $businessSolutions)
  <div class="header" style="background: url('{{$businessSolutions->headerIMG}}'); background-attachment: fixed; background-size: cover; background-position:top center;">
    <div class="container">
      <div class="np-solutions-headerTitle">{{$businessSolutions->headerTitle}}</div>
      <div class="np-solutions-headerSubtitle">{{$businessSolutions->headerSubtitle}}</div>
      <!-- <div class="attract-txt">
        {{$businessSolutions->headerBody}}
      </div> -->
    </div>
  </div>
  
  <div class="we-have-campaigns">
    <div class="container">
      <div class="row">
        <div class="campaign-type">
          We Have Campaigns To Help Your Business!
        </div>
      </div>
      <div class="row">
        <div class="business-name-sect">
          <form action="/signup" class="form-inline">
            <div class="business-type-menu">
              <select class="custom-select">
                <option selected>Business Type</option>
                <option value="Nightlife">Nightlife</option>
                <option value="Restaurant">Restaurant</option>
                <option value="Hospitality">Hospitality</option>
              </select>
            </div>
            <button type="submit" class="btn btn-danger"><i class="fas fa-chevron-right"></i></button>
          </form>
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
