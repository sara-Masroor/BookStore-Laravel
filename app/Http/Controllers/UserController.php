<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function changePasswordIndex(){
        return view('user.changePassword');
    }

    public function changePassword(Request $request){
        $request->validate([
           'oldpassword'=>'required',
            'newpassword'=>'required',
            'password_confirmation'=>'required',
        ]);
        $user=auth()->user();
        if(Hash::check($request->oldpassword,$user->password)){

            if($request->newpassword != $request->password_confirmation)
                return "The new password doesnt confirm...";

            $user->password=Hash::make($request->newpassword);
            $user->update();
            return Redirect::to('/dashboard');
        }else{
            return "The passwords does not match...";
        }


//        return[$request,$user];
    }
}
