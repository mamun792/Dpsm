@extends('layouts.dashboard_master')
@section('contant')

@if (session('Success'))
<div class="alert alert-success" >
  {{ session('Success') }}
</div>
@endif
<h1 class="m-t-3">Add Specialities</h1>

<form method="POST" action="{{route('insert')}}" enctype="multipart/form-data">
@csrf
    <div class="row form-row">
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>Specialities</label>
                <input type="text" class="form-control @error('special') is-invalid  @enderror" value="{{old('special')}}" name="special">
                @error('special')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>Image</label>
                <style>
                    .hidden{
                    visibility: hidden;
                    }
                    </style>
                <input type="file"  class="form-control" name="category_photo" onchange="readURL(this)";>
                <img class="hidden mt-3" id="category_photo_viewer" src="#" alt="your image" />
                <script>
                    function readURL(input) {
                      if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                          $('#category_photo_viewer').attr('src', e.target.result).width(150).height(195);
                        };
                        $('#category_photo_viewer').removeClass('hidden');
                        reader.readAsDataURL(input.files[0]);
                      }
                    }
                    </script>
@error('category_photo')
<span class="text-danger">{{$message}}</span>
@enderror
            </div>
        </div>

    </div>
    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
</form>



<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
    <script>
    $(document.ready()function(){
    alert();
    });
    </script>

@endsection

