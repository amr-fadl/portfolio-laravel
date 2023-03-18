@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Contact') }}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('contact.update' , $data->id) }}" class="myform" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mt-3">
                            <label for="title_section">{{__('Title Section')}}</label>
                            <input type="text" name="title_section" value="{{ $data->title_section }}" id="title_section" class="form-control">
                            <x-input-error :messages="$errors->get('title_section')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="sub_title_section">{{__('Sub Title')}}</label>
                            <input type="text" name="sub_title_section" value="{{ $data->sub_title_section }}" id="sub_title_section" class="form-control">
                            <x-input-error :messages="$errors->get('sub_title_section')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="email">{{__('Email')}}</label>
                            <input type="text" name="email" value="{{ $data->email }}" id="email" class="form-control">
                            <x-input-error :messages="$errors->get('email')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="inputDescription">{{__('Description')}}</label>
                            <textarea id="description" name="description" class="textarea_editor form-control" rows="4">{{ $data->description }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="errors" />
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

@section('pageTitle', __('Contact'))
