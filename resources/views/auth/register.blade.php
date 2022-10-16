@extends('layouts.app')

@section('title', 'Account Registration | TridentCatch')

@section('content')
<div class="register">
    <div class="register__container register__flex">
        <div class="register__row">
            <div class="register__auth-page">
                <h1>Sign Up</h1>
                <form class="register__form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="register__text-field top-down-margin">
                        <input id="name" name="name" type="text" class="@error('name') is-invalid @enderror"
                            value="{{ old('name') }}" required placeholder="Username">
                        <label for="name" class="sr-only">{{ __('Username') }}</label>
                    </div>

                    <div class="register__text-field top-down-margin">
                        <input id="email" class="@error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" type="email" required autocomplete="email"
                            placeholder="Email Address">
                        <label for="email" class="sr-only">{{ __('Email Address') }}</label>
                    </div>

                    <div class="register__text-field top-down-margin">
                        <input id="password" class="@error('password') is-invalid @enderror" name="password"
                            type="password" required placeholder="Password">
                        <label for="password" class="sr-only">{{ __('Password') }}</label>

                        @error('password')
                            <strong class="invalid-feedback" role="alert">
                                {{ $message }}
                            </strong>
                        @enderror
                    </div>

                    <div class="register__text-field margin-bottom-zero">
                        <input id="password_confirmation" name="password_confirmation" type="password"
                            class="@error('password_confirmation') is-invalid @enderror" required
                            placeholder="Confirm Password">
                        <label for="password_confirmation" class="sr-only">{{ __('Confirm Password') }}</label>
                    </div>

                    <button type="submit">{{ __('Sign Up') }}</button>

                    <div class="sign-in">Already a member?
                        <a href="{{ route('login') }}"> Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection