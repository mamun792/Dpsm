<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;

class BackhandController extends Controller
{
        public function dashboard(){
             $users=User::all();
             $doctor=Doctor::latest()->get();
            return view('Backhands.dashboard',compact('users','doctor'));
        }
}

