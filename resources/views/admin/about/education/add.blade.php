@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Education') }}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('education.store') }}" class="myform">
                        @csrf
                        <div class="mt-3">
                            <label for="inputTitle">{{ __('Title') }}</label>
                            <input type="text" name="title" value="" id="inputTitle" class="form-control">
                            <x-input-error :messages="$errors->get('title')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="inputdate">{{ __('Date') }}</label>
                            <input type="text" name="date" value="" id="inputdate" class="form-control">
                            <x-input-error :messages="$errors->get('date')" class="errors" />
                        </div>
                        <div class="mt-3">
                            <label for="inputDescription">Description</label>
                            <textarea id="inputDescription" name="description" class="textarea_editor form-control" rows="4"></textarea>
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
@section('pageTitle', __('Add Education'))
