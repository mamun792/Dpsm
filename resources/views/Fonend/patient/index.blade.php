@extends('layouts.profile_master')

@section('contents')


<div class="col-md-7 col-lg-8 col-xl-12">

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
                                <a href="{{route('profile.insert')}}" class="btn btn-primary">
                                    Add info
                                </a>
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
                    <h5 class="card-title d-flex justify-content-between">
                        <span>Personal Details</span>
                        <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i
                                class="fa fa-edit mr-1"></i>Edit</a>
                    </h5>
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

                <div class="profile-menu mt-2">
                    <div class="card ">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-solid">

                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu1">Password</a>
                                </li>


                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-between">
                        <span>Personal Details</span>
                        <a class="edit-link"  href="{{route('profile.details.edit',$profile_dets->id)}}"><i
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

            @endforeach

            @endif
        </div>






    </div>


</div>


@endsection
