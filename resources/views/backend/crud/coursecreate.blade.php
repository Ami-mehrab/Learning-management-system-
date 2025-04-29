@extends('backend.master')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="mb-4">Course Info</h2>

                    <div class="card">
                        <div class="card-body">
                            <form action="{{Route('course.store')}}" method="POST" >
                               @csrf
                               
                        
                                <div class="mb-3">
                                    <label for="name" class="form-label">Course</label>
                                    <input type="text" name="course" id="" class="" value="" required>
                             </div>
                             <div class="mb-3">
                                    <label for="category" class="form-lphpabel">Course Category</label>
                                    <select name="category_id" class="form-select" aria-label="default">
                                        <option value="">Select Category</option>
                                        @foreach($category as $categories)
                                        <option value="{{$categories->id}}">{{$categories->Name}}</option>
                                        @endforeach
                                        </select>
                                    </div>

                                <div class="mb-3">
                                    <label for="outline" class="form-label">Outline</label>
                                    <textarea name="course_outline" id="" class="form-control @error('outline') is-invalid @enderror" rows="3" required>{{ old('outline') }}</textarea>
                                    
                                </div>

                                <div class="mb-3">
                                   
                                    <label for="instructor" class="form-label">Instructors</label>
                                    <select name="instructor_id" id="" class="form-select" aria-label="Select instructor">
                                        <option value="">Select Instructor</option>
                                        @foreach($instructor as $instructors)
                                         <option value="{{$instructors->id }}">{{$instructors->Name }}</option>
                                        @endforeach
                                    </select>
                                
                                </div>

                                <div class="mb-3">
                                    <label for="duration" class="form-label">Duration</label>
                                    <input type="text" name="course_duration" id="" class="form-control" value="{{ old('duration') }}" required>
                                   
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">Price[BDT]</label>
                                    <input type="text" name="course_price" id="" class="form-control" value="" required>
                                   
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-success">Save Course</button>
                                    <!-- <a href="{{Route('course')}}" class="btn btn-secondary">back to list</a> -->
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
