<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Doccure - Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard_assets/img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/css/font-awesome.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/css/style.css')}}">

    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="{{ asset('dashboard_assets/img/logo-white.png')}}" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>

								<!-- Form -->
								<form method="POST" action="{{ route('register') }}">
                          @csrf
                                    <div class="form-group">
										<input class="form-control" type="text" name="name" value="{{old('name')}}" placeholder="Name">
                                 @error('name')
                                 <span class="text-danger">{{$message}}</span>
                                 @enderror
									</div>
									<div class="form-group">
										<input class="form-control" type="text" name="email" value="{{old('email')}}" placeholder="Email">
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
									</div>
									<div class="form-group input-group">
										<input class="form-control" id="password" type="password"  name="password" value="{{old('password')}}" placeholder="Password">

                                        <div class="input-group-append" onclick="myFunction()">

                                            <span class="input-group-text">

                                              <i class="fa fa-eye"></i>

                                            </span>

                                          </div>

                              <script>
                                  function myFunction() {
                                    var x = document.getElementById("password");
                                    if (x.type === "password") {
                                      x.type = "text";
                                    } else {
                                      x.type = "password";
                                    }
                                  }
                                  </script>
									</div>

                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
									<div class="form-group">
										<input class="form-control" type="password"  name="password_confirmation" placeholder="Confirm Password">
                                        @error('password_confirmation')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
									</div>
                                    {!! NoCaptcha::display() !!}
                                     <br>
                                     @error('g-recaptcha-response')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror

									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" type="submit">Register</button>
									</div>
								</form>
								<!-- /Form -->

								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>

								<!-- Social Login -->
								<div class="social-login">
									<span>Register with</span>
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="{{route('google.redirect')}}" class="google"><i class="fa fa-google"></i></a>
								</div>
								<!-- /Social Login -->

								<div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="{{ asset('dashboard_assets/js/jquery-3.2.1.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
        <script src="{{ asset('dashboard_assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('dashboard_assets/js/bootstrap.min.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{ asset('dashboard_assets/js/script.js')}}"></script>
        {!! NoCaptcha::renderJs() !!}
    </body>


</html>
