<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


use function Laravel\Prompts\error;

class CategoryController extends Controller
{
    public function list (){
        $cat = Category::all ();
        return view ('backend.crud.categorylist',compact('cat'));


        
    } 

    public function form ()
    {

        return view ('backend.crud.categorycreate') ;
    }
    public function store (Request $request   )
    {

        //validation

        $validation=Validator::make($request->all(),[

            'cat_name'=>'required|string',
            'cat_desc'=>'required|string'

        ]);

        if($validation->fails()){

            toastr()->title('Category creation')->options(['progressBar' => false])
            
            ->error($validation->getMessageBag());

            return redirect()->back();
        }


        //QUERY

    //    dd($request->all());
    Category::create ([

        "Name" => $request ->cat_name,
        "Description" => $request -> cat_desc

    ]);

    toastr()->title('Instructor creation')->options(['progressBar' => false])
    ->success('Category created successfully');


      return redirect()-> Route('category.list');
}

public function delete ($id)
{
  Category:: find($id)->delete ();
 



  notify()->error('category deleted');

  return redirect()->back();
 

}


}



