@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Partners') }}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('partner.update' , $data->id) }}" class="myform" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mt-3 d-flex justify-content-center">
                            <style>
                                img{
                                    max-width: 150px;
                                    min-width: 80px;
                                }
                            </style>
                            <div class="_img d-flex flex-wrap">
                                @if (json_decode($data->logo_partners) > 1)
                                    @foreach (json_decode($data->logo_partners) as $img)
                                        <img  src="{{ asset('uploads/frontend/partners/'.$img) }}" alt="">
                                        @endforeach
                                @endif

                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="inputName">Title Section</label>
                            <input type="text" name="title_section" value="{{ $data->title_section }}" id="inputtitle_section" class="form-control">
                            <x-input-error :messages="$errors->get('title_section')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="inputName">Title</label>
                            <input type="text" name="title" value="{{ $data->title }}" id="inputTitle" class="form-control">
                            <x-input-error :messages="$errors->get('title')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="inputexperience">whatsapp conversation</label>
                            <input type="text" name="link_conversation" value="{{$data->link_conversation}}" id="inputwhatsapp_conversation" class="form-control">
                            <x-input-error :messages="$errors->get('link_conversation')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="inputDescription">Description</label>
                            <textarea id="description" name="description" class="textarea_editor form-control" rows="4">{{ $data->description }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="errors" />
                        </div>
                        <div class="mt-4">
                            <div class="custom-file">
                                <input type="file" name="logo_partners[]" multiple onchange="showPrev(event, this)" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <x-input-error :messages="$errors->get('logo_partners')" class="errors" />
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

@section('pageTitle', __('Partners'))
