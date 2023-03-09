@extends('layouts.profile_master')

@section('contents')



<div class="col-md-7 col-lg-8 col-xl-12">

<form method="POST" action="{{route('profile.details.update',$update ->id)}}">
    @csrf

    <div class="row form-row">

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="fname" value="{{$update ->fname}}">
                @error('fname')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lname" value="{{$update ->lname}}">
                @error('lname')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>Date of Birth</label>

                    <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                        name="date_of_birth" value="{{$update ->date_of_birth}}" />

                @error('date_of_birth')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form">
                <label>Email ID</label>
                <input type="email" class="form-control" name="email" value="{{$update ->email}}">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="phone_number" value="{{$update ->phone_number}}"
                    placeholder="Phone Number"
                    class="form-control @error('phone_number') is-invalid @enderror" />
                {{-- @error('phone_number')
                <span class="text-danger">{{ $message }}</span>
                @enderror --}}
            </div>
        </div>


        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control @error('city') is-invalid
          @enderror"" value=" {{$update ->city}}" placeholder="City Name" name="city">
                @error('city')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>Zip Code</label>
                <input type="text" class="form-control" name="zip" value="{{$update ->zip}}">
                @error('zip')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>Country</label>
                <input type="text" class="form-control @error('country') is-invalid @enderror"
                    value="{{$update ->country}}" placeholder="Country Name" name="country" />
                @error('country')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="adderss"
                    value="{{$update ->adderss}}">
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
                {{$update ->about}}</textarea>
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
@endsection
