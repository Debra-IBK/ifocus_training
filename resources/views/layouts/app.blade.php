<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="IFocus Pictures Hands-Online Training">
    <meta name="author" content="IFocus Pictures">
    <title>IFocus Pictures | Hands-Online Training</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('backend/assets/img/logo.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('backend/assets/img/logo.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('backend/assets/img/logo.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('backend/assets/img/logo.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('backend/assets/img/logo.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('backend/assets/css/custom.css') }}" rel="stylesheet">
    {{-- <script src="{!! asset('js/app.js') !!}"></script> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div class="container-fluid p-0">
	    <div class="row no-gutters row-height">
	        <div class="col-lg-6 background-image" data-background="url({{ asset('backend/assets/img/pic.jpg') }})">
	            <div class="content-left-wrapper opacity-mask" data-opacity-mask="rgba(10, 50, 70, 0.9)">
	                <a href="#" id="logo"><img src="{{ asset('backend/assets/img/logowhite.png') }}" alt="" width="100"></a>
	                <div id="social">
	                    <ul>
	                        <li><a href="https://web.facebook.com/iFocusPictures" target="_blank"><i class="social_facebook"></i></a></li>
	                        <li><a href="#"><i class="social_twitter" target="_blank"></i></a></li>
	                        <li><a href="https://www.instagram.com/ifocus_pictures/"><i class="social_instagram" target="_blank"></i></a></li>
	                    </ul>
	                </div>
	                <!-- /social -->
	                <div>
	                    <h1>Hands-Online Training</h1>
                        <p></p>
                        <div class="row">
                            <div class="col-sm-6 ">
                                <h5 style="color: white"><u>Video Editing</u></h5>
                                    Duration: 3 months<br><br>
                                    Time: 2 hours every Tuesday<br><br>

                                    Cost:<br>
                                        <ul type="circle">
                                            <li>* One time payment: $1000 </li>
                                            <li>* Installment Plan: 2 installments of $600  </li>

                                        </ul>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-sm-6 ">
                                <h5 style="color: white"><u>Camera Handling </u></h5>
                                Duration: 3 months<br><br>
                                Time: 2 hours every Thursday<br><br>

                                Cost:<br>
                                    <ul type="circle">
                                        <li>* One time payment: $1000 </li>
                                        <li>* Installment Plan: 2 installments of $600</li>

                                    </ul>
                                </li>
                            </ul>
                            </div>
                        </div>

                        <a href="{{ asset('backend/assets/img/file1.pdf') }}" class="btn_1 rounded pulse_bt plus_icon btn_play"> BEFORE YOU REGISTER PLEASE CLICK ON THIS BUTTON TO SEE FULL DETAILS </a>
                        <p></p>
                        <h4 style="color: white">NOTE: All classes will be on zoom</u></h4>

	                </div>
	            </div>
	        </div>
            @yield('content')
	    </div>
	    <!-- /row -->
	</div>
	<!-- /container -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- COMMON SCRIPTS -->
    <script src="{{ asset('backend/assets/js/common_scripts.js') }}"></script>
	<script src="{{ asset('backend/assets/js/common_func.js') }}"></script>

</body>
</html>
