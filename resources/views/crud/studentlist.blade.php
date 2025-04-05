@extends('master')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="mb-4">Student List</h2>
                    <a class="btn btn-primary mb-3" href="{{Route('s_list')}}">Register student</a>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Students's Name</th>
                                    <th>Course's name</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>DOB</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($student as $students)
                          
                                    <tr>
                                        <td>{{$students ->id}}</td>
                                        <td>{{$students ->Name}}</td>
                                        <td>{{$students ->Course_name}}</td>
                                        <td>{{$students ->Gender}}</td>
                                        <td>{{$students ->Phone}}</td>
                                        <td>{{$students ->Email}}</td>
                                        <td>{{$students ->Date_of_Birth}}</td>
                                        <td>
                                            <a href="{{Route('s_delete',$students ->id)}}" class="btn btn-info btn-sm">Delete</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                                           
                                        </td>
                                    </tr>
                                @endforeach   
                            </tbody>
                        </table>
                    </div>

                </div> <!-- End col -->
            </div> <!-- End row -->
        </div> <!-- End container-fluid -->
    </div> <!-- End content -->
</div> <!-- End content-page -->
@endsection
