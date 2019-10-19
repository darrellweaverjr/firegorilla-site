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
                <h4 class="page-title">Add Resource</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Resources</a>
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
                <form class="form-horizontal" method="post" action="{{ route('resources.store') }}" enctype="multipart/form-data">
                   @csrf
                    <div class="card-body">
                      <h4 class="card-title">Resources</h4>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Thumbnail</label>
                            <div class="input-group col-4">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">Upload</span>
                              </div>
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="featuredImage" id="featuredImage">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                              </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">PDF</label>
                            <div class="input-group col-4">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">Upload</span>
                              </div>
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="resourcesPDF" id="resourcesPDF">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                              </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  name="resourcesTitle" id="resourcesTitle" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" name="resourcesDesc" id="resourcesDesc" spellcheck="false"></textarea>
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
