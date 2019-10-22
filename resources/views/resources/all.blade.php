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
                <h4 class="page-title">Resources</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">All</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card bg-light">
            <div class="card-body">
              <div class="d-flex no-block align-items-center m-b-10">
                  <h4 class="card-title">All Resources</h4>
              </div>
              <div class="table-responsive">
                <table id="file_export" class="table bg-white table-bordered nowrap display">
                    <thead>
                        <tr>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th style="text-align:center;">Edit</th>
                            <th style="text-align:center;">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($resources as $resource)
                        <tr>
                            <td>
                                <a href="javscript:void(0)">
                                <img src="{{$resource->featuredImage}}" alt="{{$resource->resourcesTitle}}" class="rounded" width="75" /></a>
                            </td>
                            <td>{{$resource->resourcesTitle}}</td>
                            <td>{{  Str::limit($resource->resourcesDesc, $limit = 90, $end = '...') }}</td>
                            <td style="text-align:center;">
                              <button type="button" class="btn btn-lg btn-icon" data-toggle="tooltip" data-original-title="Edit">
                                <a class="icon-btn" href="{{ route('resources.edit',$resource->id) }}"><i class="ti-pencil-alt2" aria-hidden="true"></i></a>
                              </button>
                            </td>
                            <td style="text-align:center;">
                              <form action="{{ route('resources.destroy', $resource->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-lg btn-icon" data-toggle="tooltip" data-original-title="Delete">
                                  <i class="ti-close" aria-hidden="true"></i>
                                </button>
                              </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
@endsection
