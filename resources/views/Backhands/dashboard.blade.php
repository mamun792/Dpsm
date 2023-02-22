@extends('layouts.dashboard_master')
@section('contant')
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="dash-widget-icon text-primary border-primary">
                            <i class="fe fe-users"></i>
                        </span>
                        <div class="dash-count">
                            <h3>
                                {{-- {{$users->count()}} --}}
                                @php
                                    $user_collect = collect($users);
                                    echo $user_collect->where('role', 'doctor')->count();
                                @endphp
                            </h3>
                        </div>
                    </div>
                    <div class="dash-widget-info">
                        <h6 class="text-muted">Doctors</h6>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-primary w-50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="dash-widget-icon text-success">
                            <i class="fe fe-credit-card"></i>
                        </span>
                        <div class="dash-count">
                            <h3>
                                {{-- {{$users->count()}} --}}
                                @php
                                    $user_collect = collect($users);
                                    echo $user_collect->where('role', 'patient')->count();
                                @endphp
                            </h3>
                        </div>
                    </div>
                    <div class="dash-widget-info">

                        <h6 class="text-muted">Patients</h6>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-success w-50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="dash-widget-icon text-danger border-danger">
                            <i class="fe fe-money"></i>
                        </span>
                        <div class="dash-count">
                            <h3>485</h3>
                        </div>
                    </div>
                    <div class="dash-widget-info">

                        <h6 class="text-muted">Appointment</h6>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-danger w-50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="dash-widget-icon text-warning border-warning">
                            <i class="fe fe-folder"></i>
                        </span>
                        <div class="dash-count">
                            <h3>{{ $users->count() }}</h3>
                        </div>
                    </div>
                    <div class="dash-widget-info">

                        <h6 class="text-muted">Total Users</h6>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-warning w-50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-6">

            <!-- Sales Chart -->
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">Revenue</h4>
                </div>
                <div class="card-body">
                    <div id="morrisArea"></div>
                </div>
            </div>
            <!-- /Sales Chart -->

        </div>
        <div class="col-md-12 col-lg-6">

            <!-- Invoice Chart -->
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">Status</h4>
                </div>
                <div class="card-body">
                    <div id="morrisLine"></div>
                </div>
            </div>
            <!-- /Invoice Chart -->

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 d-flex">

            <!-- Recent Orders -->
            <div class="card card-table flex-fill">
                <div class="card-header">
                    <h4 class="card-title">Doctors List</h4>
                </div>

                <div class="card-body">

                    <div class="table-wrapper-scroll-y my-custom-scrollbar">

                        <table class="table table-bordered table-striped mb-0">
                          <thead>

                            <tr>
                                <th>Doctor Name</th>
                                <th>Speciality</th>
                                <th>Earned</th>
                                <th>Reviews</th>
                            </tr>
                          </thead>
                          <tbody>

                            @foreach ($doctor as $doctors)
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.html" class="avatar avatar-sm mr-2">

                                            <img class="rounded-circle"
                                                src="{{ asset('uploads/doctor_themble_photo/') }}/{{ $doctors->doctor_themble_photo }}"
                                                width="50" alt="user">

                                        </a>
                                        <a href="profile.html">{{ $doctors->name }} </a>
                                    </h2>

                                </td>
                                <td> {{ $doctors->relationwithspeclist->special}}</td>
                                <td>83200.00</td>
                                <td>
                                    <i class="fe fe-star text-warning"></i>
                                    <i class="fe fe-star text-warning"></i>
                                    <i class="fe fe-star text-warning"></i>
                                    <i class="fe fe-star text-warning"></i>
                                    <i class="fe fe-star-o text-secondary"></i>
                                </td>
                            </tr>
                        @endforeach

                          </tbody>
                        </table>

                      </div>

                </div>

            </div>
            <!-- /Recent Orders -->

        </div>
        <div class="col-md-6 d-flex">

            <!-- Feed Activity -->
            <div class="card  card-table flex-fill">
                <div class="card-header">
                    <h4 class="card-title">Patients List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Patient Name</th>
                                    <th>Phone</th>
                                    <th>Last Visit</th>
                                    <th>Paid</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('dashboard_assets/img/patients/patient1.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="profile.html">Moini Akter </a>
                                        </h2>
                                    </td>
                                    <td>0196329170</td>
                                    <td>20 Oct 2022</td>
                                    <td class="text-right">600.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('dashboard_assets/img/patients/patient2.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="profile.html">Mahabub Ali </a>
                                        </h2>
                                    </td>
                                    <td>0187299974</td>
                                    <td>22 Oct 2022</td>
                                    <td class="text-right">600.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('dashboard_assets/img/patients/patient3.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="profile.html">Mahabub Ali </a>
                                        </h2>
                                    </td>
                                    <td>0187299974</td>
                                    <td>22 Oct 2022</td>
                                    <td class="text-right">600.00</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Feed Activity -->

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <!-- Recent Orders -->
            <div class="card card-table">
                <div class="card-header">
                    <h4 class="card-title">Appointment List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Doctor Name</th>
                                    <th>Speciality</th>
                                    <th>Patient Name</th>
                                    <th>Apointment Time</th>
                                    <th>Status</th>
                                    <th class="text-right">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('dashboard_assets/img/patients/patient1.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="profile.html">Rahat Ali</a>
                                        </h2>
                                    </td>
                                    <td>Dental</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('dashboard_assets/img/patients/patient1.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="profile.html">Mst. Mim</a>
                                        </h2>
                                    </td>
                                    <td>9 Nov 2022 <span class="text-primary d-block">11.00 AM - 11.15 AM</span></td>
                                    <td>
                                        <div class="status-toggle">
                                            <input type="checkbox" id="status_1" class="check" checked>
                                            <label for="status_1" class="checktoggle">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        600.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('dashboard_assets/img/patients/patient1.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="profile.html">Dr. Milon Talakdur</a>
                                        </h2>
                                    </td>
                                    <td>Dental</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('dashboard_assets/img/patients/patient1.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="profile.html">Mahabaub Ali </a>
                                        </h2>
                                    </td>

                                    <td>5 Nov 2022 <span class="text-primary d-block">11.00 AM - 11.35 AM</span></td>
                                    <td>
                                        <div class="status-toggle">
                                            <input type="checkbox" id="status_2" class="check" checked>
                                            <label for="status_2" class="checktoggle">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        600.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('dashboard_assets/img/patients/patient1.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="profile.html">Dr. Libna Rahamn</a>
                                        </h2>
                                    </td>
                                    <td>Cardiology</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('dashboard_assets/img/patients/patient1.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="profile.html">Rabi Mia</a>
                                        </h2>
                                    </td>
                                    <td>15 Nov 2022 <span class="text-primary d-block">12.00 PM - 12.15 PM</span></td>
                                    <td>
                                        <div class="status-toggle">
                                            <input type="checkbox" id="status_3" class="check" checked>
                                            <label for="status_3" class="checktoggle">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        850.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('dashboard_assets/img/patients/patient1.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="profile.html">Dr. Sofia Rahaman</a>
                                        </h2>
                                    </td>
                                    <td>Urology</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('dashboard_assets/img/patients/patient4.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="profile.html"> Mitu Akter</a>
                                        </h2>
                                    </td>
                                    <td>7 Nov 2019<span class="text-primary d-block">1.00 PM - 1.20 PM</span></td>
                                    <td>
                                        <div class="status-toggle">
                                            <input type="checkbox" id="status_4" class="check" checked>
                                            <label for="status_4" class="checktoggle">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        750.00
                                    </td>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Recent Orders -->

        </div>
    </div>

    </div>
    </div>
    <!-- /Page Wrapper -->

@section('footer_scprit')
<script>
$(document).ready(function () {
    $('#doctor').DataTable({
        scrollY: '50vh',
        scrollCollapse: true,
         paging: false,
    });
});
    </script>
@endsection
@endsection
