@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Portfolio') }}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('portfolio.store') }}" class="myform" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3 d-flex justify-content-center">
                            <img height="250px" class="_img" src="{{ asset('uploads/frontend/Portfolio/default.png') }}" alt="">
                        </div>
                        <div class="mt-3">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" value="" id="inputName" class="form-control">
                            <x-input-error :messages="$errors->get('name')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="inputexperience">mini_description</label>
                            <input type="text" min="1" max="100" name="mini_description" value="" id="inputmini_description" class="form-control">
                            <x-input-error :messages="$errors->get('mini_description')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="inputDescription">Description</label>
                            <textarea id="description" name="description" class="textarea_editor form-control" rows="4"></textarea>
                            <x-input-error :messages="$errors->get('description')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <select name="filter_portfolio" class="form-control wide">
                                @foreach ($filter as $value )
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('filter_portfolio')" class="errors" />
                        </div>
                        <div class="mt-4">
                            <div class="custom-file">
                                <input type="file" name="image" onchange="showPrev(event, this)" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">image portfolio</label>
                            </div>
                            <x-input-error :messages="$errors->get('image')" class="errors" />
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
@section('pageTitle', __('Add Portfolio'))
