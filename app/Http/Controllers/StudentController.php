<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\error;

class StudentController extends Controller
{
    public function viewregister()
    {

        return view('frontend.registration');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        //for registration 

        $validation = Validator::make($request->all(), [


            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',


        ]);



        if ($validation->fails()) {
            toastr()->title('Student  Registration')->options(['progressBar' => false])
                ->error($validation->getMessageBag());


            return redirect()->back();
        }





        Student::create([
            "username" => $request->username,
            "email" => $request->email,
            "password" => bcrypt($request->password)
          


        ]);

        toastr()->title('Student Registration')->options(['progressBar' => false])
            ->success('Registration Done');

        return redirect()->route('home');
    }
    public function viewlogin()
    {

        return view('frontend.login');
    }


    public function loginstore(Request $request)
  
    {
          //for login

        // dd($request->all());


        $validation = validator::make($request->all(), [



            'email' => 'required|email',
            'password' => 'required|min:6'

        ]);

        if ($validation->fails()) {


            toastr()->title('Student Registration')->options(['progressBar' => false])
                 ->error($validation->getMessageBag());



            return redirect()->back();


            
           
        }

      // dd($request->all());

      //checking credentials 

        $credentials = $request->except('_token');
        $check = Auth::guard('student')->attempt($credentials);

        if ($check) {

            toastr()->success('logged in  successfully!');

            return redirect()->route('place.enroll');
        } else {

            toastr()->error('invalid credentials');

            return redirect()->back();
        }
    }
}
