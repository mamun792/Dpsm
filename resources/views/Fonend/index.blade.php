@extends('layouts.fonend_master')
@section('content')

{{-- Modal --}}
<!-- Button trigger modal -->

  <!-- Modal -->


<!-- Home Banner -->
<section class="section section-search">
    <div class="container-fluid">
        <div class="banner-wrapper">
            <div class="banner-header text-center">
                <h1>Search Doctor, Make an Appointment</h1>
                <p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
            </div>

            <!-- Search -->
            <div class="search-box">
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search Location">
                        <span class="form-text">Based on your Location</span>
                    </div>
                    <div class="form-group search-info">
                        <input type="text" class="form-control"
                            placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc">
                        <span class="form-text">Ex : Dental or Sugar Check up etc</span>
                    </div>
                    <button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i>
                        <span>Search</span></button>
                </form>
            </div>
            <!-- /Search -->

        </div>
    </div>
</section>

<!-- /Home Banner -->

<!-- Clinic and Specialities -->
<section class="section section-specialities">
    <div class="container-fluid">
        <div class="section-header text-center">

            <h2>Clinic and Specialities</h2>
            <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <!-- Slider -->
                <div class="specialities-slider slider">
                    @foreach ($specilest as $specilests)
                    <!-- Slider Item -->
                    <div class="speicality-item text-center">
                        <div class="speicality-img">
                            <img src="{{ asset('uploads/special_photp/') }}/{{ $specilests->category_photo }}"
                                class="img-fluid" alt="Speciality">
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                        </div>
                        <p>{{ $specilests->special }}</p>
                    </div>
                    <!-- /Slider Item -->
                    @endforeach


                </div>
                <!-- /Slider -->

            </div>
        </div>
    </div>
</section>
<!-- Clinic and Specialities -->

<!-- Popular Section -->

<section class="section section-doctor">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-header ">
                    <h2>Book Our Doctor</h2>
                    <p>Lorem Ipsum is simply dummy text </p>
                </div>
                <div class="about-content">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum.</p>
                    <p>web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'
                        will uncover many web sites still in their infancy. Various versions have evolved over the
                        years, sometimes</p>
                    <a href="javascript:;">Read More..</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="doctor-slider slider">

                    <!-- Doctor Widget -->
                    @foreach ($doctor as $doctors)
                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="{{route('doctor.profile',$doctors->id)}}">
                                <img class="img-fluid" alt="User Image"
                                    src="{{asset('uploads/doctor_themble_photo')}}/{{$doctors->doctor_themble_photo}}">
                            </a>

                            @auth()
                            @if(App\Models\Favourit::where(['user_id'=>auth()->id(),'doctor_id'=>$doctors->id])->exists())

                            <i class="far bg-danger fa-bookmark fav-btn"></i>


                            @else
                            <a href="{{route('add.favourite',$doctors->id)}}" class="fav-btn">
                                <i class="far fa-bookmark"></i>

                            </a>
                            @endif


                            @endauth

                        </div>








                        <div class="pro-content">

                            <h3 class="title">
                                <a href="{{route('doctor.profile',$doctors->id)}}">{{$doctors->fname}} {{
                                    $doctors->lname }}</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">{{$doctors->relationwithspeclist->special}}</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="d-inline-block average-rating">(17)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>{{$doctors->city}}
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i>{{$doctors->price}}
                                    <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="{{route('doctor.profile',$doctors->id)}}" class="btn view-btn">View
                                        Profile</a>
                                </div>
                                @auth()
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Nows</a>


                                </div>
                                @else
                                <div class="col-6">
                                    <a href="{{route('book.now')}}" class="btn book-btn">Book Now</a>



                                </div>

                                @endauth

                            </div>

                        </div>

                    </div>
                    @endforeach
                    <!-- /Doctor Widget -->



                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Popular Section -->
@endsection
