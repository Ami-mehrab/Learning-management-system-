<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\EnrollDetail;
use App\Models\Enroll;
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
        return view('frontend.courses.coursecartview', compact('mycart'));
    }
//checkout page
    public function checkEnroll()
    {

        $mycart = Session::get('cart') ?? [];

        return view('frontend.courses.courseplaceEnroll');
    }

    //place order page
    public function placeEnroll(Request $request)
    {

        // dd($request->all());

        $myenrollment = Enroll::create([

            'student_id' => auth('student')->user()->id,
            'student_name' => $request->name,
            'student_phone' => $request->phone,
            'student_email' => $request->email,
            'pay_method' => $request->pay,
            'pay_status'=>$request->pay_status,
            'status'=>$request->status,
            'total' => $request->total

        ]);
        $mycart = Session::get('cart');


        foreach ($mycart as $cartdata) {


            EnrollDetail::create([

                'enrolledcourse_id' => $myenrollment->id,
                'course_id' => $cartdata['id'],
                'course_quantity' => $cartdata['quantity'],
                'course_price' => $cartdata['price'],
                'subtotal' => $cartdata['subtotal']




            ]);
        }
        toastr()->title('Place Enrollment')->success(' Course enrolled successfull!');
        $mycart = Session::forget('cart');
        return redirect()->route('home');
    }

   
    //showing 
    //-enrolledlist

    public function enrolledlist(){
        $enroll=Enroll::with('student','enrolldetails')->paginate(10);

        return view('backend.Enrollment.list',compact('enroll'));
    }

//enrolledview

    // public function enrolledview($id){

    //     $enrollment=Enroll::find();
        
   
    //     return view('backend.Enrollment.view',compact('enrollment'));
    // }


}
