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
                width: 250px;
            }
        }

    </style>
@endsection
@section('content')

    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="title">
                                    <h4>Create Course</h4>
                                </div>
                                <nav aria-label="breadcrumb" role="navigation">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Create Course</li>
                                    </ol>
                                </nav>
                            </div>

                        </div>
                    </div>

            <div class="card-box mb-30">
                <h2 class="h4 pd-20">CREATE COURSE</h2>
                <div class="pd-20 card-box mb-30">
                        <div class="clearfix">
                            <div class="pull-left">
                                {{-- <h4 class="text-blue h4">Payment Form</h4>
                                <p class="mb-30">Please fill the form appropriately</p> --}}
                            </div>
                            {{-- <div class="pull-right">
                                <a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"
                                    data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
                            </div> --}}
                        </div>
                    <form method="POST" action="{{ route('admin.create_course') }}" role="form">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-6 col-md-2 col-form-label">Course name</label>
                            <div class="col-sm-6 col-md-10">
                                <input class="form-control col-8" type="text" id="course_name" name="course_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-6 col-md-2 col-form-label">Payment Option</label>
                            <div class="col-sm-6 col-md-10">

                                <select class="custom-select col-8" id="payment_type" name="payment_type">
                                    <option selected disabled value="0">Select payment option</option>
                                    <option value="one-time">One Time Payment</option>
                                    <option value="installment">Instalmental</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-6 col-md-2 col-form-label">Fee</label>
                            <div class="col-sm-6 col-md-10">
                                <input class="form-control col-8" type="text" id="amount" name="amount">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-6 col-md-2 col-form-label">Duration</label>
                            <div class="col-sm-6 col-md-10">
                                <input class="form-control col-8" type="text" id="duration" name="duration">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-6 col-md-2 col-form-label">Zoom Link</label>
                            <div class="col-sm-6 col-md-10">
                                <input class="form-control col-8" type="text" id="zoom_link" name="zoom_link">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-6 col-md-2 col-form-label">Passcode</label>
                            <div class="col-sm-6 col-md-10">
                                <input class="form-control col-8" type="text" id="passcode" name="passcode">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-6 col-md-2 col-form-label"></label>
                            <div class="col-sm-6 col-md-10">
                                <button type="submit" class="btn btn-primary btn-sm scroll-click">
                                {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
