<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function myinstructor(){

      $instructor=Instructor::all();
      
     
     
      return view ('backend.crud.instructorlist',compact('instructor'));


    }
    public function create(){
        
        return view('backend.crud.instructorcreate');

    }

    public function store(Request $request ){
        // dd($request->all());

        if($request->hasFile('Image')){
            $file=$request->file('Image');
            $fileName = date('YmdHis').'.'. $file->getClientOriginalExtension();
            $file->storeAs('/instructor',$fileName);
        }
      
        

        Instructor::create([
            "Name" => $request->i_name,
            "Gender" => $request->i_gender,
            "Phone" => $request->i_phone,
            "Email" => $request->i_email,
            "Date_of_Birth" => $request->i_dob,
            "bio"=>$request->i_bio,
            "status"=>$request->status,
            "Image" => $fileName
           
        ]);
        return redirect()-> Route('instructor');
      
    }
    public function delete($id)
    {
        Instructor::find($id)->delete();
        return redirect()->back();

    }
public function profile($id){
    

    $instructor=Instructor::find($id);

    return view ('backend.crud.instructorview',compact('instructor'));
}
    
}

