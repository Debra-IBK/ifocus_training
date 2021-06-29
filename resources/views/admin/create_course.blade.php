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
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                    <form method="POST" role="form">

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
                                <input class="form-control col-8" type="text" id="fee" name="fee">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-6 col-md-2 col-form-label">Duration</label>
                            <div class="col-sm-6 col-md-10">
                                <input class="form-control col-8" type="text" id="duration" name="duration">
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
                return fetch("{{ route('portal.process.payment') }}", {
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
                // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {
                    // This function shows a transaction success message to your buyer.
                    console.log(details);
                    alert('Transaction completed by ' + details.payer.name.given_name);
                });
            }
        }).render('#paypal-button-container');
        //This function displays Smart Payment Buttons on your web page.
    </script>
@endsection
