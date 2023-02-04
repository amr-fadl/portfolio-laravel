@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">header home</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('headerhome.update' , $data->id) }}" class="myform" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mt-3 d-flex justify-content-center">
                            <img height="250px" class="_img" src="{{ asset('uploads/frontend/' . $data->image) }}" alt="">
                        </div>
                        <div class="mt-3">
                            <label for="inputName">Title</label>
                            <input type="text" name="title" value="{{ $data->title }}" id="inputTitle" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="inputDescription">Description</label>
                            <textarea id="inputDescription" name="description" class="form-control" rows="4">{{ $data->description }}</textarea>
                        </div>
                        <div class="mt-3">
                            <label for="inputvideo">Video</label>
                            <input type="text" name="video" value="{{ $data->video }}" id="inputvideo" class="form-control">
                        </div>
                        <div class="mt-3">
                            <div class="custom-file">
                                <input type="file" name="image" onchange="showPrev(event, this)" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="mb-3 mt-4">
                            <button type="submit" class="btn btn-success float-right">Save Changes</button>
                            <a href="#" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@section('page_style')
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@endsection

@section('pageTitle', __('Portfolio'))
