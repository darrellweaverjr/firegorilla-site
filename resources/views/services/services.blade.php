@extends('layouts.subpages')

@section('content')
  @foreach($servicesPage as $servicesPages)
    <div class="agency-header"  style="background: url('{{$servicesPages->headerIMG}}'); background-attachment: fixed;background-size: cover; background-position:bottom center;">
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
        <!-- Desktop Table -->
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
              @foreach($agencyServices as $agencyService)
              <tr>
                <td class="table-col-sect">{{$agencyService->feature }}</td>
                <td class="center-txt">@if ($agencyService->agencyServices==1)<i class="fas fa-check"></i>@endif</td>
                <td class="center-txt">@if ($agencyService->businessServices==1)<i class="fas fa-check"></i>@endif</td>
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
                @foreach($businessServices as $businessService)
                <tr>
                  <td class="table-col-sect">{{$businessService->feature }}</td>
                  <td class="center-txt">@if ($businessService->agencyServices==1)<i class="fas fa-check"></i>@endif</td>
                  <td class="center-txt">@if ($businessService->businessServices==1)<i class="fas fa-check"></i>@endif</td>
                </tr>
                @endforeach
                <tr>
                  <td class="table-col-sect"></td>
                  <td class="center-txt"><a class="btn btn-gradient-blue btn-fg-lg" href="signup">Get Started</a></td>
                  <td class="center-txt"><a class="btn btn-gradient-blue btn-fg-lg" href="signup">Get Started</a></td>
                </tr>
              </tbody>
            </tbody>
          </table>
        </div>
        <!-- End Desktop Table -->
        <div class="mobile-services">
          <div class="container">
            <div class="row">
              <div class="col-8">
                <div class="solutions-title-txt">Managed Services</div>
              </div>
              <div class="col-4">
                <div class="price-title-txt"><b>$495.00</b></div>
              </div>
            </div>
            <hr>
            @foreach($agencyServices as $agencyServ)
            <div class="row">
              <div class="col">
                {{$agencyServ->feature}}<br/><br/>
              </div>
            </div>
            @endforeach
            <div class="row">
              <div class="col">
                <div class="start-trial-centered"><a class="btn btn-gradient-blue btn-lg btn-block" href="signup">Get Started</a></div>
              </div>
            </div>

            <br/><hr>

            <div class="row">
              <div class="col-8">
                <div class="solutions-title-txt">Managed Spend</div>
              </div>
              <div class="col-4">
                <div class="price-title-txt"><b>$995.00</b></div>
              </div>
            </div>
            <hr>
            @foreach($businessServices as $businessServ)
            <div class="row">
              <div class="col">
                {{$businessServ->feature}}<br/><br/>
              </div>
            </div>
            @endforeach
            <div class="row">
              <div class="col">
                <div class="start-trial-centered"><a class="btn btn-gradient-blue btn-lg btn-block" href="signup">Get Started</a></div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
    @include('includes.joinbanner')

@endsection
