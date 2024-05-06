@extends('layouts.app')

@section('content')
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100 bg-light border">
            <div class="col-md-6">
                <img src="{{asset('img/team.png')}}"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-6 border-start py-5 px-5">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="name">{{ __('Name') }}</label>
                        <input type="text" id="name" class="form-control form-control-lg bg-white @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="e-mel">{{ __('Email Address') }}</label>
                        <input type="email" id="e-mel" class="form-control form-control-lg bg-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">{{ __('Password') }}</label>
                        <input type="password" id="password" class="form-control form-control-lg bg-white @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
                        
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input type="password" id="password-confirm" class="form-control form-control-lg bg-white" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Register') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
