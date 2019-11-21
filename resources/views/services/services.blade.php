@extends('layouts.subpages')

@section('content')
    <div class="agency-header">
      <div class="container">
        <div class="row">
          <div class="col">
            <!-- <div class="ready-to-start">Agency Solutions</div> -->
            <div class="sub-page-title">Jumpstart and full-service campaign management by our Google Ads pros.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="solutions-sect">
      <div class="container">
        <div class="solutions-cta">
          <b>1,000,000+</b>
          Conversions<br/>
          Delivered<br/>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="solution-box-1">
              <div class="solution-title">Managed Services</div>
                <div class="solution-txt">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum tortor quis lacus consectetur pellentesque. Curabitur non erat congue, gravida mi facilisis, mattis ligula.
                  Donec hendrerit orci.
                </div>
                <div class="price-title-txt"><b>$495.00</b></div>
                <div class="agency-button">
                  <a href="signup" class="btn btn-fg-outline btn-fg-lg">Get Started</a>
                </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="solution-box-2">
              <div class="solution-title">Managed Spend</div>
              <div class="solution-txt">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum tortor quis lacus consectetur pellentesque. Curabitur non erat congue, gravida mi facilisis, mattis ligula.
                Donec hendrerit orci.
              </div>
              <div class="price-title-txt"><b>$995.00</b>/Per Month</div>
              <div class="agency-button">
                <a href="signup" class="btn btn-fg-outline btn-fg-lg">Get Started</a>
              </div>
            </div>
          </div>
        </div>

        <div class="whats-right-txt">
          <h1>Three easy ways to discover you.</h1>
          <h2>Choose what's right for you.</h2>
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
              @foreach($agencySerices as $agencySerice)
              <tr>
                <td class="table-col-sect">{{$agencySerice->feature }}</td>
                <td class="center-txt">@if ($agencySerice->agencyServices==1)<i class="fas fa-check"></i>@endif</td>
                <td class="center-txt">@if ($agencySerice->businessServices==1)<i class="fas fa-check"></i>@endif</td>
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
                @foreach($businessSerices as $businessSerice)
                <tr>
                  <td class="table-col-sect">{{$businessSerice->feature }}</td>
                  <td class="center-txt">@if ($businessSerice->agencyServices==1)<i class="fas fa-check"></i>@endif</td>
                  <td class="center-txt">@if ($businessSerice->businessServices==1)<i class="fas fa-check"></i>@endif</td>
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
