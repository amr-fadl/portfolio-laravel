@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('service') }}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('service.update', $service->id ) }}" class="myform" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mt-3 d-flex justify-content-center">
                            <div class="_img d-flex flex-wrap"></div>
                        </div>
                        <div class="mt-3">
                            <label for="inputName">Title</label>
                            <input type="text" name="title" value="{{ $service->title }}" id="inputTitle" class="form-control">
                            <x-input-error :messages="$errors->get('title')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="inputmini_description">mini_description</label>
                            <textarea id="inputmini_description" name="mini_description" class="form-control" rows="4">{{ $service->mini_description }}</textarea>
                            <x-input-error :messages="$errors->get('mini_description')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="inputDescription">Description</label>
                            <textarea id="description" name="description" class="textarea_editor form-control" rows="4">{{ $service->description }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="errors" />
                        </div>
                        <div class="mt-4">
                            <div class="custom-file">
                                <input type="file" name="images[]" value="" multiple onchange="showPrev(event, this)" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            @foreach ($errors->get('images.*') as $value)
                                <x-input-error :messages="$value" class="errors" />
                            @endforeach
                            <x-input-error :messages="$errors->get('images')" class="errors" />
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

@section('pageTitle', __('service'))
