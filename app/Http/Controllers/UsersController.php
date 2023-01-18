<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountCreation;


class UsersController extends Controller
{
      public function users(){
        $user=User::all();
        return view('Backhands.User.index',compact('user'));

      }

      public function add_user(){

        return view('Backhands.User.Add_user');
      }
      public function insert(Request $request){
        $request->validate(
            [
              'name' => 'required|max:30',
              'email' => 'required|unique:users,email',
              'role' => 'required',
              'profile_photo' => 'image',

            ],
              [
                 'name.required' =>' Name is Required!',
                 'email.required' =>' Email is Required!',
                 'role.required' =>' Role is Required!',

              ]
            );
            $generate_password=Str::random(8);
         $user_id= User::insertGetId([
             'name' =>$request->name,
             'email' =>$request->email,
             'password' =>bcrypt($generate_password),
             'created_at'=>Carbon::now(),
             'role' =>$request->role
           ]);
    if($request->hasFile('profile_photo')){
//image add
            $exteion_name=Str::random(20).".".$request->file('profile_photo')->getClientOriginalExtension();
            $path='uploads/profile_photo/'.$exteion_name;
               Image::make($request->file('profile_photo'))->save($path);

               User::find($user_id)->update([
               'profile_photo'=> $exteion_name,
    ]);
  }
// email_send_start

$info=[
    'name' =>$request->name,
    'email' =>$request->email,
    'password' =>$generate_password,
    'role' =>$request->role
];
Mail::to($request->email)->send(new AccountCreation($info));
//email_sent_end
        return back()->with('adds','succeefully add user');

      }
}
