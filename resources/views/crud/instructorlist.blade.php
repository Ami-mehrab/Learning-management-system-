@extends('master')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="mb-4">Instructor List</h2>
                    <a class="btn btn-primary mb-3" href="{{Route('i_list')}}">Create Instructor</a>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Instructor's Name</th>
                                    <th>Course's name</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>DOB</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($instructor as $instructors )
    
                                    <tr>
                                        <td>{{$instructors ->id}} </td>
                                        <td>{{$instructors ->Name}}</td>
                                        <td>{{$instructors ->Course_name}}</td>
                                        <td>{{$instructors ->Gender}}</td>
                                        <td>{{$instructors ->Phone}}</td>
                                        <td>{{$instructors ->Email}}</td>
                                        <td>{{$instructors ->Date_of_Birth}}</td>
                                        <td>
                                            <a href="{{Route('i_delete',$instructors->id)}}" class="btn btn-info btn-sm">Delete</a>
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
