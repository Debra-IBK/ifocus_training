@extends('layouts.portal')

@push('title')
    {{ 'Dashboard' }}
@endpush
@push('css')
    <style>

    </style>
@endpush
@section('content')
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
                <p class="font-16">Please before you proceed to make payments make sure you've
                    read
                    the <a href="{{ asset('backend/assets/img/file1.pdf') }}" style="color: red" target="_blank">full
                        details </a> about the training.</p>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-4 col-sm-12 mb-30">
            <div class="card text-white bg-primary card-box">
                <div class="card-body">
                    <a href="{{ route('portal.payment.create') }}">
                        <h5 class="card-title text-white text-uppercase">Make Payment</h5>
                    </a>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-30">
            <div class="card text-white bg-secondary card-box">
                <div class="card-body">
                    <a href="{{ route('portal.course.index') }}">
                        <h5 class="card-title text-white text-uppercase">view courses</h5>
                    </a>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <!--<div class="col-md-4 col-sm-12 mb-30">-->
        <!--    <div class="card text-white bg-success card-box">-->
        <!--        {{-- <div class="card-header">USER MANAGEMENT</div> --}}-->
        <!--        <div class="card-body">-->
        <!--            <h5 class="card-title"></h5>-->
        <!--            <p class="card-text"></p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="col-md-4 col-sm-12 mb-30">-->
        <!--    <div class="card text-black bg-warning card-box">-->
        <!--        {{-- <div class="card-header"></div> --}}-->
        <!--        <div class="card-body">-->
        <!--            <h5 class="card-title"></h5>-->
        <!--            <p class="card-text"></p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="col-md-4 col-sm-12 mb-30">-->
        <!--    <div class="card text-white bg-info card-box">-->
        <!--        {{-- <div class="card-header">Header</div> --}}-->
        <!--        <div class="card-body">-->
        <!--            <h5 class="card-title text-white"></h5>-->
        <!--            <p class="card-text"></p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="col-md-4 col-sm-12 mb-30">-->
        <!--    <div class="card text-white bg-dark card-box">-->
        <!--        {{-- <div class="card-header">Header</div> --}}-->
        <!--        <div class="card-body">-->
        <!--            <h5 class="card-title text-white"></h5>-->
        <!--            <p class="card-text"></p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
@endsection

@push('js')
@endpush
