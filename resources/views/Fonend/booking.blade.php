@extends('layouts.fonend_master')
@section('content')
<div class="container-fluid mt-5">
    <div class="row align-items-center">
        <div class="col-md-8 col-12">
            @if (session('login_error'))
            <div class="alert alert-danger">{{ session('login_error') }}</div>
            @endif
            <form method="post" action="{{route('custom.login')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">

                </div>
                <label for="exampleInputPassword1">Password</label>
                <div class="input-group form-group">
                    <input type="password" name="password" placeholder="Password" id="password"
                        class="form-control   @error('password') is-invalid @enderror">




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


                {{-- <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password">
                </div> --}}
                {{-- <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
