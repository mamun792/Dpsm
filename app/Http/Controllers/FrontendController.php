<?php

namespace App\Http\Controllers;

use App\Models\_specilest;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $specilest=_specilest::all();
        return view('Fonend.index',compact('specilest'));
    }
}
