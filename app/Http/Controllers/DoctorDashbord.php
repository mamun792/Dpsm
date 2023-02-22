<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
