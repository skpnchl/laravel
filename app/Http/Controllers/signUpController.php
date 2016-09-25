<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\SignUp;

use Redirect;

use Validator;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class signUpController extends Controller
{
    public function index(){
    	return view('login');
    }
    
    public function SignUp(Request $request)
    {

        if(Request::ajax()){
            $rules = array(
            'fullname' => 'required|max:40',
            'email' => 'required|email|unique:sign_ups',
            'password' => 'required|alphaNum|min:3'
            ); 
            $validator = Validator::make(Request::all(), $rules);
    
            if(!$validator->fails()){
                $fullname = Request::input('fullname');
                $email = Request::input('email');
                $password = hash::make(Request::input('password'));
                $user = new SignUp();
                $user->name = $fullname;
                $user->email = $email;
                $user->password = $password;
                $user->save();
                return route('dashboard'); 
            }else{
                return $validator->errors()->all();
            }
        }
    }


    public function SignIn(Request $request)
    {
    	if(Request::ajax()){
    		$username = Request::input('username');
    		$password = Request::input('password');
            $check = Auth::attempt([
                'email' => $username, 
                'password' => $password]);
    		if($check){
    			return route('dashboard'); 
    		}else{
    			return 'Fail';
    		}
    	}
    }

    public function LogOut(){
        Auth::logout();
        return Redirect::route('home');
    }
}
