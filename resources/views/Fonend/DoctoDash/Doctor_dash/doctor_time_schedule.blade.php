@extends('layouts.doctor_master')

@section('contents')


<div class="col-md-7 col-lg-8 col-xl-9">

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    @if (session('suc'))
                    <div class="alert alert-success">
                        {{ session('suc') }}
                    </div>
                    @endif

                    @if (session('det'))
                    <div class="alert alert-danger">
                        {{ session('det') }}
                    </div>
                    @endif

                    @error('sart_time')
                    <h6 class="text-danger">{{ $message }}</h6>
                    @enderror

                    @error('end_time')
                    <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <h4 class="card-title">Schedule Timings</h4>
                    <div class="profile-box">
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Timing Slot Duration
                                    
                                       </label>
                                    <select class="select form-control">
                                        <option>-</option>
                                        <option>15 mins</option>
                                        <option selected="selected">30 mins</option>
                                        <option>45 mins</option>
                                        <option>1 Hour</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <h4 class="card-title d-flex justify-content-between">
                            <span>Time Slots</span>
                            <a class="edit-link" data-toggle="modal" href="#add_time_slot"><i
                                    class="fa fa-plus-circle"></i> Add Slot</a>
                        </h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card schedule-widget mb-0">

                                    <!-- Schedule Header -->
                                    <div class="schedule-header">

                                        <!-- Schedule Nav -->
                                        <div class="schedule-nav">
                                            <ul class="nav nav-tabs nav-justified">
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#sunday">Sunday</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab"
                                                        href="#slot_monday">Monday</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab"
                                                        href="#slot_tuesday">Tuesday</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab"
                                                        href="#slot_wednesday">Wednesday</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab"
                                                        href="#slot_thursday">Thursday</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#slot_friday">Friday</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab"
                                                        href="#slot_saturday">Saturday</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /Schedule Nav -->

                                    </div>
                                    <!-- /Schedule Header -->

                                    <!-- Schedule Content -->
                                    <div class="tab-content schedule-cont">

                                        <div id="slot_monday" class="tab-pane fade">

                                            <h4 class="card-title d-flex justify-content-between">
                                                <span>Added Slots</span>

                                            </h4>


                                            <div class="doc-times">
                                                @foreach ($time as $times)

                                                @php
                                                $v=$times->day

                                                @endphp

                                                @if ($v=='monday')
                                                <div class="doc-slot-list">
                                                    {{$times->sart_time}}-{{$times->end_time}}
                                                    <a class="text-white"
                                                        href="{{route('doctor.time.schedules.edit',$times->id)}}"><i
                                                            class="fa fa-edit mr-1 text-white"></i>Edit</a>
                                                    <button value="{{route('doctor.delete.schedules',$times->id)}}"
                                                        class="btn btn-sm btn bg-#d9534f; time_shedul_delete">
                                                        <i class="fa fa-times text-white">Remove</i>
                                                    </button>
                                                </div>

                                                @endif
                                                @endforeach

                                            </div>

                                            {{-- {{$vs}} --}}
                                        </div>

                                        <!-- Slot List -->

                                        <!-- /Monday Slot -->

                                        <!-- Tuesday Slot -->
                                        <div id="slot_tuesday" class="tab-pane fade">

                                            <h4 class="card-title d-flex justify-content-between">
                                                <span>Added Slots</span>

                                            </h4>




                                            <div class="doc-times">
                                                @foreach ($time as $times)

                                                @php
                                                $v=$times->day

                                                @endphp

                                                @if ($v=='tuesday')
                                                <div class="doc-slot-list">
                                                    {{$times->sart_time}}-{{$times->end_time}}
                                                    <a class="text-white"
                                                        href="{{route('doctor.time.schedules.edit',$times->id)}}"><i
                                                            class="fa fa-edit mr-1 text-white"></i>Edit</a>
                                                    <button value="{{route('doctor.delete.schedules',$times->id)}}"
                                                        class="btn btn-sm btn bg-#d9534f; time_shedul_delete">
                                                        <i class="fa fa-times text-white">Remove</i>
                                                    </button>

                                                </div>

                                                @endif
                                                @endforeach

                                            </div>
                                            {{-- {{$vs}} --}}
                                        </div>
                                        <!-- /Tuesday Slot -->

                                        <!-- Wednesday Slot -->
                                        <div id="slot_wednesday" class="tab-pane fade">

                                            <h4 class="card-title d-flex justify-content-between">
                                                <span>Added Slots</span>

                                            </h4>




                                            <div class="doc-times">
                                                @foreach ($time as $times)

                                                @php
                                                $v=$times->day

                                                @endphp

                                                @if ($v=='wednesday')
                                                <div class="doc-slot-list">
                                                    {{$times->sart_time}}-{{$times->end_time}}
                                                    <a class="text-white"
                                                        href="{{route('doctor.time.schedules.edit',$times->id)}}"><i
                                                            class="fa fa-edit mr-1"></i>Edit</a>
                                                    <button value="{{route('doctor.delete.schedules',$times->id)}}"
                                                        class="btn btn-sm btn bg-#d9534f; time_shedul_delete">
                                                        <i class="fa fa-times text-white">Remove</i>
                                                    </button>
                                                </div>

                                                @endif
                                                @endforeach

                                            </div>
                                            {{-- {{$vs}} --}}
                                        </div>
                                        <!-- /Wednesday Slot -->

                                        <!-- Thursday Slot -->
                                        <div id="slot_thursday" class="tab-pane fade">
                                            <h4 class="card-title d-flex justify-content-between">
                                                <span>Added Slots</span>

                                            </h4>


                                            <div class="doc-times">
                                                @foreach ($time as $times)

                                                @php
                                                $v=$times->day

                                                @endphp

                                                @if ($v=='tuesday')
                                                <div class="doc-slot-list">
                                                    {{$times->sart_time}}-{{$times->end_time}}
                                                    <a class="text-white"
                                                        href="{{route('doctor.time.schedules.edit',$times->id)}}"><i
                                                            class="fa fa-edit mr-1 text-white"></i>Edit</a>
                                                    <button value="{{route('doctor.delete.schedules',$times->id)}}"
                                                        class="btn btn-sm btn bg-#d9534f; time_shedul_delete">
                                                        <i class="fa fa-times text-white">Remove</i>
                                                    </button>
                                                </div>

                                                @endif
                                                @endforeach

                                            </div>


                                            {{-- {{$vs}} --}}
                                        </div>
                                        <!-- /Thursday Slot -->

                                        <!-- Friday Slot -->
                                        <div id="slot_friday" class="tab-pane fade">

                                            <h4 class="card-title d-flex justify-content-between">
                                                <span>Added Slots</span>

                                            </h4>



                                            <div class="doc-times">
                                                @foreach ($time as $times)

                                                @php
                                                $v=$times->day

                                                @endphp

                                                @if ($v=='friday')
                                                <div class="doc-slot-list">
                                                    {{$times->sart_time}}-{{$times->end_time}}
                                                    <a class="text-white"
                                                        href="{{route('doctor.time.schedules.edit',$times->id)}}"><i
                                                            class="fa fa-edit mr-1 text-white"></i>Edit</a>
                                                    <button value="{{route('doctor.delete.schedules',$times->id)}}"
                                                        class="btn btn-sm btn bg-#d9534f; time_shedul_delete">
                                                        <i class="fa fa-times text-white">Remove</i>
                                                    </button>
                                                </div>

                                                @endif
                                                @endforeach

                                            </div>
                                            {{-- {{$vs}} --}}
                                        </div>
                                        <!-- /Friday Slot -->

                                        <!-- Saturday Slot -->
                                        <div id="slot_saturday" class="tab-pane fade">
                                            <h4 class="card-title d-flex justify-content-between">
                                                <span>Added Slots</span>

                                            </h4>





                                            <div class="doc-times">
                                                @foreach ($time as $times)

                                                @php
                                                $v=$times->day

                                                @endphp

                                                @if ($v=='saturday')
                                                <div class="doc-slot-list">
                                                    {{$times->sart_time}}-{{$times->end_time}}
                                                    <a class="text-white"
                                                        href="{{route('doctor.time.schedules.edit',$times->id)}}"><i
                                                            class="fa fa-edit mr-1 text-white"></i>Edit</a>
                                                    <button value="{{route('doctor.delete.schedules',$times->id)}}"
                                                        class="btn btn-sm btn bg-#d9534f; time_shedul_delete">
                                                        <i class="fa fa-times text-white">Remove</i>
                                                    </button>
                                                </div>

                                                @endif
                                                @endforeach

                                            </div>
                                            {{-- {{$vs}} --}}
                                        </div>
                                        <!-- /Saturday Slot -->




                                        <div id="sunday" class="tab-pane fade">

                                            <h4 class="card-title d-flex justify-content-between">
                                                <span>Added Slots</span>

                                            </h4>




                                            <div class="doc-times">
                                                @foreach ($time as $times)

                                                @php
                                                $v=$times->day

                                                @endphp

                                                @if ($v=='sunday')
                                                <div class="doc-slot-list">
                                                    {{$times->sart_time}}-{{$times->end_time}}
                                                    <a class="text-white"
                                                        href="{{route('doctor.time.schedules.edit',$times->id)}}"><i
                                                            class="fa fa-edit mr-1 text-white"></i>Edit</a>
                                                    <button value="{{route('doctor.delete.schedules',$times->id)}}"
                                                        class="btn btn-sm btn bg-#d9534f; time_shedul_delete">
                                                        <i class="fa fa-times text-white">Remove</i>
                                                    </button>
                                                </div>

                                                @endif
                                                @endforeach

                                            </div>
                                            {{-- {{$vs}} --}}
                                        </div>

                                        <!-- /Schedule Content -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <!-- /Add Time Slot Modal -->

        <!-- Edit Time Slot Modal -->


        @endsection

        <!-- Add Time Slot Modal -->
        <div class="modal fade custom-modal" id="add_time_slot">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Time Slots</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('doctor.time.schedules.add')}}" method="POST">
                            @csrf
                            <div class="hours-info">
                                <div class="row form-row hours-cont">
                                    <div class="col-12 col-md-10">
                                        <div class="row form-row">

                                            <div class="col-12 col-md-6">
                                                {{-- <div class="form-group">
                                                    <label>Start Time</label>

                                                    <input type="text" class="form-control" name="sart_time"
                                                        placeholder="start time">

                                                </div> --}}
                                                <!--Time picker -->

                                                <div class="form-group">

                                                    <label class="control-label" for="regular1">Sart Time</label>
                                                    <input type="text" name="sart_time" class="form-control" id="timepicker">
                                                </div>







                                            </div>
                                            <div class="col-12 col-md-6">
                                                {{-- <div class="form-group">
                                                    <label>End Time</label>

                                                    <input type="text" class="form-control" name="end_time"
                                                        placeholder="end time">

                                                </div> --}}
                                                <!--Time picker -->

                                                <div class="form-group">

                                                    <label class="control-label" for="regular12">End Time</label>
                                                    <input type="text" name="end_time" class="form-control" id="timepicker1">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Start Time</label>
                                                    <select class="form-control" name="day">
                                                        <option>-</option>
                                                        <option>saturday</option>
                                                        <option>sunday</option>
                                                        <option>monday</option>
                                                        <option>tuesday</option>
                                                        <option>wednesday</option>
                                                        <option>thursday</option>
                                                        <option>friday</option>
                                                    </select>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="submit-section text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Time Slot Modal -->
        @section('footer_scprit')



        <script>
            $(document).ready(function() {
                // $('#special_id').DataTable();

                // $('#special_id').on('click', '.time_shedul_delete', function()
          $('.time_shedul_delete').click(function(){

                    var link = $(this).val();
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = link;
                        }
                    })
                });

            });


        //     <!-- jquery JS -->
        //     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        </script>

        <!-- Bootstrap js -->
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
        </script>

        <!-- Propeller textfield js -->
        <script type="text/javascript" src="https://opensource.propeller.in/components/textfield/js/textfield.js">
        </script>

        <!-- Datepicker moment with locales -->
        <script type="text/javascript" language="javascript"
            src="https://opensource.propeller.in/components/datetimepicker/js/moment-with-locales.js"></script>

        <!-- Propeller Bootstrap datetimepicker -->
        <script type="text/javascript" language="javascript"
            src="https://opensource.propeller.in/components/datetimepicker/js/bootstrap-datetimepicker.js"></script>




        <script>
            // Time picker only
	          $('#timepicker').datetimepicker({
	          	 format: 'LT'



	          });
        </script>

        <script>
                     // Time picker only
	         $('#timepicker1').datetimepicker({
	         	format: 'LT'
	         });
        </script>



        @endsection
