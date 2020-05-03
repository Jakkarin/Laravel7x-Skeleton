@extends('layouts.clean')

@section('content')
<div class="bg-gradient-primary">
    <div class="container d-flex flex-column vh-100 overflow-hidden">
        <!-- Outer Row -->
        <div class="card o-hidden border-0 shadow-lg my-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-4 p-sm-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">{{ __('auth.page_register_title') }}</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text input-group-text-user">
                                            <i class="ml-1 fa fa-user"></i>
                                        </span>
                                    </div>

                                    <input type="text"
                                        class="form-control form-control-user @error('name') is-invalid @enderror"
                                        placeholder="{{ __('auth.page_user_name') }}" aria-label="DisplayName"
                                        name="name" value="{{ old('name') }}" required />
                                </div>

                                @error('name')
                                <div class="d-block invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror

                                <div class="d-block mt-0 mb-3"></div>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text input-group-text-user" id="emailHelp">
                                            <i class="ml-1 fa fa-envelope"></i>
                                        </span>
                                    </div>

                                    <input type="email"
                                        class="form-control form-control-user @error('email') is-invalid @enderror"
                                        placeholder="{{ __('auth.page_user_email') }}" aria-label="Username"
                                        aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required />
                                </div>

                                @error('email')
                                <div class="d-block invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror

                                <div class="d-block mt-0 mb-3"></div>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text input-group-text-user">
                                                    <i class="ml-1 fa fa-key"></i>
                                                </span>
                                            </div>

                                            <input type="password"
                                                class="form-control form-control-user @error('password') is-invalid @enderror"
                                                placeholder="{{ __('auth.page_user_password') }}" name="password"
                                                aria-label="Password">
                                        </div>

                                        @error('password')
                                        <div class="d-block invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text input-group-text-user">
                                                    <i class="ml-1 fa fa-key"></i>
                                                </span>
                                            </div>

                                            <input type="password"
                                                class="form-control form-control-user @error('password_confirmation') is-invalid @enderror"
                                                placeholder="{{ __('auth.page_user_password_confirmation') }}"
                                                name="password_confirmation" aria-label="Password">
                                        </div>

                                        @error('password_confirmation')
                                        <div class="d-block invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('auth.page_register_button') }}
                                </button>
                            </form>
                            <hr class="mt-4" />
                            <div class="text-center">
                                <a class="small"
                                    href="{{ route('password.request') }}">{{ __('auth.page_forgot_password') }}</a>
                                <span class="mx-2">|</span>
                                <a class="small"
                                    href="{{ route('login') }}">{{ __('auth.page_already_account_link') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection