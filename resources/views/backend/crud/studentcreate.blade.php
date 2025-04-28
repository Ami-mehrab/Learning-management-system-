@extends('backend.master')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="mb-4">Student's Info</h2>

                    <div class="card">
                        <div class="card-body">
                        <form action="{{Route('s_store')}}" method="post">
                            @csrf
                          

            <!--I_Name -->
            <div class="mb-3">
                <label for="name" class="form-label"> Name</label>
                <input type="text" name ="s_name" class="form-control" id="name" placeholder="Enter instructor's name" required>
            </div>

            <!-- course's name -->
            <div class="mb-3">
                <label for="name" class="form-label"> Course's name</label>
                <input type="text" name ="c_name" class="form-control" id="name" placeholder="Enter course name" required>
            </div>

            <!-- Gender -->
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="s_gender" id="male" value="male" required>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="s_gender" id="female" value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone </label>
                <input type="tel"name ="s_phone" class="form-control" id="phone" placeholder="Enter phone number" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email </label>
                <input type="email" name="s_email" class="form-control" id="email" placeholder="Enter email" required>
            </div>

            <!-- Date of Birth -->
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" name="s_dob" class="form-control" id="dob" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary  w-20">Submit</button>
            <a href="{{Route('student')}}" class="btn btn-secondary w-20">Back to list</a>
        </form>
    </div>

                 
                    </div>

                </div> <!-- End col -->
            </div> <!-- End row -->
        </div> <!-- End container-fluid -->
    </div> <!-- End content -->
</div> <!-- End content-page -->
@endsection
