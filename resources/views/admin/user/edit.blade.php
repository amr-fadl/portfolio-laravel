@extends('admin.layouts.app')

@section('content')
        <div class="modal">
            <div class="modal__container">
                <div class="modal__featured">
                    <div class="modal__circle">
                        <img src="{{ asset('uploads/users/'. $user->image) }}" class="modal__product _img" />
                    </div>
                </div>
                <div class="modal__content">
                    <h2 class="title_form">{{ __('Edit') }} {{ __('User') }}</h2>

                    <form method="POST" action="{{ route('user.update' , $user->id) }}" class="myform" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <ul class="form-list">
                            <!-- Name -->
                            <li class="form-list__row">
                                <x-text-input id="name" class="" placeholder="" type="text"
                                    name="name" value='{{ $user->name }}' required autofocus />
                                <label>{{ __('Name') }}</label>
                                <x-input-error :messages="$errors->get('name')" class="errors" />
                            </li>

                            <!-- Email Address -->
                            <li class="form-list__row">
                                <x-text-input id="email" class="" placeholder="" type="text"
                                    name="email" value='{{ $user->email }}' required />
                                <label>{{ __('Email') }}</label>
                                <x-input-error :messages="$errors->get('email')" class="errors" />
                            </li>

                            <!-- Role and permissions -->
                            <li class="form-list__row mb-1">
                                <!-- Role  -->
                                <div class="form-group">
                                    <select name="user_role" class="form-control wide">
                                        {{-- <option value="{{ __('Role') }}">{{ __('Role') }}</option> --}}
                                        @foreach ($allRole as $role)
                                            <option value="{{ $role->name }}"  {{ $user->hasRole($role->name) ? 'selected' : ''}}>{{ $role->display_name }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <label>{{ __('Role') }}</label> --}}
                                    <x-input-error :messages="$errors->get('user_role')" class="errors" />
                                </div>

                                <!-- permissions -->
                                <div class="form-group d-flex">
                                    <select id="multiple" name="user_permissions[]" multiple class="form-control wide">
                                        {{-- <option value="{{ __('Permissions') }}">{{ __('Permissions') }}</option> --}}
                                        @foreach ($allPerm as $permissions)
                                            <option value="{{ $permissions->name }}" {{ $user->hasPermission($permissions->name) ? 'selected' : ''}}>{{ $permissions->display_name }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <label>{{ __('Permissions') }}</label> --}}
                                    <x-input-error :messages="$errors->get('permissions')" class="errors" />
                                </div>
                            </li>

                            <!-- Password -->
                            <li class="form-list__row">
                                <x-text-input id="password" class="" placeholder="" type="password"
                                    name="password" autocomplete="new-password" />
                                <label>{{ __('Password') }}</label>
                                <x-input-error :messages="$errors->get('password')" class="errors" />
                            </li>

                            <!-- image -->
                            <li class="form-list__row app_input_file">
                                <input type="file" id="upload_file" onchange="showPrev(event, this)" value=""
                                    class="custom-file-input" name="image">
                                <label for="upload_file">{{ __('Select A New Photo') }}</label>
                                <script>
                                    function showPrev(event , input) {
                                        event.target.files.length > 0 ? document.querySelector('._img').src = URL.createObjectURL(event.target
                                            .files[0]) : '';
                                            input.nextElementSibling.style.borderColor = '#24cf6064'
                                            input.nextElementSibling.style.color = '#24cf6064'
                                            // input.nextSibling.style.borderColor = '#24cf6064'
                                    }
                                </script>
                                <x-input-error :messages="$errors->get('image')" class="errors" />
                            </li>

                            <li>
                                <x-primary-button class="button"><small><i
                                            class="far fa-user pr-2"></i>{{ __('Edit') }} {{ __('User') }}</small>
                                </x-primary-button>
                            </li>
                        </ul>
                    </form>
                </div> <!-- END: .modal__content -->
            </div> <!-- END: .modal__container -->
        </div> <!-- END: .modal -->
    </div>
@endsection

@section('page_style')
    @include('admin.user.style')
@endsection

@section('pageTitle', 'add user')
