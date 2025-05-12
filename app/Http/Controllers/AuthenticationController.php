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
            toastr()->success('logged in  successfully!');
            return redirect()->Route('dashboard');
        }
        else{
            toastr()->error('incorrect credentials');
            return redirect()->back();
        }
    
    }
    public function logout(){
        Auth::logout();

        toastr()->error('logged out successfully');
        return redirect()->Route('login');
    }

}
