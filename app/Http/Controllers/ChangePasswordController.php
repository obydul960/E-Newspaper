<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\User;

use Session;
use DB;
use Auth;
use Hash;

class ChangePasswordController extends Controller
{
    // Change password manage by obydul date:11-8-16
    public function changePasswordForm(){
        if(Auth::check()){
        return view('Backend.password.change_password');
        }
        else{
            return view('errors.404');
        }
    }

    // change password mange by obydul date:11-8-16
    public function changePassword(Request $request){
        if(Auth::check()){
        $pass1 = Input::get('new_password');
        $pass2 = Input::get('confirm_password');
        if($pass1 == $pass2)
        {
            $pass = Hash::make($pass2);
            $update = User::where('id','=',Auth::user()->id)
                ->update(array('password'=>$pass));
            Session::flash('data','Password Changed Successfully!'); //notification for password matched
            return Redirect::to('Backend.password.change_password');
        }
        else{
            Session::flash('data','Password Not Matched Please write Correctly!'); //notification for password matched
            return Redirect::to('Backend.password.change_password');
        }
        }
        else{
            return view('errors.404');
        }
    }
//end class
}
