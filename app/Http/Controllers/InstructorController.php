<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function myinstructor(){

      $instructor=Instructor::all();
      return view ('crud.instructorlist',compact('instructor'));


    }
    public function create(){
        return view('crud.instructorcreate');

    }

    public function store(Request $request ){
        // dd($request->all());


        Instructor::create ([
            "Name"=>$request->i_name,
            "Course_name"=>$request->c_name,
            "Gender"=>$request->i_gender,
            "Phone"=>$request->i_phone,
            "Email"=>$request->i_email,
            "Date_of_Birth"=>$request->i_dob

        ]);
        return redirect()-> back();
      
    }
    public function delete($id)
    {
        Instructor::find($id)->delete();
        return redirect()->back();

    }

    
}

