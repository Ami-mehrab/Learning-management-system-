<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

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
        //validatio 

        // dd($request->all());
        $validation=Validator::make($request->all(),[

            'i_name'=> 'required|string',
            'i_gender'=> 'required|in:male,female,other',
            'i_phone'=> 'required|string',

            'i_email'=> 'required|email|unique:users,email',

            'i_dob' => [
                'required',
                'date_format:Y-m-d',
                'before:today',
                'before_or_equal:' . Carbon::now()->subYears(25)->format('Y-m-d'),
            ],
            'i_bio'=>'required|string|min:10',
            'status'=>'required|string',
            'Image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);
      if($validation->fails()){

       
        toastr()->title('Instructor creation')->options(['progressBar' => false])
        ->error($validation->getMessageBag());

        return redirect()-> Route('instructor');
      }
        
    //   dd($request->all());

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

        toastr()->title('Instructor creation')->options(['progressBar' => false])
        ->success(' Created Successfully');
       

        return redirect()-> Route('instructor');
      
    }
    public function delete($id)
    {
        Instructor::find($id)->delete();
        return redirect()->back();

    }
public function profile($id){
    
    $instructor=Instructor::find($id);
    $course=Course::where ('instructor_id',$id)->get();

    return view ('backend.crud.instructorview',compact('instructor','course'));
}
    
}

