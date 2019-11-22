@extends('layouts.subpages')

@section('content')
  @foreach($servicesPage as $servicesPages)
    <div class="agency-header">
      <div class="container">
        <div class="row">
          <div class="col">
            <!-- <div class="ready-to-start">Agency Solutions</div> -->
            <div class="sub-page-title">{{$servicesPages->pageTitle}}</div>
          </div>
        </div>
      </div>
    </div>
    <div class="services-sect">
      <div class="container">
        <div class="solutions-cta">
          <b>1,000,000+</b>
          Conversions<br/>
          Delivered<br/>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="solution-box-1">
              <div class="solution-title">{{$servicesPages->serivces_title}}</div>
              <div class="solution-txt">{{$servicesPages->serivces_desc}}</div>
              <div class="price-title-txt"><b>${{$servicesPages->serivce_price}}.00</b></div>
              <div class="agency-button">
                <a href="signup" class="btn btn-fg-outline btn-fg-lg">Get Started</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="solution-box-2">
              <div class="solution-title">{{$servicesPages->spend_title}}</div>
              <div class="solution-txt">{{$servicesPages->spend_desc}}</div>
              <div class="price-title-txt"><b>${{$servicesPages->spend_price}}.00</b></div>
              <div class="agency-button">
                <a href="signup" class="btn btn-fg-outline btn-fg-lg">Get Started</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        <div class="whats-right-txt">
          <h1>{!!$servicesPages->pageCTA!!}</h1>
        </div>

        <div class="agency-tables">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th class="recommended-txt">RECOMMENDED</th>
              </tr>
            </thead>
            <thead>
              <tr>
                <th></th>
                <th>
                  <span class="head-title-txt">Managed<br/>Services</span>
                  <div class="start-trial-centered"><a class="btn btn-gradient-blue btn-fg-lg" href="signup">Get Started</a></div>
                  <div class="price-title-txt"><b>$495.00</b></div>
                </th>
                <th>
                  <span class="head-title-txt">Managed<br/>Spend</span>
                  <div class="start-trial-centered"><a class="btn btn-gradient-blue btn-fg-lg" href="signup">Get Started</a></div>
                  <div class="price-title-txt"><b>$995.00</b>/Per Month</div>
                </th>
              </tr>
            </thead>
            <thead class="table-bottom-border">
              <tr>
                <th class="solutions-title-txt">Managed Services</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($agencyServices as $agencyServices)
              <tr>
                <td class="table-col-sect">{{$agencyServices->feature }}</td>
                <td class="center-txt">@if ($agencyServices->agencyServices==1)<i class="fas fa-check"></i>@endif</td>
                <td class="center-txt">@if ($agencyServices->businessServices==1)<i class="fas fa-check"></i>@endif</td>
              </tr>
              @endforeach
              <thead class="table-bottom-border">
                <tr>
                  <th class="solutions-title-txt">Managed Spend</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($businessServices as $businessServices)
                <tr>
                  <td class="table-col-sect">{{$businessServices->feature }}</td>
                  <td class="center-txt">@if ($businessServices->agencyServices==1)<i class="fas fa-check"></i>@endif</td>
                  <td class="center-txt">@if ($businessServices->businessServices==1)<i class="fas fa-check"></i>@endif</td>
                </tr>
                @endforeach
                <tr>
                  <td class="table-col-sect"></td>
                  <td class="center-txt"><a class="btn btn-gradient-blue btn-fg-lg" href="signup">Get Started</a></td>
                  <td class="center-txt"><a class="btn btn-gradient-blue btn-fg-lg" href="signup">Get Started</a></td>
                </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
    @include('includes.joinbanner')

@endsection
