@extends('layouts.backend')

@section('css')
    <style>
        /* Media query for mobile viewport */
        @media screen and (max-width: 400px) {
            #paypal-button-container {
                width: 100%;
            }
        }

        /* Media query for desktop viewport */
        @media screen and (min-width: 400px) {
            #paypal-button-container {
                width: 100%;
            }
        }

    </style>
@endsection
@section('content')

    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="font-20 weight-500 mb-10 text-capitalize">
                            Hey<div class="weight-600 font-30 text-blue">{{ Auth::user()->fname }}!</div>
                        </h4>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }} <br>
                        {{-- {{ __('Please proceed to make payment') }} --}}
                        {{-- <p class="font-16 max-width-600">Please before you proceed to make payments make sure you've read
                            the <a href="{{ asset('backend/assets/img/file1.pdf') }}" style="color: red"
                                target="_blank">full details </a> about the training.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
               
            </div>

            	{{-- <h4 class="h4 text-blue mb-30">Background and color</h4> --}}
				<div class="row clearfix">
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-primary card-box">
							{{-- <div class="card-header">JOIN ZOOM MEETING</div> --}}
							<div class="card-body">
                                <a href="{{ route('portal.make-payment') }}" ><h5 class="card-title text-white">MAKE PAYMENT</h5></a>
								<p class="card-text"></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-secondary card-box">
							{{-- <div class="card-header">CREATE COURSE</div> --}}
							<div class="card-body">
								<h5 class="card-title text-white">JOIN MEETING</h5>
								<p class="card-text"></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-success card-box">
							{{-- <div class="card-header">USER MANAGEMENT</div> --}}
							<div class="card-body">
                                <h5 class="card-title"></h5>
								<p class="card-text"></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-black bg-warning card-box">
							{{-- <div class="card-header"></div> --}}
							<div class="card-body">
								<h5 class="card-title"></h5>
								<p class="card-text"></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-info card-box">
							{{-- <div class="card-header">Header</div> --}}
							<div class="card-body">
								<h5 class="card-title text-white"></h5>
								<p class="card-text"></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-dark card-box">
							{{-- <div class="card-header">Header</div> --}}
							<div class="card-body">
								<h5 class="card-title text-white"></h5>
								<p class="card-text"></p>
							</div>
						</div>
					</div>
				</div>
           
        </div>
    </div>
@endsection

@section('js')
@endsection
