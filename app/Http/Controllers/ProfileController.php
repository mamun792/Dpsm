<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{

         public function edit(Request $request)
         {

             return view('Backhands.Profile.index');
         }

           public function change_password(Request $request){
           $request->validate([
               // 'current_password'=> 'required',
               // 'new_password'=> 'required',
               // 'confrium_password'=> 'required'
               '*'=>'required',
               'password'=>['confirmed', Password::min(8)]
           ]);


                  if(Hash::check($request->current_password,  auth()->user()->password)){
                                 User::find(auth()->id())->update([
                                 'password'=>Hash::make($request->password)
                                 ]);
                                    return back()->with('passS',"password succeefully changed!");
                                 }else{
                                    return back()->with('pass',"current cassword not match");
                  }
                  }
public function change_information(Request $request){
    if($request->hasFile('profile_photo')){
if(auth()->user()->profile_photo){
    $delete= public_path('uploads/profile_photo/').auth()->user()->profile_photo;
    unlink($delete);
}


    $exteion_name=Str::random(20).".".$request->file('profile_photo')->getClientOriginalExtension();
    $path='uploads/profile_photo/'.$exteion_name;
       Image::make($request->file('profile_photo'))->save($path);

       User::find(auth()->id())->update([
       'profile_photo'=> $exteion_name,
]);





}
User::find(auth()->id())->update([
    'name'=>$request->name
    ]);
    return back()->with('update','Update information succeefully');
}

}
