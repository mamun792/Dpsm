<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Favicons -->
    <link type="image/x-icon" href="{{ asset('frontend_assets/img/favicon.png') }}" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/plugins/fontawesome/css/fontawesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend_assets/plugins/fontawesome/css/all.min.css') }} ">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{asset('frontend_assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">

    <link rel="stylesheet" href="{{asset('frontend_assets/plugins/dropzone/dropzone.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">


    {{-- f dvksyh, --}}


</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <header class="header">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="index-2.html" class="navbar-brand logo">
                        {{-- <img src="assets/img/logo.png" class="img-fluid" alt="Logo"> --}}
                        <h1 class="text-success">DLPCMS</h1>
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="index-2.html" class="menu-logo">
                            <img src="assets/img/logo.png" class="img-fluid" alt="Logo">

                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li>
                            <a href="{{route('index')}}">Home</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
                                <li><a href="appointments.html">Appointments</a></li>
                                <li><a href="schedule-timings.html">Schedule Timing</a></li>
                                <li><a href="my-patients.html">Patients List</a></li>
                                <li><a href="patient-profile.html">Patients Profile</a></li>
                                <li><a href="chat-doctor.html">Chat</a></li>
                                <li><a href="invoices.html">Invoices</a></li>
                                <li><a href="doctor-profile-settings.html">Profile Settings</a></li>
                                <li><a href="reviews.html">Reviews</a></li>
                                <li><a href="doctor-register.html">Doctor Register</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu active">
                            <a href="#">Patients <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="search.html">Search Doctor</a></li>
                                <li><a href="doctor-profile.html">Doctor Profile</a></li>
                                <li><a href="booking.html">Booking</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="booking-success.html">Booking Success</a></li>
                                <li><a href="patient-dashboard.html">Patient Dashboard</a></li>
                                <li><a href="favourites.html">Favourites</a></li>
                                <li><a href="chat.html">Chat</a></li>
                                <li class="active"><a href="profile-settings.html">Profile Settings</a></li>
                                <li><a href="change-password.html">Change Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="voice-call.html">Voice Call</a></li>
                                <li><a href="video-call.html">Video Call</a></li>
                                <li><a href="search.html">Search Doctors</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="components.html">Components</a></li>
                                <li class="has-submenu">
                                    <a href="invoices.html">Invoices</a>
                                    <ul class="submenu">
                                        <li><a href="invoices.html">Invoices</a></li>
                                        <li><a href="invoice-view.html">Invoice View</a></li>
                                    </ul>
                                </li>
                                <li><a href="blank-page.html">Starter Page</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="admin/index.html" target="_blank">Admin</a>
                        </li>
                        <li class="login-link">
                            <a href="login.html">Login / Signup</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">
                    <li class="nav-item contact-item">
                        <div class="header-contact-img">
                            <i class="far fa-hospital"></i>
                        </div>
                        <div class="header-contact-detail">
                            <p class="contact-header">Contact</p>
                            <p class="contact-info-header"> 01745010925</p>
                        </div>
                    </li>

                    <!-- User Menu -->
                    <li class="nav-item dropdown has-arrow logged-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <span class="user-img">
                                @if (auth()->user()->profile_photo)
                                <img class="rounded-circle "
                                    src="{{asset('uploads/profile_photo/')}}/{{auth()->user()->profile_photo}}"
                                    height="100" width="100" alt="user">
                                @else
                                <img class="rounded-circle "
                                    src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" height="100"
                                    width="100">
                                @endif
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    @if (auth()->user()->profile_photo)
                                    <img class="rounded-circle "
                                        src="{{asset('uploads/profile_photo/')}}/{{auth()->user()->profile_photo}}"
                                        height="100" width="100" alt="user">
                                    @else
                                    <img class="rounded-circle "
                                        src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" height="100"
                                        width="100">
                                    @endif
                                </div>
                                <div class="user-text">
                                    <h6>{{auth()->user()->name}}</h6>
                                    <p class="text-muted mb-0">{{auth()->user()->role}}</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="patient-dashboard.html">Dashboard</a>
                            <a class="dropdown-item" href="{{route('profile.edit')}}">Profile Settings</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                    <i data-feather="log-out"></i>
                                    <span>Log out</span></a>
                            </form>
                        </div>
                    </li>
                    <!-- /User Menu -->

                </ul>
            </nav>
        </header>
        <!-- /Header -->

        <!-- Breadcrumb -->
        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">



                                <li class="breadcrumb-item "><a href="{{route('index')}}">Home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                            </ol>
                        </nav>

                        <h2 class="breadcrumb-title">Profile Settings</h2>


                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->


        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <!-- Profile Sidebar -->
                    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                        <div class="profile-sidebar">
                            <div class="widget-profile pro-widget-content">
                                <div class="profile-info-widget">
                                    <a href="#" class="booking-doc-img">
                                        @if (auth()->user()->profile_photo)
                                        <img class="rounded-circle "
                                            src="{{asset('uploads/profile_photo/')}}/{{auth()->user()->profile_photo}}"
                                            height="80" width="80" alt="user">
                                        @else
                                        <img class="rounded-circle "
                                            src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" height="80"
                                            width="80">
                                        @endif
                                    </a>
                                    <div class="profile-det-info">

                                        <h3>{{auth()->user()->name}}</h3>

                                        <div class="patient-details">
                                            <h5><i class="fas fa-envelope"></i> {{auth()->user()->email}}
                                            </h5>
                                            {{-- <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i>
                                                {{$profile_dets->adderss}}</h5> --}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-widget">
                                @if (auth()->user()->role=='patient')
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-columns"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('favourit.details')}}">
                                                <i class="fas fa-bookmark"></i>
                                                <span>Favourites</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="chat.html">
                                                <i class="fas fa-comments"></i>
                                                <span>Message</span>
                                                <small class="unread-msg">23</small>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="{{route('profile/details')}}">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            {{-- {{route('profile.edit')}} --}}
                                            <a href="{{route('profile.change.password')}}">
                                                <i class="fas fa-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li>

                                            <span>.</span>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
																	this.closest('form').submit();">
                                                    <i class="fas fa-sign-out-alt"></i>
                                                    <span>Log out</span></a>
                                            </form>

                                        </li>
                                    </ul>
                                </nav>

                                @endif

                            </div>

                        </div>
                    </div>
                    <!-- /Profile Sidebar -->

                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">

                                <!-- Profile Settings Form -->

                                {{-- <div class="row form-row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group"> --}}
                                            @yield('contents')
                                            {{-- </div>


                                    </div>


                                </div> --}}

                            </div>

                        </div>
                    </div>

                {{-- </div> --}}
                <!-- Page Content -->
                <!-- /Page Content -->

                <!-- Footer -->
                <footer class="footer">

                    <!-- Footer Top -->
                    <div class="footer-top">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">

                                    <!-- Footer Widget -->
                                    <div class="footer-widget footer-about">
                                        <div class="footer-logo">
                                            {{-- <img src="{{ asset('frontend_assets/img/footer-logo.png') }}" alt="logo"> --}}
                                            <h1 class="text-white lg-100">DLPCMS</h1>
                                        </div>
                                        <div class="footer-about-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor
                                                incididunt ut labore et dolore magna aliqua. </p>
                                            <div class="social-icon">
                                                <ul>
                                                    <li>
                                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank"><i
                                                                class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank"><i class="fab fa-dribbble"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Footer Widget -->

                                </div>

                                <div class="col-lg-3 col-md-6">

                                    <!-- Footer Widget -->
                                    <div class="footer-widget footer-menu">
                                        <h2 class="footer-title">For Patients</h2>
                                        <ul>
                                            <li><a href="search.html"><i class="fas fa-angle-double-right"></i> Search
                                                    for
                                                    Doctors</a></li>
                                            <li><a href="{{ route('login') }}"><i class="fas fa-angle-double-right"></i>
                                                    Login</a></li>
                                            <li><a href="{{ route('register') }}"><i
                                                        class="fas fa-angle-double-right"></i>
                                                    Register</a>
                                            </li>
                                            <li><a href="booking.html"><i class="fas fa-angle-double-right"></i>
                                                    Booking</a>
                                            </li>
                                            <li><a href="patient-dashboard.html"><i
                                                        class="fas fa-angle-double-right"></i>
                                                    Patient Dashboard</a></li>
                                        </ul>
                                    </div>
                                    <!-- /Footer Widget -->

                                </div>

                                <div class="col-lg-3 col-md-6">

                                    <!-- Footer Widget -->
                                    <div class="footer-widget footer-menu">
                                        <h2 class="footer-title">For Doctors</h2>
                                        <ul>
                                            <li><a href="appointments.html"><i class="fas fa-angle-double-right"></i>
                                                    Appointments</a></li>
                                            <li><a href="chat.html"><i class="fas fa-angle-double-right"></i> Chat</a>
                                            </li>
                                            <li><a href="{{ route('login') }}"><i class="fas fa-angle-double-right"></i>
                                                    Login</a></li>
                                            <li><a href="#"><i class="fas fa-angle-double-right"></i>
                                                    Register</a></li>
                                            <li><a href="doctor-dashboard.html"><i
                                                        class="fas fa-angle-double-right"></i>
                                                    Doctor Dashboard</a></li>
                                        </ul>
                                    </div>
                                    <!-- /Footer Widget -->

                                </div>

                                <div class="col-lg-3 col-md-6">

                                    <!-- Footer Widget -->
                                    <div class="footer-widget footer-contact">
                                        <h2 class="footer-title">Contact Us</h2>
                                        <div class="footer-contact-info">
                                            <div class="footer-address">
                                                <span><i class="fas fa-map-marker-alt"></i></span>
                                                <p> 3556 Dhaka, Senpara Parbata,<br> Mirpur -10, CA 94108 </p>
                                            </div>
                                            <p>
                                                <i class="fas fa-phone-alt"></i>
                                                0174501036
                                            </p>
                                            <p class="mb-0">
                                                <i class="fas fa-envelope"></i>
                                                dlpcm@.com
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Footer Widget -->

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /Footer Top -->

                    <!-- Footer Bottom -->
                    <div class="footer-bottom">
                        <div class="container-fluid">

                            <!-- Copyright -->
                            <div class="copyright">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="copyright-text">
                                            <p class="mb-0"><a href="http://127.0.0.1:8000/">Copyright
                                                    2022--{{ date('Y') }} {{ env('APP_NAME') }}©</a></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">

                                        <!-- Copyright Menu -->
                                        <div class="copyright-menu">
                                            <ul class="policy-menu">
                                                <li><a href="http://127.0.0.1:8000/">Terms and Conditions</a></li>
                                                <li><a href="privacy-policy.html">Policy</a></li>
                                            </ul>
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <!-- /Copyright -->

                        </div>
                    </div>
                    <!-- /Footer Bottom -->

                </footer>
                <!-- /Footer -->


            {{-- </div> --}}

            <!-- jQuery -->
            <script src="{{ asset('frontend_assets/js/jquery.min.js') }}"></script>

            <!-- Bootstrap Core JS -->
            <script src="{{ asset('frontend_assets/js/popper.min.js') }}"></script>
            <script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>

            <!-- Slick JS -->
            <script src="{{ asset('frontend_assets/js/slick.js') }}"></script>

            <!-- Custom JS -->
            <script src="{{ asset('frontend_assets/js/script.js') }}  "></script>




            <!-- Select2 JS -->
            <script src=" {{ asset('frontend_assets/plugins/select2/js/select2.min.js') }}"></script>

            <!-- Datetimepicker JS -->
            <script src=" {{ asset('frontend_assets/js/moment.min.js') }}  "></script>
            <script src="{{ asset('frontend_assets/js/bootstrap-datetimepicker.min.js') }}  "></script>

            <!-- Sticky Sidebar JS -->
            <script src="{{ asset('frontend_assets/plugins/theia-sticky-sidebar/ResizeSensor.js ') }}  "></script>
            <script src="{{ asset('frontend_assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js ') }}  ">
            </script>


</body>


</html>
