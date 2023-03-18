@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('social') }}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('social.store') }}" class="myform" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3 d-flex justify-content-center">
                            <img height="50px" class="_img" src="{{ asset('uploads/frontend/social/icon.png') }}" alt="">
                        </div>
                        <div class="mt-3">
                            <label for="inputlink">link</label>
                            <input type="text" name="link" value="{{ $social->link }}" id="inputlink" class="form-control">
                            <x-input-error :messages="$errors->get('link')" class="errors" />
                        </div>
                        <div class="mt-4">
                            <div class="custom-file">
                                <input type="file" name="icon" onchange="showPrev(event, this)" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose icon social</label>
                            </div>
                            <x-input-error :messages="$errors->get('icon')" class="errors" />
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
@section('pageTitle', __('Edit social'))
