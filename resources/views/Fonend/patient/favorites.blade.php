@extends('layouts.profile_master')

@section('contents')

<div class="col-md-7 col-lg-8 col-xl-12">



    <div class="row row-grid">
        @foreach ($fav as $favs)
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="doc-img">
                    <a href="doctor-profile.html">
                        <img class="img-fluid" alt="User Image" src="{{asset('uploads/doctor_themble_photo')}}/{{$favs->relationDoctor->doctor_themble_photo}}">
                    </a>

                </div>
                <div class="pro-content">
                    <h3 class="title">
                        <a href="doctor-profile.html">{{$favs->relationDoctor->fname}} {{$favs->relationDoctor->fname}}</a>
                        <i class="fas fa-check-circle verified"></i>
                    </h3>
                    <p class="speciality">{{$favs->relationDoctor->relationwithspeclist->special}}</p>
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
                            <i class="fas fa-map-marker-alt"></i>{{$favs->relationDoctor->hospital_address}}
                        </li>
                        <li>
                            <i class="far fa-clock"></i> Available on Fri, 22 Mar
                        </li>
                        <li>
                            <i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                        </li>
                    </ul>
                    <div class="row row-sm">
                        <div class="col-6">
                            <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                        </div>
                        <div class="col-6">
                            <a href="booking.html" class="btn book-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="doc-img">
                    <a href="doctor-profile.html">
                        <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-02.jpg">
                    </a>
                    <a href="javascript:void(0)" class="fav-btn">
                        <i class="far fa-bookmark"></i>
                    </a>
                </div>
                <div class="pro-content">
                    <h3 class="title">
                        <a href="doctor-profile.html">Darren Elder</a>
                        <i class="fas fa-check-circle verified"></i>
                    </h3>
                    <p class="speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
                    <div class="rating">
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star"></i>
                        <span class="d-inline-block average-rating">(35)</span>
                    </div>
                    <ul class="available-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i> Newyork, USA
                        </li>
                        <li>
                            <i class="far fa-clock"></i> Available on Fri, 22 Mar
                        </li>
                        <li>
                            <i class="far fa-money-bill-alt"></i> $50 - $300 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                        </li>
                    </ul>
                    <div class="row row-sm">
                        <div class="col-6">
                            <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                        </div>
                        <div class="col-6">
                            <a href="booking.html" class="btn book-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="doc-img">
                    <a href="doctor-profile.html">
                        <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">
                    </a>
                    <a href="javascript:void(0)" class="fav-btn">
                        <i class="far fa-bookmark"></i>
                    </a>
                </div>
                <div class="pro-content">
                    <h3 class="title">
                        <a href="doctor-profile.html">Deborah Angel</a>
                        <i class="fas fa-check-circle verified"></i>
                    </h3>
                    <p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                    <div class="rating">
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star"></i>
                        <span class="d-inline-block average-rating">(27)</span>
                    </div>
                    <ul class="available-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i> Georgia, USA
                        </li>
                        <li>
                            <i class="far fa-clock"></i> Available on Fri, 22 Mar
                        </li>
                        <li>
                            <i class="far fa-money-bill-alt"></i> $100 - $400 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                        </li>
                    </ul>
                    <div class="row row-sm">
                        <div class="col-6">
                            <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                        </div>
                        <div class="col-6">
                            <a href="booking.html" class="btn book-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        @endforeach

    </div>
</div>

@endsection

