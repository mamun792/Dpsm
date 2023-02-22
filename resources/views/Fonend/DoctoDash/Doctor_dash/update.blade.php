@extends('layouts.doctor_master')

@section('contents')
<div class="col-md-7 col-lg-8 col-xl-9">
    @if (session('succ'))
    <div class="alert alert-success">
        {{ session('succ') }}
    </div>
@endif
    <!-- Basic Information -->
    <form method="POST" action="{{route('doctorDetailes.update',$update->id) }}" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="card">

            <div class="card-body">
                <h4 class="card-title">Basic Information</h4>

                <div class="row form-row">
                    <div class="col-md-12">


                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>First Name <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control @error('fname') is-invalid @enderror"
                                value="{{$update->fname}}" name="fname">
                            @error('fname')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{$update->lname}}" name="lname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" class="form-control" value="{{$update->phone_number}}"
                                name="phone_number">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label>Date of Birth</label>
                            <input type="text" class="form-control" value="{{$update->date_of_birth}}"
                                name="date_of_birth">
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /Basic Information -->

        <!-- About Me -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">About Me</h4>
                <div class="form-group mb-0">
                    <label>Biography</label>
                    <textarea class="form-control" name="about" rows="5">{{$update->about}}</textarea>
                </div>
            </div>
        </div>
        <!-- /About Me -->

        <!-- Clinic Info -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Clinic Info</h4>
                <div class="row form-row">



                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Clinic Address</label>
                            <input type="text" class="form-control" value="{{$update->hospital_address}}"
                                name="hospital_address">
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="form-group">
                            <label>Doctor Themble Photo <span class="text-danger">*</span> </label>

                            <style>
                                .hidden {
                                    visibility: hidden;
                                }
                            </style>
                            <input type="file" class="form-control" name="doctor_themble_photo" onchange="readURL(this)"
                                ;>
                            <img class="hidden mt-3" id="category_photo_viewer" src="#" alt="your image" />
                            <script>
                                function readURL(input) {
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = function(e) {
                                            $('#category_photo_viewer').attr('src', e.target.result).width(150).height(195);
                                        };
                                        $('#category_photo_viewer').removeClass('hidden');
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }
                            </script>
                            @error('doctor_themble_photo')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Doctors Features Photos <span class="text-danger">*</span> </label>
                            <style>
                                .hidden {
                                    visibility: hidden;
                                }
                            </style>
                            <input type="file" class="form-control" multiple name="doctors_features_photos[]"
                                onchange="readURL(this)" ;>
                            <img class="hidden mt-3" id="category_photo_viewer" src="#" alt="your image" />
                            <script>
                                function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $('#category_photo_viewer').attr('src', e.target.result).width(150).height(195);
                                    };
                                    $('#category_photo_viewer').removeClass('hidden');
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                            </script>

                        </div>
                    </div>

                </div>
            </div>
            <!-- /Clinic Info -->

            <!-- Contact Details -->
            <div class="card contact-card">
                <div class="card-body">
                    <h4 class="card-title">Contact Details</h4>
                    <div class="row form-row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">City</label>
                                <input type="text" class="form-control" value="{{$update->city}}" name="city">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Country</label>
                                <input type="text" class="form-control" value="{{$update->locations}}" name="locations">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /Contact Details -->

            <!-- Pricing -->

            <!-- /Pricing -->



            <!-- Education -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Education</h4>
                    <div class="education-info">
                        <div class="row form-row education-cont">
                            <div class="col-12 col-md-10 col-lg-11">
                                <div class="row form-row">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Degree</label>
                                            <input type="text" class="form-control" value="{{$update->degree}}"
                                                name="degree">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>College/Institute</label>
                                            <input type="text" class="form-control" value="{{$update->college}}"
                                                name="college">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Year of Completion</label>
                                            <input type="text" class="form-control"
                                                value="{{$update->year_of_completion}}" name="year_of_completion">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-more">
                        <a href="javascript:void(0);" class="add-education"><i class="fa fa-plus-circle"></i> Add
                            More</a>
                    </div>
                </div>
            </div>
            <!-- /Education -->



            <!-- Awards -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Awards</h4>
                    <div class="awards-info">
                        <div class="row form-row awards-cont">
                            <div class="col-12 col-md-5">
                                <div class="form-group">
                                    <label>Awards</label>
                                    <input type="text" class="form-control" value="{{$update->dwards}}" name="dwards">
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="form-group">
                                    <label>Year</label>
                                    <input type="text" class="form-control" value="{{$update->year}}" name="year">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-more">
                        <a href="javascript:void(0);" class="add-award"><i class="fa fa-plus-circle"></i> Add More</a>
                    </div>
                </div>
            </div>
            <!-- /Awards -->





            <div class="submit-section submit-btn-bottom">
                <button type="submit" class="btn btn-primary submit-btn">Update Profile</button>
            </div>
    </form>
</div>

@endsection
