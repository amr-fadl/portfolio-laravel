@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Filter') }}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('filter.store') }}" class="myform" >
                        @csrf
                        <div class="mt-3">
                            <label for="inputName">{{__('Name')}}</label>
                            <input type="text" name="name" value="" id="inputname" class="form-control">
                            <x-input-error :messages="$errors->get('name')" class="errors" />
                        </div>
                        <div class="mb-3 mt-4">
                            <button type="submit" class="btn btn-success float-right">{{__('Save')}}</button>
                            <a href="#" class="btn btn-secondary">{{__('Cancel')}}</a>
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
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
@endsection

@section('page_script')
    <!-- page script -->
    <script>
        $(function () {
            CKEDITOR.replace('description');
        })
    </script>

@endsection

@section('pageTitle', __('Filter'))
