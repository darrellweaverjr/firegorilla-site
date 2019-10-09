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
                <h4 class="page-title">Business Solutions</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Business Solutions</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                <form class="form-horizontal" method="post" action="{{ route('business-solutions.store', $businessSolution->id) }}" enctype="multipart/form-data">
                 @method('PATCH')
                   @csrf
                    <div class="card-body">
                        <h4 class="card-title">Hero</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$businessSolution->headerTitle}}" id="headerTitle" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Subtitle</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$businessSolution->headerSubtitle}}" id="headerSubtitle" placeholder="Subtitle">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Hero Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" id="headerBody" spellcheck="false">{{$businessSolution->headerBody}}</textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                      <h4 class="card-title">Section 1</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$businessSolution->discoverTitle}}" id="discoverTitle" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Subtitle</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$businessSolution->discoverSubtitle}}" id="discoverSubtitle" placeholder="Subtitle">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Paragraph Text</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" id="discoverBody" spellcheck="false">{{$businessSolution->headerBody}}</textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                      <h4 class="card-title">Section 2</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$businessSolution->attackTitle}}" id="attackTitle" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Subtitle</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$businessSolution->attackSubtitle}}" id="attackSubtitle" placeholder="Subtitle">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Paragraph Text</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" id="attackBody" spellcheck="false">{{$businessSolution->attackBody}}</textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                      <h4 class="card-title">Section 3</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$businessSolution->createTitle}}"  id="createTitle" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Subtitle</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$businessSolution->createSubtitle}}"  id="createSubtitle" placeholder="Subtitle">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Paragraph Text</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" id="createBody" spellcheck="false">{{$businessSolution->createBody}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <button type="submit" class="btn btn-danger">Update</button>
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
