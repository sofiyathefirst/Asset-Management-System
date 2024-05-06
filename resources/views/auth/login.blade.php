@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <img class="d-block mx-auto mb-4" alt="icon" width="330" height="120" src="{{asset('img/logo-corporate.png')}}">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-6 p-5 border bg-white">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="e-mel">{{ __('Email') }}</label>
                        <input type="email" id="e-mel" class="form-control form-control-lg bg-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">{{ __('Password') }}</label>
                        <input type="password" id="password" class="form-control form-control-lg bg-white @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                        
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <!-- Checkbox -->
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                        <label class="form-check-label" for="remember"> Remember me </label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="text-muted text-decoration-none" href="{{ route('password.request') }} ">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Log In') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
