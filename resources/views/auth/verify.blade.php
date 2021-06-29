@extends('layouts.app')

@section('content')
  <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
    <div class="w-100 pt-10 pt-lg-7 pb-7" style="max-width: 25rem;">
      <div class="text-center">
        <!--<div class="mb-4">-->
        <!--  <img class="avatar avatar-xxl avatar-4by3" src="{{ asset('backend/assets/svg/illustrations/click.svg') }}" alt="Image Description">-->
        <!--</div>-->

        <h1 class="display-4">{{ __('Verify Your Email Address') }}</h1>

         {{--
                <p class="mb-1">
                    We've sent a verification link to your email address:
                </p>
         --}}
        @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
        @endif


        <span class="d-block text-dark font-weight-bold mb-1">
            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('Please follow the link inside to continue.') }},</span>


        {{-- <div class="mt-4 mb-3">
          <a class="btn btn-primary btn-wide" href="index.html">Skip now</a>
        </div> --}}

        <p>Didn't receive an email? <a href="#">
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Resend') }}</button>.
            </form></a></p>
      </div>
    </div>
  </div>
@endsection
