@extends('layouts.dashboard_master')
@section('contant')


@if (session('passS'))
<div class="alert alert-success">
    {{ session('passS') }}
</div>
@endif

@if (session('update'))
<div class="alert alert-success">
    {{ session('update') }}
</div>
@endif


<div class="row">
    <div class="col-md-12">
        <div class="profile-header">
            <div class="row align-items-center">
                <div class="col-auto profile-image">
                    <a href="#">
                        <span class="user-img  ">
                            @if (auth()->user()->profile_photo)
                            <img class="rounded-circle "
                                src="{{asset('uploads/profile_photo/')}}/{{auth()->user()->profile_photo}}" height="40"
                                width="40" alt="user">
                            @else
                            <img class="rounded-circle " src="{{ Avatar::create(auth()->user()->name)->toBase64() }}"
                                width="45">
                            @endif

                        </span>
                    </a>
                </div>
                <div class="col ml-md-n2 profile-user-info">
                    <h4 class="user-name mb-0">{{$user->name}}</h4>
                    <h6 class="text-muted">{{$user->email}}</h6>
                    <h6 class="text-muted">{{$user->role}}</h6>

                </div>

            </div>
        </div>
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
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-between">
                                    <span>Personal Details</span>
                                    <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1 btn btn-primary">Edit</i></a>
                                </h5>
                                <div class="row">
                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                    <p class="col-sm-10">{{$user->name}}</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Role</p>
                                    <p class="col-sm-10">{{$user->role}}</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
                                    <p class="col-sm-10">{{$user->email}}</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Create date</p>
                                    <p class="col-sm-10">{{$user->created_at}}</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Update date</p>
                                    <p class="col-sm-10">{{$user->updated_at}}</p>
                                </div>

                            </div>
                        </div>

                        <!-- Edit Details Modal -->
                        <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document" >
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Personal Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{route('change.information')}}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label> Profile Photo</label>
                                                <div class="mb-4">
                                                    @if (auth()->user()->profile_photo)
                                                    <img class="rounded-circle"  width="100" height="100" src="{{asset('uploads/profile_photo/')}}/{{auth()->user()->profile_photo}}"
                                                        width="50" alt="user">
                                                    @else
                                                    <img class="rounded-circle ml-3" src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" width="45">
                                                    @endif
                                                </div>
                                                <input type="file" class="form-control" name="profile_photo" onchange="readURL(this)" ;>

                                                @error('profile_photo')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                                @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                                @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block">Update Information</button>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Edit Details Modal -->

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
                            <div class="col-md-10 col-lg-6">
                                <form method="POST" action="{{route('change.password')}}">
                                    @csrf


                                    <div class="form-group  ">
                                        <label>Current Password</label>
                                        <input type="password" class="form-control  @error('current_password') is-invalid  @enderror" id="password" name="current_password"
                                            placeholder="Current Password">



                                        @error('current_password')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror

                                        @if (session('pass'))

                                        <span class="text-danger"> {{ session('pass') }}</span>

                                        @endif
                                    </div>


                                    <div class="form-group  ">
                                        <label>New Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid  @enderror" id="npassword" name="password" placeholder="new password">


                                        @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Old Password</label>
                                        <input type="password" class="form-control @error('password_confirmation') is-invalid  @enderror" name="password_confirmation" placeholder="old password">
                                        @error('password_confirmation')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Change Password</button>
                            </div>

                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Change Password Tab -->

        </div>
    </div>
</div>



@endsection
