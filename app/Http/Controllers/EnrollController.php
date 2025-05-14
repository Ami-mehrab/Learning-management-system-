<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EnrollController extends Controller
{
    public function addtocart($course_id)
    {

        // dd($course_id);

        $mycart = Session::get('cart');


        // dd($mycart);
        if (empty($mycart)) {
            $course = Course::find($course_id);

            $cartfirst[$course_id] = [


                //array key =value

                'id' => $course->id,
                'name' => $course->name,
                'image' => $course->image,
                'price' => $course->price,
                'quantity' => 1,
                'subtotal' => $course->price * 1,

            ];

            session::put('cart', $cartfirst);
            toastr()->title('Add Cart')->success('Course Added successfully!');
            return redirect()->back();
        }

        if (array_key_exists($course_id, $mycart)) {

            //quantity[+1] Subtotal= (price * quantity)

            $mycart[$course_id]['quantity'] = $mycart[$course_id]['quantity'] + 1;
            $mycart[$course_id]['subtotal'] = $mycart[$course_id]['price'] * $mycart[$course_id]['quantity'];

            session::put('cart', $mycart);

            toastr()->title('Add Cart')->success('Course Updated successfully!');
            return redirect()->back();
        } else {

            $course = Course::find($course_id);
            $mycart[$course_id] = [

                // array_key => value

                'id' => $course->id,
                'name' => $course->name,
                'image' => $course->image,
                'price' => $course->price,
                'quantity' => 1,
                'subtotal' => $course->price * 1

            ];

            session::put('cart', $mycart);
            toastr()->title('Add Cart')->success(' New Course Added successfully!');
            return redirect()->back();
        }
    }

    //coursecart page view

    public function coursecartview()
    {

        $mycart = Session::get('cart') ?? [];
        // dd($myCart);
        return view('frontend.courses.coursecartview',compact('mycart'));
    }

    public function checkEnroll(){

        return view('frontend.courses.courseplaceEnroll');

    
    }
    public function placeEnroll(Request $request){

dd($request ->all());

        Enrollment::create([

            'student_id'=>auth('student')->user()->id,
            'student_name'=>$request->name,
            'student_phone'=>$request->phone,
            'student_email'=>$request->email,
            'total'=>$request->total


        ]);

    }



}
