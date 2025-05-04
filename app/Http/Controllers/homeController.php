<?php

namespace App\Http\Controllers;
use App\Models\Instructor;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function myhome(){

        $instructor=Instructor::all();
       
        return view('frontend.home',compact('instructor'));
    }
}
