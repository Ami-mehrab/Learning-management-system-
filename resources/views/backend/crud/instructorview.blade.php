@extends('backend.master')
@section('content')

<div class="content-page">
    <div class="content">
        <!-- Start Content -->
        <div class="container-fluid">
            <div class="container mt-5">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2>{{ $instructor->name }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4>Profile Picture</h4>
                                    </div>
                                    <div class="card-body text-center">
                                        @if($instructor->Image)
                                            <img src="{{'/uploads/instructor/'.$instructor->Image}}" 
                                                 alt="{{ $instructor->Name }}" 
                                                 class="img-fluid rounded-circle" style="max-height: 300px;">
                                        @else
                                            <div class="p-5 bg-light text-center">
                                                <i class="uil-user-circle" style="font-size: 5rem;"></i>
                                                <p class="mt-3">No profile picture available</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Actions</h4>
                                    </div>
                                    <div class="card-body">
                                        <a href="#" class="btn btn-primary btn-block mb-2">Edit Profile</a>
                                        <a href="{{ route('i_delete', $instructor->id) }}" class="btn btn-danger btn-block mb-2" onclick="return confirm('Are you sure you want to delete this instructor?')">Delete Profile</a>
                                        <a href="{{ route('instructor') }}" class="btn btn-secondary btn-block">Back to List</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <table class="table table-bordered">
                                    <tr>
                                        <th width="200">Instructor ID</th>
                                        <td>{{ $instructor->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $instructor->Name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $instructor->Email }}</td>
                                    </tr>
                                   
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            <span class="badge {{ $instructor->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                                {{ $instructor->status }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Joined At</th>
                                        <td>{{ $instructor->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Last Updated</th>
                                        <td>{{ $instructor->updated_at }}</td>
                                    </tr>
                                </table>

                                <div class="mt-4">
                                    <h4>Biography</h4>
                                    <div class="p-3 bg-light">
                                        {{ $instructor->bio ?? 'No biography available.' }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Courses by {{$instructor->name }}</h4>
                                <a href="{{Route('courselist', $instructor->id) }}" class="btn btn-success">Add New Course</a>
                            </div>

                            @if($instructor->courses && $instructor->courses->count() > 0)
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($instructor->courses as $course)
                                        <tr>
                                            <td>{{ $course->id }}</td>
                                            <td>{{ $course->title }}</td>
                                            <td>{{ $course->category->name ?? 'N/A' }}</td>
                                            <td>${{ number_format($course->price, 2) }}</td>
                                            <td>
                                                <span class="badge {{$course->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $course->status }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this course?')">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="alert alert-info">
                                    No courses available. Click "Add New Course" to create one.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection