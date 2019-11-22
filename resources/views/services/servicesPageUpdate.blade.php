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
                <h4 class="page-title">Update Services Page</h4>
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
                <form class="form-horizontal" method="post" action="{{ route('servicespage.update', $servicesPage->id) }}" enctype="multipart/form-data">
                  @method('PATCH')
                   @csrf
                    <div class="card-body">
                      <h4 class="card-title">Services</h4>
                        <div class="form-group row">
                            <label for="pageTitle" class="col-sm-3 text-right control-label col-form-label">Header Title</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="pageTitle" value="{{ $servicesPage->pageTitle }}" id="pageTitle">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="serivces_title" class="col-sm-3 text-right control-label col-form-label">Services Title</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="serivces_title" value="{{ $servicesPage->serivces_title }}" id="serivces_title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="serivces_desc" class="col-sm-3 text-right control-label col-form-label">Services Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" name="serivces_desc" id="serivces_desc" spellcheck="true">{{ $servicesPage->serivces_desc }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="feature" class="col-sm-3 text-right control-label col-form-label">Services Price</label>
                            <div class="input-group col-sm-2">
                              <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                              </div>
                              <input type="text" class="form-control" name="serivce_price" value="{{ $servicesPage->serivce_price }}" id="serivce_price" aria-label="Amount (to the nearest dollar)">
                              <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                              </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="spend_title" class="col-sm-3 text-right control-label col-form-label">Spend Title</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="spend_title" value="{{ $servicesPage->spend_title }}" id="spend_title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="spend_desc" class="col-sm-3 text-right control-label col-form-label">Spend Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" name="spend_desc" id="spend_desc" spellcheck="true">{{ $servicesPage->spend_desc }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="feature" class="col-sm-3 text-right control-label col-form-label">Spend Price</label>
                            <div class="input-group col-sm-2">
                              <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                              </div>
                              <input type="text" class="form-control" name="spend_price" value="{{ $servicesPage->spend_price }}" id="spend_price" aria-label="Amount (to the nearest dollar)">
                              <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                              </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="spend_title" class="col-sm-3 text-right control-label col-form-label">Call To Action</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $servicesPage->pageCTA }}" name="pageCTA" id="pageCTA">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <button type="submit" class="btn btn-success">Update</button>
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
