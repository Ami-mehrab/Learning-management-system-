<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function viewlogin() {

        return view('backend.login');


    }
    public function afterlogin(Request $request){

        // dd($request->all());
        $credentials=$request->except('_token');
        $check=Auth::attempt($credentials);
        // dd($check);

        if($check)
        {
           notify()->success('Logged in successfully');
            return redirect()->Route('dashboard');
        }
        else{
            notify()->error('incorrect credentials');
            return redirect()->back();
        }
    
    }
    public function logout(){
        Auth::logout();
        notify()->success('Successfully logged out');
        return redirect()->Route('login');
    }

}
