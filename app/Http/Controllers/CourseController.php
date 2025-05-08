<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use function Laravel\Prompts\error;

class CourseController extends Controller
{
    public function mycourse()
    {

        $course = Course::all();
        $course = Course::with('category')->paginate(3);


        return view('backend.crud.courselist', compact('course'));
    }

    public function create()
    {
        $category = Category::all();
        $instructor = Instructor::all();

        return view('backend.crud.coursecreate', compact('category', 'instructor'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

       

        //course validation 
        $validation = Validator::make($request->all(), [

            'course' => 'required|string',
            'course_outline' => 'required|string|',
            'course_duration' => 'required|string|',
            'course_price' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'


        ]);

        if ($validation->fails()) {

            toastr()->title('Course creation')->options(['progressBar' => false])
            ->error($validation->getMessageBag());


            return redirect()->back();

        }
        

       

        //logic for uploading imagefile  

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/course', $fileName);
        }


      
        //Query 
       

        Course::create([
            "name" => $request->course,
            "instructor_id" => $request->instructor_id,
            "category_id" => $request->category_id,
            "outline" => $request->course_outline,
            "duration" => $request->course_duration,
            "price" => $request->course_price,
            "image" => $fileName

        ]);
        toastr()->title('Course creation')->options(['progressBar' => false])
            ->success('Course Created Successfully');

        return redirect()->route('course');
    }




    public function delete($id)
    {

        Course::find($id)->delete();
        return redirect()->back();
    }
}
