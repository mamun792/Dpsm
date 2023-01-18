@extends('layouts.dashboard_master')
@section('contant')

@if (session('adds'))
<div class="alert alert-success" >
  {{ session('adds') }}
</div>
@endif
<h1 class="m-t-3">Add User</h1>

<form method="POST" action="{{route('user.insert')}}" enctype="multipart/form-data">
@csrf
    <div class="row form-row">
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" name="name" placeholder=" Name">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>User Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>


        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>Profile Photo</label>
                      <style>
                      .hidden{
                      visibility: hidden;
                      }
                      </style>
                <input type="file"  class="form-control" name="profile_photo"  onchange="readURL(this)";>

                <img class="hidden mt-3" id="profile_photo_viewer" src="#" alt="your profile photo" />

                   <script>
                       function readURL(input) {
                         if (input.files && input.files[0]) {
                           var reader = new FileReader();
                           reader.onload = function (e) {
                             $('#profile_photo_viewer').attr('src', e.target.result).width(150).height(195);
                           };
                           $('#profile_photo_viewer').removeClass('hidden');
                           reader.readAsDataURL(input.files[0]);
                         }
                       }
                       </script>

       @error('profile_photo')
          <span class="text-danger">{{$message}}</span>
      @enderror
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>Role</label>
                 <select class="form-control" name="role">
                     <option>--Select one Role--</option>
                 <option value="vendor">Vendor</option>
                 <option value="admin">Admin</option>
                 <option value="appointment_assistance">Pppointment assistance</option>
                 <option value="appointment_assistance">path</option>
                 </select>
                 @error('role')
                 <span class="text-danger">{{$message}}</span>
                 @enderror
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Add Users</button>
</form>



@endsection
