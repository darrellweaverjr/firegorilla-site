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
                <h4 class="page-title">Agency Solutions</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Agecny Solutions</a>
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
                <form class="form-horizontal" method="post" action="{{ route('agency-solutions.update', $agencySolution->id) }}" enctype="multipart/form-data">
                  @method('PATCH')
                   @csrf
                    <div class="card-body">
                        <h4 class="card-title">Hero</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$agencySolution->headerTitle}}" name="headerTitle" id="headerTitle" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Subtitle</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$agencySolution->headerSubtitle}}" name="headerSubtitle" id="headerSubtitle" placeholder="Subtitle">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Hero Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" name="headerBody" id="headerBody" spellcheck="false">{{$agencySolution->headerBody}}</textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                      <h4 class="card-title">Section 1</h4>
                        <div class="form-group row">
                          <label for="lname" class="col-sm-3 text-right control-label col-form-label">Image (540px x 405px)</label>
                          <div class="input-group col-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="sectionOneIMG" id="sectionOneIMG">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$agencySolution->sectionOneTitle}}" name="sectionOneTitle" id="sectionOneTitle" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Subtitle</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$agencySolution->sectionOneSubtitle}}" name="sectionOneSubtitle" id="sectionOneSubtitle" placeholder="Subtitle">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Paragraph Text</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" name="sectionOneBody" id="sectionOneBody" spellcheck="false">{{$agencySolution->sectionOneBody}}</textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                      <h4 class="card-title">Section 2</h4>
                        <div class="form-group row">
                          <label for="lname" class="col-sm-3 text-right control-label col-form-label">Image (540px x 405px)</label>
                          <div class="input-group col-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="sectionTwoIMG" id="sectionTwoIMG">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$agencySolution->sectionTwoTitle}}" name="sectionTwoTitle" id="sectionTwoTitle" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Subtitle</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$agencySolution->sectionTwoSubtitle}}" name="sectionTwoSubtitle" id="sectionTwoSubtitle" placeholder="Subtitle">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Paragraph Text</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" name="sectionTwoBody" id="sectionTwoBody" spellcheck="false">{{$agencySolution->sectionTwoBody}}</textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                      <h4 class="card-title">Section 3</h4>
                        <div class="form-group row">
                          <label for="lname" class="col-sm-3 text-right control-label col-form-label">Image (540px x 405px)</label>
                          <div class="input-group col-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="sectionThreeIMG" id="sectionThreeIMG">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$agencySolution->sectionThreeTitle}}"  name="sectionThreeTitle" id="sectionThreeTitle" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Subtitle</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$agencySolution->sectionThreeSubtitle}}"  name="sectionThreeSubtitle" id="sectionThreeSubtitle" placeholder="Subtitle">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Paragraph Text</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" name="sectionThreeBody" id="sectionThreeBody" spellcheck="false">{{$agencySolution->sectionThreeBody}}</textarea>
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
