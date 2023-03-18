@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">

                    <h3 class="card-title">{{ __('setting') }}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>

                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('setting.update' , $setting->id) }}" class="myform" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mt-3 d-flex justify-content-center">
                            <div class=" d-flex flex-wrap">
                                <img class="_img" style="max-height: 70px" src="{{ asset('uploads/frontend/'.$setting->logo) }}" alt="">
                            </div>
                        </div>

                        <div class="mt-3">
                            <label for="inputName">contact_phone</label>
                            <input type="text" name="contact_phone" value="{{ $setting->contact_phone }}" id="inputcontact_phone" class="form-control">
                            <x-input-error :messages="$errors->get('contact_phone')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="contact_desc">contact_desc</label>
                            <textarea id="contact_desc" name="contact_desc" class="textarea_editor form-control" rows="4">{{ $setting->contact_desc }}</textarea>
                            <x-input-error :messages="$errors->get('contact_desc')" class="errors" />
                        </div>

                        <div class="mt-3">
                            <label for="inputName">address_title</label>
                            <input type="text" name="address_title" value="{{ $setting->address_title }}" id="inputaddress_title" class="form-control">
                            <x-input-error :messages="$errors->get('address_title')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="address_desc">address_desc</label>
                            <textarea id="address_desc" name="address_desc" class="textarea_editor form-control" rows="4">{{ $setting->address_desc }}</textarea>
                            <x-input-error :messages="$errors->get('address_desc')" class="errors" />
                        </div>

                        <div class="mt-3">
                            <label for="inputName">social_title</label>
                            <input type="text" name="social_title" value="{{ $setting->social_title }}" id="inputsocial_title" class="form-control">
                            <x-input-error :messages="$errors->get('social_title')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="social_desc">social_desc</label>
                            <textarea id="social_desc" name="social_desc" class="textarea_editor form-control" rows="4">{{ $setting->social_desc }}</textarea>
                            <x-input-error :messages="$errors->get('social_desc')" class="errors" />
                        </div>

                        <div class="mt-4">
                            <div class="custom-file">
                                <input type="file" name="logo" value="" multiple onchange="showPrev(event, this)" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            @foreach ($errors->get('logo') as $value)
                                <x-input-error :messages="$value" class="errors" />
                            @endforeach
                            <x-input-error :messages="$errors->get('logo')" class="errors" />
                        </div>

                        <div class="mb-3 mt-4">
                            <button type="submit" class="btn btn-success float-right">{{__('Save Changes')}}</button>
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

@section('pageTitle', __('settings'))

