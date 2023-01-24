<?php

namespace App\Http\Controllers;


use Auth;
use Mail;
use Image;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\ChangePasswordMail;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    function profileindex()
    {
      return view('profile.index');
    }

    // Name Update
    function profilenameupdate(Request $request)
    {
      $request->validate([
        'name' => 'required|alpha'
      ]);

      User::find(Auth::id())->update([
          'name' => $request->name,
      ]);
      return back()->with('name_change' , 'You Name Change');
    }

    // Password Update With Mail
    function passwordedit(Request $request)
    {
      $request->validate([
        'password' => 'confirmed|min:8|alpha_num'
      ]);
      if (Hash::check($request->old_password, Auth::user()->password)) {
        if($request->old_password == $request->password){
          return back()->with('old_pass_status' , 'It is Your Old Password');
        }
        else {
          User::find(Auth::id())->update([
            'password' => Hash::make( $request->password)
          ]);
        //   Mail::to(Auth::User()->email)->send(new ChangePasswordMail(Auth::User()->name));
          return back()->with('password_status' , 'Your Password Change');
        }
      }
      else {
        return back()->with('pass_milenai_status' , 'Your Password dose not match');
      }
    }

    // Profile Image Upload
    function profileimage(Request $request)
    {
      $request->validate([
        'profile_image' => 'required|image'
      ]);

      if($request->hasFile('profile_image')){
        if(Auth::user()->profile_image != 'default.jpg'){
          // delete photo
          $old_location = 'public/uploads/profile_photos/'.Auth::user()->profile_image;
          unlink(base_path($old_location));
        }
        $uploded_photo = $request->file('profile_image');
        $new_photo_name = Auth::id().'.'.$uploded_photo->getClientOriginalExtension();
        $new_photo_location = 'public/uploads/profile_photos/'.$new_photo_name;
        Image::make($uploded_photo)->resize(150,150)->save(base_path($new_photo_location) , 60);
        User::find(Auth::id())->update([
          'profile_image' => $new_photo_name
        ]);
        return back()->with('photo_success' , 'Profile Photo Upload Successfully!');
      }
      else {
        return back()->with('photo_status' , 'Please Into your Photo');
      }
    }
}
