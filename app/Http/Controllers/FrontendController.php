<?php

namespace App\Http\Controllers;

use App\Models\_specilest;
use App\Models\Doctor;
use App\Models\Favourit;
use App\Models\User;
use App\Models\time_schedules;
use App\Models\Profile_detiel;
use App\Models\Featured_photo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class FrontendController extends Controller
{
    public function index()
    {

        $specilest = _specilest::latest()->get();
        $doctor = Doctor::latest()->get();

        return view('Fonend.index', compact('specilest', 'doctor'));
    }
    public function doctor_profile($id)
    {
       $doctor = Doctor::find($id);
  
       $related_doctor = Doctor::where('special_id', $doctor->special_id)->where('id', '!=', $id)->get();
        $fecture_photo = Featured_photo::where('doctor_id', $id)->get();
        return view('Fonend.doctor_profile', compact('doctor', 'fecture_photo', 'related_doctor'));

    }
    public function profile_detals()
    {

        $user = User::find(Auth::id());
        $us = Profile_detiel::all();
        $profile_det = DB::table('users')->join('profile_detiels', 'users.id', '=', 'profile_detiels.user_id')->where('user_id', $user->id)->get();

        return view('Fonend.patient.index', compact('profile_det'));
    }

    public function add_favourite($id)
    {

        Favourit::insert([
            'doctor_id' => $id,
            'user_id' => auth()->user()->id,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }

    public function doctor_book_now($id)
    {
        $doctor = Doctor::find($id);
        return view('Fonend.book_now',compact('doctor'));
    }

    public function custom_login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,])) {
            return back();
        } else {
            return back()->with('login_error','email or password is worng');
        }
        //  return $request;
    }
}
