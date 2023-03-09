@extends('layouts.profile_master')

@section('contents')


<div class="col-md-7 col-lg-8 col-xl-12">
    @if (session('succ'))
    <div class="alert alert-success">{{ session('succ') }}</div>
    @endif


    @if ($profile_det->count()==0)
    <div class="row form-row">

        <div class="col-12 col-md-12">
            <div class="profile-header">
                <div class="card ">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                @if (auth()->user()->profile_photo)
                                <img class="rounded "
                                    src="{{asset('uploads/profile_photo/')}}/{{auth()->user()->profile_photo}}"
                                    height="100" width="100" alt="user">
                                @else
                                <img class="rounded-circle "
                                    src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" height="100"
                                    width="100">
                                @endif
                            </div>
                            <div class="col ml-md-n2 profile-user-info mb-2">
                                <h4 class="user-name mb-0">Name:</h4>
                                <h6 class="text-muted">Email:</h6>
                                <div class="user-Location"><i class="fa fa-map-marker"></i> Address
                                </div>
                                <div class="about-text"> .....</div>
                            </div>

                            <div class="col-auto profile-btn">
                                {{-- {{url('profile/info')}}/{{$user->id}} --}}
                                {{-- <a href="{{route('profile.insert')}}" class="btn btn-primary">
                                    Add info
                                </a> --}}
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalScrollable">
                                    Add info
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-menu mt-3">
                <div class="card ">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
        </div>


        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name: ...</p>
                        <p class="col-sm-10"></p>
                    </div>
                    <div class="row">
                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Date of Birth: ...</p>
                        <p class="col-sm-10"></p>
                    </div>
                    <div class="row">
                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID: ... </p>
                        <p class="col-sm-10"></p>
                    </div>
                    <div class="row">
                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Mobile: ....</p>
                        <p class="col-sm-10"></p>
                    </div>
                    <div class="row">
                        <p class="col-sm-2 text-muted text-sm-right mb-0">Address: ....</p>
                        <p class="col-sm-10 mb-0">
                    </div>

                </div>
            </div>

            @else
            <div class="profile-header">
                <div class="card ">
                    <div class="card-body">
                        @foreach ($profile_det as $profile_dets)
                        <div class="row align-items-center">


                            <div class="col-auto profile-image">
                                <a href="#">
                                    @if (auth()->user()->profile_photo)
                                    <img class="rounded "
                                        src="{{asset('uploads/profile_photo/')}}/{{auth()->user()->profile_photo}}"
                                        height="100" width="100" alt="user">
                                    @else
                                    <img class="rounded" src="{{ Avatar::create(auth()->user()->name)->toBase64() }}"
                                        height="100" width="100">
                                    @endif

                                </a>
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                                <h4 class="user-name mb-0">{{$profile_dets->fname}} {{$profile_dets->lname}}</h4>
                                <h6 class="text-muted">{{$profile_dets->email}}</h6>
                                <div class="user-Location"><i class="fa fa-map-marker"></i>
                                    {{$profile_dets->adderss}}
                                </div>
                                <div class="about-text">{{$profile_dets->about}}
                                    <br>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


{{--  --}}
<div class="profile-menu">
    <ul class="nav nav-tabs nav-tabs-solid">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
        </li>
    </ul>
</div>
<div class="tab-content profile-tab-cont">

    <!-- Personal Details Tab -->
    <div class="tab-pane fade show active" id="per_details_tab">

        <!-- Personal Details -->
        <div class="row">
            <div class="col-lg-12">

                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-between">
                            <span>Personal Details</span>

                            <a href="{{route('profile.details.edit',$profile_dets->id)}}"><i
                                    class="fa fa-edit mr-1"></i>Edit</a>
                        </h5>
                        <div class="row">
                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                            <p class="col-sm-10"> {{$profile_dets->fname}} {{$profile_dets->lname}}</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                            <p class="col-sm-10">{{$profile_dets->date_of_birth}}</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
                            <p class="col-sm-10">{{$profile_dets->email}}</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                            <p class="col-sm-10">{{$profile_dets->phone_number}}</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Blood Group</p>
                            <p class="col-sm-10">{{$profile_dets->bgroup}}</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-2 text-muted text-sm-right mb-0">Address</p>
                            <p class="col-sm-10 mb-0">{{$profile_dets->adderss}}
                        </div>
                    </div>

                </div>


            </div>


        </div>
        <!-- /Personal Details -->

    </div>
    <!-- /Personal Details Tab -->

    <!-- Change Password Tab -->
    <div id="password_tab" class="tab-pane fade">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Change Password</h5>
                <div class="row">
                    <div class="col-md-10 col-lg-8">

                        <form method="POST" action="{{route('change.password')}}">
                            @csrf


                            <div class="form-group  ">
                                <label>Current Password</label>
                                <input type="password"
                                    class="form-control  @error('current_password') is-invalid  @enderror" id="password"
                                    name="current_password" placeholder="Current Password">



                                @error('current_password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror

                                @if (session('pass'))

                                <span class="text-danger"> {{ session('pass') }}</span>

                                @endif
                            </div>


                            <div class="form-group  ">
                                <label>New Password</label>
                                <input type="password" class="form-control @error('password') is-invalid  @enderror"
                                    id="npassword" name="password" placeholder="new password">


                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password"
                                    class="form-control @error('password_confirmation') is-invalid  @enderror"
                                    name="password_confirmation" placeholder="old password">
                                @error('password_confirmation')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary ">Change Password</button>
                    {{-- </div> --}}



                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Password Tab -->

</div>

{{--  --}}

            </div>





            @endforeach

            @endif
        </div>






    </div>




</div>


@endsection



    <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Basic Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('profile.store')}}">
                        @csrf
                        <div class="row form-row">

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="fname" value="{{old('fname')}}">
                                    @error('fname')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lname" value="{{old('lname')}}">
                                    @error('lname')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>

                                    <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                                        name="date_of_birth" value="{{old('date_of_birth')}}" />

                                    @error('date_of_birth')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Blood Group</label>
                                    <select class="form-control select" name="bgroup">
                                        <option>A-</option>
                                        <option>A+</option>
                                        <option>B-</option>
                                        <option>B+</option>
                                        <option>AB-</option>
                                        <option>AB+</option>
                                        <option>O-</option>
                                        <option>O+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form">
                                    <label>Email ID</label>
                                    <input type="email" class="form-control" name="email" value="{{old('email')}}">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" name="phone_number" value="{{old('phone_number')}}"
                                        placeholder="Phone Number"
                                        class="form-control @error('phone_number') is-invalid @enderror" />
                                    @error('phone_number')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control @error('city') is-invalid
                          @enderror"" value=" {{old('city')}}" placeholder="City Name" name="city"> @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Divition Name</label>
                                    <select class="form-control select" name="division">
                                        <option>Dhaka</option>
                                        <option>Rangpur</option>
                                        <option>B-</option>
                                        <option>B+</option>
                                        <option>AB-</option>
                                        <option>AB+</option>
                                        <option>O-</option>
                                        <option>O+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control" name="zip" value="{{old('zip')}}">
                                    @error('zip')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control @error('country') is-invalid @enderror"
                                        value="{{old('country')}}" placeholder="Country Name" name="country" />
                                    @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="adderss" value="{{old('adderss')}}">
                                    @error('adderss')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>About <span class="text-danger">*</span> </label>
                                    <textarea class="form-control @error('about') is-invalid @enderror" rows="3"
                                        name="about">
                           {{old('about')}}</textarea>
                                    @error('about')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Save Info</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

