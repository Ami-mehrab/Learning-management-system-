@extends('master')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="mb-4">Course Info</h2>

                    <div class="card">
                        <div class="card-body">
                            <form action="{{Route('course.store')}}" method="POST">
                               @csrf

                                <div class="mb-3">
                                    <label for="name" class="form-label">Course Name</label>
                                    <input type="text" name="course_name" id="" class="" value="" required>
                                  
                                </div>

                                <div class="mb-3">
                                    <label for="outline" class="form-label">Outline</label>
                                    <textarea name="course_outline" id="" class="form-control @error('outline') is-invalid @enderror" rows="3" required>{{ old('outline') }}</textarea>
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="instructor" class="form-label">Instructor</label>
                                    <input type="text" name="course_instructor" id="" class="form-control @error('instructor') is-invalid @enderror" value="{{ old('instructor') }}" required>
                                   
                                </div>

                                <div class="mb-3">
                                    <label for="duration" class="form-label">Duration</label>
                                    <input type="number" name="course_duration" id="" class="form-control @error('duration') is-invalid @enderror" value="{{ old('duration') }}" required>
                                   
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">Price[BDT]</label>
                                    <input type="number" name="course_price" id="" class="form-control @error('price') is-invalid @enderror" value="" required>
                                   
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-success">Save Course</button>
                                    <a href="{{Route('course')}}" class="btn btn-secondary">back to list</a>
                                </div>

                            </form>
                        </div>
                    </div>

                </div> <!-- End col -->
            </div> <!-- End row -->
        </div> <!-- End container-fluid -->
    </div> <!-- End content -->
</div> <!-- End content-page -->
@endsection
