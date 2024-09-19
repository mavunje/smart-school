<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function login()
    {
        // This method is for displaying the form at the initial running time of the application

          //dd(Hash::make(12345678));

       return view('auth.login');
    }

    public function auth_login( Request $request)
    {
        //dd($request->all());

       $remember = !empty($request->remember) ? true:false;

       if(Auth::attempt(['email' => $request->email,'password'=> $request->password],$remember))
       {
       return redirect('pannel/dashboard');
       }
       else{
        return redirect()->back()->with('error','Please Enter the correct email and Password');
       }
    }


    public function logout()
    {

        Auth::logout();
        return redirect(url(''));

    }

}
