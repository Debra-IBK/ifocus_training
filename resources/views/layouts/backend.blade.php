<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<meta name="description" content="IFocus Pictures Hands-Online Training">
    <meta name="author" content="IFocus Pictures">
    <title>IFocus Pictures | Hands-Online Training</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend/assets/vendors/images/logo.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend/assets/vendors/images/logo.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/vendors/images/logo.png') }}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> --}}

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/styles/style.css') }}">
     @yield('css')
</head>
<body  class="header-dark">
	{{-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="{{ asset('backend/assets/vendors/images/ifocsus.png') }}" sizes="32x32" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>100%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div> --}}

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>

		</div>
		<div class="header-right">
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
                            <i class="icon-copy dw dw-user1"></i>
						</span>
						<span class="user-name">
                            <!-- Authentication Links -->
                            @guest
                            <ul >
                                @if (Route::has('login'))
                                    <li style="display: inline;">
                                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li style="display: inline;">
                                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            </ul>
                            @else

                                        {{ auth()->user()->full_name }}

                            @endguest
                          </span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="{{ route('portal.profile') }}"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="{{ asset('backend/assets/img/file1.pdf') }}" target="_blank"><i class="dw dw-help"></i> Help</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i class="dw dw-logout"></i>
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
					</div>
				</div>
			</div>
			&nbsp;&nbsp;&nbsp;
		</div>
	</div>


	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="#">
				<img src="{{ asset('backend/assets/vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo">
				<img src="{{ asset('backend/assets/vendors/images/logowhite.png') }}" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
                    <li>
						<a href="{{ route('admin.home') }}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
					</li>
                  
                    <li>
						<a href="{{ asset('backend/assets/img/file1.pdf') }}" target="_blank" class="dropdown-toggle no-arrow">
							<span class="micon icon-copy fi-page-doc"></span><span class="mtext">Getting Started</span>
						</a>
					</li>

					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>

                    <li>
						<a href="{{ route('admin.payments.index') }}" class="dropdown-toggle no-arrow">
							<span class="micon icon-copy fa fa-credit-card"></span><span class="mtext">ZOOM</span>
						</a>
					</li>

                    <li>
						<a href="{{ route('admin.payments.index') }}" class="dropdown-toggle no-arrow">
							<span class="micon icon-copy fa fa-credit-card"></span><span class="mtext">PAYMENTS</span>
						</a>
					</li>


                    <li>
						<a href="{{ route('admin.courses.index') }}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">COURSES</span>
						</a>
					</li>

                    <li>
						<a href="{{ route('admin.users.index') }}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">USERS</span>
						</a>
					</li>


					<li>
						<a href="{{ route('portal.replay') }}" target="_blank" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-certificate"></span>
							<span class="mtext">CERTIFICATES </span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

    @yield('content')
    <div class="pd-ltr-20">
        <div class="footer-wrap pd-20 mb-20 card-box">
            Developed by  <a href="https://melissoft.tech" target="_blank">Melistech</a>
        </div>
    </div>

	<!-- js -->
	<script src="{{ asset('backend/assets/vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/scripts/layout-settings.js') }}"></script>
	{{-- <script src="{{ asset('backend/assets/src/plugins/apexcharts/apexcharts.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('backend/assets/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('backend/assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('backend/assets/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('backend/assets/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('backend/assets/vendors/scripts/dashboard.js') }}"></script> --}}
    @yield('js')



</body>
</html>
