 
 @extends('layouts.backend')
    
    @section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Payment Receipt</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Payment Receipt</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="invoice-wrap">
					<div class="invoice-box">
						<div class="invoice-header">
							<div class="logo text-center">
								<img src="{{ asset('backend/assets/vendors/images/logo.png') }}" alt=""width="10%">
							</div>
						</div>
						<h4 class="text-center mb-30 weight-600">INVOICE</h4>
						<div class="row pb-30">
							<div class="col-md-6">
								<h5 class="mb-15">Client Name</h5>
								<p class="font-14 mb-5">Date Issued: <strong class="weight-600">10 Jan 2018</strong></p>
								<p class="font-14 mb-5">Invoice No: <strong class="weight-600">4556</strong></p>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<p class="font-14 mb-5">Your Name </strong></p>
									<p class="font-14 mb-5">Your Address</p>
									<p class="font-14 mb-5">City</p>
									<p class="font-14 mb-5">Postcode</p>
								</div>
							</div>
						</div>
						<div class="invoice-desc pb-30">
							<div class="invoice-desc-head clearfix">
                                <div class="invoice-sub">Description/Course</div>
								<div class="invoice-rate">Ref_ID</div>
								<div class="invoice-hours">Payment Date</div>
								<div class="invoice-subtotal">Amount</div>
                                
								
                               
                                
							</div>
							<div class="invoice-desc-body">
								<ul>
									<li class="clearfix">
                                        <div class="invoice-sub">
                                            <p class="font-14 mb-5">Course: <strong class="weight-600">Video Editing</strong></p>
                                            <p class="font-14 mb-5">Payment Type: <strong class="weight-600">Installment</strong></p>
                                            </div>
										<div class="invoice-rate">1233321344320</div>
										<div class="invoice-hours">12/12/2021</div>
										<div class="invoice-subtotal"><span class="weight-600">$1000</span></div>
									</li>
								
								</ul>
							</div>
							<div class="invoice-desc-footer">
								<div class="invoice-desc-head clearfix">
									<div class="invoice-sub"></div>
									<div class="invoice-rate"></div>
									<div class="invoice-subtotal">Total</div>
								</div>
								<div class="invoice-desc-body">
									<ul>
										<li class="clearfix">
											<div class="invoice-sub">
											
											</div>
											<div class="invoice-rate font-20 weight-600"></div>
											<div class="invoice-subtotal"><span class="weight-600 font-24 text-danger">$8000</span></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<h4 class="text-center pb-20">Thank You!!</h4>
					</div>
				</div>
            </div>
          
        </div>
    </div>

                
    @endsection