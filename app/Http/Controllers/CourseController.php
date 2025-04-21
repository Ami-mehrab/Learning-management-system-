<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function mycourse (){

        $course =Course::all();
        $course=Course::with('category')->paginate(1);

        return view ('crud.courselist',compact('course'));
    }  

    public function create (){
        $category=Category::all();
        
        return view ('crud.coursecreate',compact('category'));

    }

    public function store (Request $request)
    {
        // dd($request->all());

        Course:: create([
            "name"=>$request ->course,
            "category_id"=>$request ->category_id,
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
