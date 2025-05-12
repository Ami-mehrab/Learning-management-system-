<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseviewController extends Controller
{
    // for viewing courseview blade

    public function viewcourse(){

        $course=Course::all();
        return view('frontend.courses.courseview',compact('course'));
    }
}

