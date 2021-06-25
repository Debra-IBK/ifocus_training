@extends('layouts.app')

@section('content')

<div class="col-lg-6 d-flex flex-column content-right">
    <div class="container my-auto py-5">
        <div class="row">
            <div class="col-lg-9 col-xl-7 mx-auto">
                <h4 class="mb-3">REGISTER</h4>
                <form class="input_style_1" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input id="fname" type="text" placeholder="First name" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>
                        {{-- <input type="text" name="full_name" id="full_name" class="form-control"> --}}
                        @error('fname')
                            <span style="color: red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input id="lname" type="text" placeholder="Last name" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                        @error('lname')
                            <span style="color: red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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
                        <label for="phone_no">Phone No</label>
                        <input id="phone_no" type="text" placeholder="Phone No" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ old('phone_no') }}" required autocomplete="phone_no">
                            @error('phone_no')
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
                    
                    <div class="form-group terms mb-4">
                        <label class="container_check">I agree to the <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and Privacy Policy</a>.
                            <input type="checkbox" name="agree" id="agree">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <button type="submit" class="btn_1 full-width">
                        {{ __('Register') }}
                    </button>
                </form>
                <p class="text-center mt-3 mb-0">Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
            </div>
        </div>
    </div>
    <div class="container pb-3 copy">© {{ date('Y') }} IFocus Pictures - All Rights Reserved.</div>
</div>
  
@endsection
