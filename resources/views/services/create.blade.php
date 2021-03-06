@extends('layouts.backend')

@section('content')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Add Service</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Services</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            <div class="card">
                <form class="form-horizontal" method="post" action="{{ route('services.store') }}" enctype="multipart/form-data">
                   @csrf
                    <div class="card-body">
                      <h4 class="card-title">Services</h4>
                        <div class="form-group row">
                          <label for="featuresCategory" class="col-sm-3 text-right control-label col-form-label">Category</label>
                          <div class="col-md-3">
                            <select class="form-control" name="featuresCategory" id="featuresCategory">
                              <option value="Agency Services">Agency Services</option>
                              <option value="Business Services">Business Services</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="feature" class="col-sm-3 text-right control-label col-form-label">Features Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" name="feature" id="feature" spellcheck="false"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label">Avaiable in</label>
                            <div class="col-md-2">
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" value="1" class="custom-control-input sl-all" name="agencyServices" id="agencyServices">
                                  <label class="custom-control-label" for="agencyServices">Agency Services</label>
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" value="1" class="custom-control-input sl-all" name="businessServices" id="businessServices">
                                  <label class="custom-control-label" for="businessServices">Business Services</label>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <button type="submit" class="btn btn-danger">Create</button>
                </div>
            </form>
        </div>
    </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
@endsection
