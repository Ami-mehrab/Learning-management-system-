@extends('master')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="mb-4">Course List</h2>
                    <a class="btn btn-primary mb-3" href="{{Route('courselist')}}">Create Course</a>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Course</th>
                                    <th>Category</th>
                                    <th>Cat_name</th>
                                    <th>Outline</th>
                                    <th>Instructor</th>
                                    <th>Duration</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($course as  $courses)
    
                                    <tr>
                                        <td>{{$courses ->id}} </td>
                                        <td> {{$courses ->name}}</td>
                                        <td> {{$courses ->category_id}}</td>
                                        <td> {{$courses ->category-> Name}}</td>
                                        <td>{{$courses ->outline}}</td>
                                        <td>{{$courses ->instructor}}</td>
                                        <td>{{$courses ->duration}}</td>
                                        <td>{{$courses ->price}}</td>
                                        <td>
                                            <a href="{{Route('coursedelete',$courses->id)}}" class="btn btn-info btn-sm">Delete</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                                           
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        {{$course->links()}}
                    </div>

                </div> <!-- End col -->
            </div> <!-- End row -->
        </div> <!-- End container-fluid -->
    </div> <!-- End content -->
</div> <!-- End content-page -->
@endsection
