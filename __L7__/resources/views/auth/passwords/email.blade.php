@extends('layouts.clean')

@section('content')
<div class="bg-gradient-primary">
    <div class="container d-flex flex-column vh-100 overflow-hidden">
        <!-- Outer Row -->
        <div class="row justify-content-center h-100">
            <div class="col-xl-10 col-lg-12 col-md-9 my-auto">
                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-4 p-sm-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">{{ __('auth.page_reset_title') }}</h1>
                                        <p class="mb-4">{{ __('auth.page_reset_desc') }}</p>
                                    </div>

                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif

                                    <form class="user" method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text input-group-text-user" id="emailHelp">
                                                    <i class="ml-1 fa fa-envelope"></i>
                                                </span>
                                            </div>

                                            <input type="email"
                                                class="form-control form-control-user @error('email') is-invalid @enderror"
                                                placeholder="{{ __('auth.page_user_email') }}" aria-label="Username"
                                                aria-describedby="emailHelp" name="email" value="{{ old('email') }}"
                                                required />
                                        </div>

                                        @error('email')
                                        <div class="d-block invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror

                                        <div class="d-block mt-0 mb-3"></div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('auth.page_reset_button') }}
                                        </button>
                                    </form>
                                    <hr class="mt-4" />
                                    <div class="text-center">
                                        <a class="small"
                                            href="{{ route('register') }}">{{ __('auth.page_register_link') }}</a>
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
    </div>
</div>
@endsection