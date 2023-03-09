<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\time_schedules;
use App\Models\Doctor;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DoctorDashbord extends Controller
{
    public function index()
    {

        return view('Fonend.DoctoDash.index');
    }
    public function doctor_change_password()
    {
        return view('Fonend.DoctoDash.Doctor_dash.doctor_change_password');
    }

    public function  doctor_time_schedule()
    {
 return $doctor_table=Doctor::where('doctor_id',Auth::id())->get();
        $time = time_schedules::where('doctor_login_id', Auth::id())->latest()->get();
        return view('Fonend.DoctoDash.Doctor_dash.doctor_time_schedule', compact('time','doctor_table'));
    }

    public function  doctor_time_schedule_add(Request $request)
    {

        $request->validate(
            [

                'sart_time' => 'required',
                'end_time' => 'required',
                'day' => 'required',

            ],

        );

        time_schedules::insert([
            'doctor_login_id' => auth()->user()->id,
            'sart_time' => $request->sart_time,
            'end_time' => $request->end_time,
            'day' => $request->day,

            'created_at' => Carbon::now(),
        ]);

        return back()->with('suc', 'Succeefully Added');
    }

    public function doctor_delete_schedules($id)
    {
        time_schedules::find($id)->delete();
        return back()->with('det', 'Succeefully Delete');
    }

    public function  doctor_time_schedule_edit($id)
    {
        $indi =  time_schedules::find($id);
        return view('Fonend.DoctoDash.Doctor_dash.doctor_shedul_edit', compact('indi'));
    }


    public function  doctor_time_schedule_changes(Request $request, $id)
    {

        $request->validate(
            [

                'sart_time' => 'required',
                'end_time' => 'required',
                'day' => 'required',

            ],

        );
        time_schedules::find($id)->update([
            'sart_time' => $request->sart_time,
            'end_time' => $request->end_time,
            'day' => $request->day,
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('upd', 'Succeefully Updated');
    }
}
