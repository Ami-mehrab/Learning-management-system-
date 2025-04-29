@extends('backend.master')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-15 mx-auto">
                    <h2 class="mb-4">Instructor List</h2>
                    <a class="btn btn-primary mb-3" href="{{Route('i_list')}}">Create Instructor</a>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Instructor's Name</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>DOB</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($instructor as $instructors )
    
                                    <tr>
                                        <td>{{$instructors ->id}} </td>
                                        <td>{{$instructors ->Name}}</td>
                                        <td>{{$instructors ->Gender}}</td>
                                        <td>{{$instructors ->Phone}}</td>
                                        <td>{{$instructors ->Email}}</td>
                                        <td>{{$instructors ->Date_of_Birth}}</td>
                                        <td> @if($instructors->status=='active')
                                            <span class="badge bg-success">Active</span>
                                            @else
                                             <span class="badge bg-danger">Inactive</span>
                                             @endif
            
                                        </td>
                                        <td><img src="{{'/uploads/instructor/'.$instructors->Image}}"> </td>
                                        <td class="text-nowrap">

                                        <a href="{{ route('i_delete', $instructors->id) }}" class="btn btn-danger btn-sm me-1">Delete</a>
                                         <a href="" class="btn btn-warning btn-sm me-1">Edit</a>
                                         <a href="{{Route('i_view',$instructors->id)}}" class="btn btn-primary btn-sm">View</a>
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
