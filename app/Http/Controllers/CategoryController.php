<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list (){
        $cat = Category::all ();
        return view ('crud.categorylist',compact('cat'));


        
    } 

    public function form ()
    {

        return view ('crud.categorycreate') ;
    }
    public function store (Request $request   )
    {

    //    dd($request->all());
    Category::create ([

        "Name" => $request ->cat_name,
        "Description" => $request -> cat_desc

    ]);

    notify()->success('Caategory Created');
    return redirect()->back();
}

public function delete ($cat_id)
{
  $category =Category:: find($cat_id);
  $category->delete ();



  notify()->error('category deleted');

  return redirect()->back();
 

}


}



