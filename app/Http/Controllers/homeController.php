<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function myhome(){

        $instructor=Instructor::all();
        $course=Course::all();
       
        return view('frontend.home',compact('instructor','course'));
    }
}
