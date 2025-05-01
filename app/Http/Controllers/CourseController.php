<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function mycourse (){

        $course =Course::all();
        $course=Course::with('category')->paginate(2);
        

        return view ('backend.crud.courselist',compact('course'));
    }  

    public function create (){
        $category=Category::all();
        $instructor=Instructor::all();
        
        return view ('backend.crud.coursecreate',compact('category','instructor'));

    }

    public function store (Request $request)
    {
        // dd($request->all());

        Course:: create([
            "name"=>$request ->course,
            "instructor_id"=>$request ->instructor_id,
            "category_id"=>$request ->category_id,
            "outline"=>$request ->course_outline,
            "duration"=>$request ->course_duration,
            "price" =>$request ->course_price

        ]);
        return redirect()->Route('course');
        
    }
    public function delete($id){

        Course::find($id)->delete ();
         return redirect() ->back();


    }
    


}
