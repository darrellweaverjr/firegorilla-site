@extends('layouts.subpages')

@section('content')
<div class="resources-header">
  <div class="container">
    <div class="row">
      <div class="col">
        <!-- <div class="ready-to-start">Agency Solutions</div> -->
        <div class="sub-page-title">Documentation and Getting Started guides for marketing in your industry vertical.</div>
      </div>
    </div>
  </div>
</div>

<div class="resources-page">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="lets-get-started"><b>Key Resources</b> with<br/>Fire Gorilla</div>
      </div>
    </div>
    <div class="resources-projects">

      <div class="row">
        @foreach($resources as $resource)
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
</div>
@include('includes.joinbanner')

@endsection
