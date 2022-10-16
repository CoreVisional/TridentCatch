@extends('layouts.app')

@section('title', 'Login now to start fishing for freshness | TridentCatch')

@section('content')
<div class="login">
    <div class="login__container login__flex">
        <div class="login__row">
            <div class="login__auth-page">
                <h1>Sign In</h1>
                <form class="login__form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="login__text-field top-down-margin">
                        <input id="email" name="email"
                            class="@error('email') is-invalid @enderror"
                            value="{{ old('email') }}" autocomplete="email" required placeholder="Email">

                        <label for="email" class="sr-only">{{ __('Email') }}</label>

                        @error('email')
                            <strong class="invalid-feedback" role="alert">
                                {{ $message }}
                            </strong>
                        @enderror
                    </div>

                    <div class="login__text-field top-down-margin">
                        <input id="password" class="@error('password') is-invalid @enderror" name="password"
                            type="password" required placeholder="Password">
                        <label for="password" class="sr-only">{{ __('Password') }}</label>

                        @error('password')
                            <strong class="invalid-feedback" role="alert">
                                {{ $message }}
                            </strong>
                        @enderror
                    </div>

                    <div class="login__chkbox login__flex">
                        <input type="checkbox" name="remember">
                        <span>Remember Me</span>
                    </div>

                    <button type="submit">{{ __('Sign In') }}</button>

                    <div class="forgot-password">
                        <a href="#">Forgot password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection