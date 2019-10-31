@extends('layouts.frontend')

@section('content')
@foreach($nonProfitSolution as $nonProfitSolutions)
<div class="non-profit-subpage-header">
  <div class="container">
    <div class="np-solutions-headerTitle">{{$nonProfitSolutions->headerTitle}}</div>
    <div class="np-solutions-headerSubtitle">{{$nonProfitSolutions->headerSubtitle}}</div>
  </div>
</div>

<div class="np-solutions-subpage-header">
  <div class="container">
    <div class="np-solutions-headerTitle2">{{$nonProfitSolutions->headerBody}}</div>
  </div>
</div>

<div class="solutions-body">
  <div class="container">

    <div class="solutions-sect">
      <div class="row">
        <div class="col-md-6">
          <div class="solutions-pic">
            <img src="https://storage.googleapis.com/fg-bucket/nonprofit-pic1.jpg" alt="Firegorilla">
          </div>
        </div>
        <div class="col-md-6">
          <div class="solutions-headline1">{{$nonProfitSolutions->sectionOneTitle}}</div>
          <div class="solutions-sub-txt">{{$nonProfitSolutions->sectionOneSubtitle}}</div>
          <div class="solutions-discover-txt">
            {{$nonProfitSolutions->sectionOneBody}}
          </div>
        </div>
      </div>
    </div>

    <hr>

    <div class="solutions-sect">
    <div class="row">
      <div class="col-md-6">
        <div class="solutions-headline1">{{$nonProfitSolutions->sectionThreeTitle}}</div>
        <div class="solutions-sub-txt">{{$nonProfitSolutions->sectionThreeSubtitle}}</div>
        <div class="solutions-discover-txt">
          {{$nonProfitSolutions->sectionThreeBody}}
        </div>
      </div>
      <div class="col-md-6">
        <div class="solutions-pic">
          <img src="https://storage.googleapis.com/fg-bucket/nonprofit-pic2.jpg" alt="Firegorilla">
        </div>
      </div>
    </div>
    </div>

    <hr>

    <div class="solutions-sect">
    <div class="row">
      <div class="col-md-6">
        <div class="solutions-pic">
          <img src="https://storage.googleapis.com/fg-bucket/nonprofit-pic3.jpg" alt="Firegorilla">
        </div>
      </div>
      <div class="col-md-6">
        <div class="solutions-headline1">{{$nonProfitSolutions->sectionTwoTitle}}</div>
        <div class="solutions-sub-txt">{{$nonProfitSolutions->sectionTwoSubtitle}}</div>
        <div class="solutions-discover-txt">
          {{$nonProfitSolutions->sectionTwoBody}}
        </div>
      </div>
    </div>
    </div>

  </div>
</div>
@endforeach
@include('includes.joinbanner')

@endsection
