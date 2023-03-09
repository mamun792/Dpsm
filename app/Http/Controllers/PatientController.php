<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile_detiel;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PatientController extends Controller
{
    // public function insert()
    // {

    //     return view('Fonend.patient.insert');
    // }
    public function store(Request $request)
    {

        $request->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'date_of_birth' => 'required',
                'bgroup' => 'required',
                'email' => 'required',
                'phone_number' => 'required|size:11',
                'city' => 'required',
                'division' => 'required',
                'country' => 'required',
                'adderss' => 'required',
                'about' => 'required',

            ],
        );

        $patient_id = Profile_detiel::insertGetId([
            'user_id' => auth()->id(),
            'fname' => $request->fname,
            'lname' => $request->lname,
            'date_of_birth' => $request->date_of_birth,
            'bgroup' => $request->bgroup,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'city' => $request->city,
            'division' => $request->division,
            'zip' => $request->zip,
            'country' => $request->country,
            'adderss' => $request->adderss,
            'about' => $request->about,
            'created_at' => Carbon::now(),

        ]);
        return  back()->with('succ', "Succeefully information Added!");
    }
    public function edit($id)
    {

        $update = Profile_detiel::find($id);
        return view('Fonend.patient.patient_detiles_edit', compact('update'));
    }

    public function update(Request $request,  $patient_detiel_id)
    {
        $request->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'date_of_birth' => 'required',

                'email' => 'required',
                'phone_number' => 'required|size:11',
                'city' => 'required',

                'country' => 'required',
                'adderss' => 'required',
                'about' => 'required',

            ],
        );
        Profile_detiel::find($patient_detiel_id)->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'date_of_birth' => $request->date_of_birth,

            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'city' => $request->city,

            'zip' => $request->zip,
            'country' => $request->country,
            'adderss' => $request->adderss,
            'about' => $request->about,
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('succ', 'Paitent Profile Succeefully Updated!');
    }
    public function profile_change_password()
    {
        return view('Fonend.patient.change_password');
    }
}
