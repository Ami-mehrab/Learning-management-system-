<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            "password" => $request->password,
            "password_confirmation" => $request->password_confirmation


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

        // dd($request->all());


        $validation = validator::make($request->all(), [



            'username' => 'required|string',
            'password' => 'required|min:6'

        ]);

        if ($validation->fails()) {


            toastr()->title('Student Registration')->options(['progressBar' => false])
                 ->error($validation->getMessageBag());



            return redirect()->back();


            dd($request->all());
            $credentials = $request->except('_token');
            $check = auth('student')->attempt($credentials);

            if ($check) {

                toastr()->success('logged in  successfully!');

                return redirect()->route('home');
            } else {

                toastr()->error('invalid credentials');

                return redirect()->back();
            }
        }
    }
}
