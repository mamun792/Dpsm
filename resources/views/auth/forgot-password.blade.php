<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>DLPCM - Forgot Password</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashboard_assets/img/favicon.png')}}"">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('dashboard_assets/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('dashboard_assets/css/font-awesome.min.css')}}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('dashboard_assets/css/style.css')}}">


    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="{{asset('dashboard_assets/img/logo-white.png')}}" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Forgot Password?</h1>
								<p class="account-subtitle">Enter your email to get a password reset link</p>

								<!-- Form -->
								<form action="{{ route('password.email') }}" method="POST">
                                       @csrf
                                       @if (session('status'))
                                       <div class="alert alert-primary" role="alert">
                                       {{session('status')}}
                                         </div>
                                       @endif

                                       @if ($errors->any())
                                       @foreach ($errors->all() as $error)
                                       <div class="alert alert-danger" role="alert">
                                      <li>{{$error}}</li>
                                          </div>

                                       @endforeach
                                           @endif
									<div class="form-group">
										<input class="form-control" type="text" name="email" placeholder="Email">
							</div>

									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" type="submit">Reset Password</button>
									</div>
								</form>
								<!-- /Form -->

								<div class="text-center dont-have">Remember your password? <a href="{{ route('login') }}">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src=" {{asset('dashboard_assets/js/jquery-3.2.1.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
        <script src=" {{asset('dashboard_assets/js/popper.min.js')}}"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Custom JS -->
		<script src="{{asset('dashboard_assets/js/script.js ')}}"></script>

    </body>


</html>
