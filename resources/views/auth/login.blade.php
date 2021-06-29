@extends('layouts.app')

@section('content')
<div class="col-lg-6 d-flex flex-column content-right">
    <div class="container my-auto py-5">
        <div class="row">
            <div class="col-lg-9 col-xl-7 mx-auto">
                <h4 class="mb-3">{{ __('Login') }}</h4>
                <form class="input_style_1" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        {{-- <input type="email" name="email_address" id="email_address" class="form-control"> --}}
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span style="color: red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span style="color: red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="clearfix mb-3">
                        <div class="float-left">
                            <label class="container_check">Remember Me
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="checkmark"></span>
                            </label>
                            {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> --}}

                        </div>
                        <div class="float-right">
                            {{-- <a id="forgot" href="javascript:void(0);">Forgot Password?</a> --}}
                            @if (Route::has('password.request'))
                            <a  href="{{ route('password.request') }}">
                                {{ __('Forgot Password?') }}
                            </a>
                        @endif
                        </div>
                    </div>
                    <button type="submit" class="btn_1 full-width">
                        {{ __('Login') }}
                    </button>
                </form>
                <p class="text-center mt-3 mb-0">New here? <a href="{{ route('register') }}">Sign Up</a></p>
            </div>
        </div>
    </div>
    <div class="container pb-3 copy">© {{ date('Y') }} IFocus Pictures - All Rights Reserved.</div>
</div>
@endsection
