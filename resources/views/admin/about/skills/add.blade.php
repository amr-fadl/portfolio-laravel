@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Skill') }}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('skill.store') }}" class="myform" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3 d-flex justify-content-center">
                            <img height="250px" class="_img" src="{{ asset('uploads/frontend/skills/1-skll.png') }}" alt="">
                        </div>
                        <div class="mt-3">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" value="" id="inputName" class="form-control">
                            <x-input-error :messages="$errors->get('name')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="inputexperience">percentage</label>
                            <input type="number" min="1" max="100" name="percentage" value="" id="inputpercentage" class="form-control">
                            <x-input-error :messages="$errors->get('percentage')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <select name="order_skill" class="form-control wide">
                                @foreach ($orderSkill as $key => $value )
                                    <option value="{{ $key+1 }}" {{$value == 'normal' ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('order_skill')" class="errors" />
                        </div>
                        <div class="mt-4">
                            <div class="custom-file">
                                <input type="file" name="image" onchange="showPrev(event, this)" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file cv</label>
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
@section('pageTitle', __('Add Skill'))
