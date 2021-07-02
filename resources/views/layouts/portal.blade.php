<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <meta name="description" content="IFocus Pictures Hands-Online Training">
    <meta name="author" content="IFocus Pictures">
    <title> @stack('title') | IFocus Pictures | Hands-Online Training </title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend/assets/vendors/images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend/assets/vendors/images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/vendors/images/logo.png') }}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> --}}

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/assets/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/styles/style.css') }}">
    @stack('css')
</head>

<body class="header-dark">

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
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="notification-list mx-h-350 customscroll">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('backend/assets/vendors/images/img.jpg') }}" alt="">
                                        <h3>John Doe</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                            {{ auth()->user()->full_name }}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="{{ route('portal.profile') }}"><i class="dw dw-user1"></i>
                            Profile</a>
                        <a class="dropdown-item" href="{{ asset('pdf/file1.pdf') }}" target="_blank">
                            <i class="dw dw-help"></i> Help</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

    @include('layouts.partials.left-side-bar')

    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20">
            @if (session('success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif


            @yield('content')

        </div>
    </div>

    <div class="pd-ltr-20">
        <div class="footer-wrap pd-20 mb-20 card-box">
            Developed by <a href="https://melissoft.tech" target="_blank">Melistech</a>
        </div>
    </div>
    <!-- js -->
    <script src="{{ asset('backend/assets/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/scripts/layout-settings.js') }}"></script>

    @stack('js')

</body>

</html>
