@extends('layouts.subpages')

@section('content')
    <div class="agency-header">
      <div class="container">
        <div class="row">
          <div class="col">
            <!-- <div class="ready-to-start">Agency Solutions</div> -->
            <div class="sub-page-title">TItle Goes Here</div>
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
              <div class="solution-title">Business Solutions</div>
                <div class="solution-txt">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum tortor quis lacus consectetur pellentesque. Curabitur non erat congue, gravida mi facilisis, mattis ligula.
                  Donec hendrerit orci.
                </div>
                <div class="agency-button">
                  <a href="signup" class="btn btn-fg-outline btn-fg-lg">start free trial</a>
                </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="solution-box-2">
              <div class="solution-title">Agency Solutions</div>
              <div class="solution-txt">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum tortor quis lacus consectetur pellentesque. Curabitur non erat congue, gravida mi facilisis, mattis ligula.
                Donec hendrerit orci.
              </div>
              <div class="agency-button">
                <a href="signup" class="btn btn-fg-outline btn-fg-lg">start free trial</a>
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
                  <span class="head-title-txt">Agency<br/>Services</span>
                  <div class="start-trial-centered"><a class="btn btn-gradient btn-fg-lg" href="signup">start free trial</a></div>
                </th>
                <th>
                  <span class="head-title-txt">Business<br/>Services</span>
                  <div class="start-trial-centered"><a class="btn btn-gradient btn-fg-lg" href="signup">start free trial</a></div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td class="extended-title-txt">Extended payment options available.</td>
              <tr>
            </tbody>
            <thead class="table-bottom-border">
              <tr>
                <th class="solutions-title-txt">Agency Features</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="table-col-sect">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis cursus justo elit, sit amet elementum elit ornare a. Duis molestie at nisi quis volutpat. Cras nec metus non tortor vulputate consequat. </td>
                <td class="center-txt"><i class="fas fa-check"></i></td>
                <td class="center-txt"><i class="fas fa-check"></i></td>
              </tr>
              <tr>
                <td class="table-col-sect">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis cursus justo elit, sit amet elementum elit ornare a. Duis molestie at nisi quis volutpat. Cras nec metus non tortor vulputate consequat. </td>
                <td class="center-txt"><i class="fas fa-check"></i></td>
                <td class="center-txt"><i class="fas fa-check"></i></td>
              </tr>
              <tr>
                <td class="table-col-sect">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis cursus justo elit, sit amet elementum elit ornare a. Duis molestie at nisi quis volutpat. Cras nec metus non tortor vulputate consequat. </td>
                <td class="center-txt"><i class="fas fa-check"></i></td>
                <td class="center-txt"><i class="fas fa-check"></i></td>
              </tr>
              <thead class="table-bottom-border">
                <tr>
                  <th class="solutions-title-txt">Business Features</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="table-col-sect">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis cursus justo elit, sit amet elementum elit ornare a. Duis molestie at nisi quis volutpat. Cras nec metus non tortor vulputate consequat. </td>
                  <td class="center-txt"><i class="fas fa-check"></i></td>
                  <td class="center-txt"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                  <td class="table-col-sect">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis cursus justo elit, sit amet elementum elit ornare a. Duis molestie at nisi quis volutpat. Cras nec metus non tortor vulputate consequat. </td>
                  <td class="center-txt"></td>
                  <td class="center-txt"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                  <td class="table-col-sect">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis cursus justo elit, sit amet elementum elit ornare a. Duis molestie at nisi quis volutpat. Cras nec metus non tortor vulputate consequat. </td>
                  <td class="center-txt"></td>
                  <td class="center-txt"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                  <td class="table-col-sect"></td>
                  <td class="center-txt"><a class="btn btn-gradient btn-fg-lg" href="signup">start free trial</a></td>
                  <td class="center-txt"><a class="btn btn-gradient btn-fg-lg" href="signup">start free trial</a></td>
                </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
    @include('includes.joinbanner')

@endsection
