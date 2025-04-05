<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $student=Student::all ();
        return view ('crud.studentlist',compact ('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.studentcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request-> all());

        Student::create ([
            "Name"=>$request->s_name,
            "Course_name"=>$request->c_name,
            "Gender"=>$request->s_gender,
            "Phone"=>$request->s_phone,
            "Email"=>$request->s_email,
            "Date_of_Birth"=>$request->s_dob

        
        ]);
        return redirect()->back();
    }
    public function delete($id){
        Student::find($id)->delete();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
