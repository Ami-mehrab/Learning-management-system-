<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseviewController extends Controller
{
    // for viewing courseview blade

    public function viewcourse(){
        return view('frontend.courses.courseview');
    }
}

