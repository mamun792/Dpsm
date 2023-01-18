<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BackhandController extends Controller
{
        public function dashboard(){
             $users=User::all();
            return view('Backhands.dashboard',compact('users'));
        }
}

