@extends('layouts.portal')

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
                    {{-- <div class="col-md-4">
                        <img src="{{ asset('backend/assets/vendors/images/banner-img.png') }}" alt="">
                    </div> --}}
                    <div class="col-md-8">
                        <h4 class="font-20 weight-500 mb-10 text-capitalize">
                            Welcome back <div class="weight-600 font-30 text-blue">{{ Auth::user()->fname }}!</div>
                        </h4>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }} <br>
                        {{-- {{ __('Please proceed to make payment') }} --}}
                        <p class="font-16 max-width-600">Please before you proceed to make payments make sure you've read
                            the <a href="{{ asset('backend/assets/img/file1.pdf') }}" style="color: red"
                                target="_blank">full details </a> about the training.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-xl-6 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data">
                                <div id="chart"></div>
                            </div>
                            <div class="widget-data">
                                <div class="h4 mb-0">Hands-Online Camera Handling Training</div>
                                <div class="weight-600 font-14">one time payment $1000 <br>Installmental $600 twice ()</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data">
                                <div id="chart2"></div>
                            </div>
                            <div class="widget-data">
                                <div class="h4 mb-0">Hands-Online Video Editing Training</div>
                                <div class="weight-600 font-14">Deals</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="card-box mb-30">
                <h2 class="h4 pd-20">Payments</h2>
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Payment Form</h4>
                            <p class="mb-30">Please fill the form appropriately</p>
                        </div>
                        {{-- <div class="pull-right">
                            <a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"
                                data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
                        </div> --}}
                    </div>
                    <form method="POST" role="form">

                        <div class="form-group row">
                            <label class="col-sm-6 col-md-2 col-form-label">Course</label>
                            <div class="col-sm-6 col-md-10">
                                <select class="custom-select col-8" id="course" name="course">
                                    <option selected disabled selected="0" value="">Select course</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course['id'] }}">{{ $course['name'] }}</option>
                                    @endforeach
                                </select>
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
                                <input class="form-control col-8" type="text" id="fee" name="fee" readonly>
                            </div>
                        </div>
                        <input class="form-control" type="hidden" id="amount" name="amount">

                        <div class="form-group row">
                            <label class="col-sm-6 col-md-2 col-form-label"> </label>
                            <div class="col-sm-6 col-md-10">
                                <div class="col-8" style="padding: 0" id="paypal-button-container"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"> </script>

    <script>
        $(document).on('change', "#course", function() {

            if ($('#payment_type').val() == "installment" && $('#course').val() < 3 && $('#course').val() != "") {
                document.getElementById('fee').value = "$600 (initial deposit)";
                document.getElementById('amount').value = "600";
            }

            if ($('#payment_type').val() == "one-time" && $('#course').val() < 3 && $('#course').val() != "") {
                document.getElementById('fee').value = "$1000";
                document.getElementById('amount').value = "1000";
            }

            if ($('#payment_type').val() == "installment" && $('#course').val() == 3) {
                document.getElementById('fee').value = "$800";
                document.getElementById('amount').value = "800";
            }

            if ($('#payment_type').val() == "one-time" && $('#course').val() == 3) {
                document.getElementById('fee').value = "$1500";
                document.getElementById('amount').value = "1500";
            }
        });

        $(document).on('change', "#payment_type", function() {

            if ($('#payment_type').val() == "installment" && $('#course').val() < 3 && $('#course').val() != "") {
                document.getElementById('fee').value = "$600 (initial deposit)";
                document.getElementById('amount').value = "600";
            }

            if ($('#payment_type').val() == "one-time" && $('#course').val() < 3 && $('#course').val() != "") {
                document.getElementById('fee').value = "$1000";
                document.getElementById('amount').value = "1000";
            }

            if ($('#payment_type').val() == "installment" && $('#course').val() == 3) {
                document.getElementById('fee').value = "$800";
                document.getElementById('amount').value = "800";
            }

            if ($('#payment_type').val() == "one-time" && $('#course').val() == 3) {
                document.getElementById('fee').value = "$1500";
                document.getElementById('amount').value = "1500";
            }
        });

        paypal.Buttons({
            createOrder: function() {
                const data = {
                    course: $('#course').val(),
                    payment_type: $('#payment_type').val(),
                    amount: document.getElementById('amount').value,
                };
                return fetch("{{ route('portal.process-payment') }}", {
                    method: 'post',
                    headers: {
                        'content-type': 'application/json'
                    },
                    body: JSON.stringify(data),
                }).then(function(res) {
                    return res.json();
                }).then(function(data) {
                    return data.id; // Use the key sent by your server's response, ex. 'id' or 'token'
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    return fetch("{{ route('portal.capture-payment') }}", {
                        method: 'post',
                        headers: {
                            'content-type': 'application/json'
                        },
                        body: {
                            orderID: details.id,
                            details: details,
                        }
                    });
                }).then(function(details) {
                    // This function shows a transaction success message to your buyer.
                    console.log(details);
                    alert('Transaction completed by ' + details.payer.name.given_name);
                });
            }
        }).render('#paypal-button-container');
        //This function displays Smart Payment Buttons on your web page.
    </script>
@endsection
