@extends('layouts.doctor_master')

@section('contents')



<div class="col-md-7 col-lg-8 col-xl-9">
    @if (session('upd'))
    <div class="alert alert-success">
        {{ session('upd') }}
    </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            <h4>Edit Slot</h4>
            
                
               
                <form method="POST" action="{{route('doctor.time.schedules.changes',$indi->id) }}">
                    @csrf

                    <div class="row form-row">

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Start Time</label>
                                <input type="text" class="form-control" name="sart_time" value="{{$indi->sart_time}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>End Time</label>
                                <input type="text" class="form-control" name="end_time" value="{{$indi->end_time}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Day</label>
                                <input type="text" class="form-control" name="day" value="{{$indi->day}}">
                            </div>
                        </div>





                    </div>
                    <div>
                            <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                    </div>  
                </form>

            </div>
        </div>
    </div>
    @endsection