@extends('layouts.frontend')

@section('content')
@foreach($agencySolution as $agencySolutions)
<div class="solutions-subpage-header">
  <div class="container">
    <div class="solutions-headerTitle">{{$agencySolutions->headerTitle}}</div>
    <div class="solutions-headerSubtitle">{{$agencySolutions->headerSubtitle}}</div>
  </div>
</div>

<div class="solutions-body">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="solutions-headline1">{{$agencySolutions->sectionTwoTitle}}</div>
        <div class="solutions-sub-txt">{{$agencySolutions->sectionTwoSubtitle}}</div>
        <div class="solutions-discover-txt">
          {{$agencySolutions->sectionTwoBody}}
        </div>
      </div>
      <div class="col-md-6">
        <div class="solutions-pic">
          <img src="https://storage.googleapis.com/fg-bucket/firegorilla-solution-1.png" alt="Firegorilla">
        </div>
      </div>
    </div>
    <hr>
  </div>
</div>
@endforeach
@include('includes.joinbanner')

@endsection
