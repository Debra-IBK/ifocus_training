@extends('layouts.app')

@section('content')

<div class="col-lg-6 d-flex flex-column content-right">
    <div class="container my-auto py-5">
        <div class="row">
            <div class="col-lg-9 col-xl-7 mx-auto">
                <h4 class="mb-3">{{ __('Reset Password') }}</h4>
                <form class="input_style_1" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
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


                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <button type="submit" class="btn_1 full-width">
                        {{ __('Reset Password') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="container pb-3 copy">© {{ date('Y') }} IFocus Pictures - All Rights Reserved.</div>
</div>
@endsection
