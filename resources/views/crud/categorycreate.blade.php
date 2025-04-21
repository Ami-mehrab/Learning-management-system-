@extends('master')
@section ('content')

<div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                  <div class = "row mb-5" >
                    <div class="col-10"> 
                      <h1>Category create </h1>
                      <a class="btn btn-primary" href="{{Route('category.list')}}">Back to Category list</a>
                    </div>   
                  </div>
                  <form action="{{Route('cat.store')}}" method ="post">

                  @csrf 

  <div class="form-group" >
    <label for="">Category Name </label>
    <input type="name" name="cat_name" class="form-control" id="name" aria-describedby="" placeholder="Enter name">
    
  </div>
  <div class="form-group">
    <label for="">description </label>
    <input type="text" name="cat_desc" class="form-control" id="description" placeholder="write description ">
  </div>
  <div class="form-check">
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

                </div>
                 <!-- end col -->

                  </div>
                    <!-- end row -->


                     </div>

      @endsection