<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function mycourse (){

        $course =Course::all();


        return view ('crud.courselist',compact('course') ) ;
    }  

    public function create (){
        return view ('crud.coursecreate');
    }

    public function store (Request $request)
    {
        // dd($request->all());

        Course:: create([
            "name"=>$request ->course_name,
            "outline"=>$request ->course_outline,
            "instructor"=>$request ->course_instructor,
            "duration"=>$request ->course_duration,
            "price" =>$request ->course_price

        ]);
        return redirect()->back();
        
    }
    public function delete($id){

        Course::find($id)->delete ();
         return redirect() ->back();


    }
    


}
