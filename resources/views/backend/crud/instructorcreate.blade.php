@extends('backend.master')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="mb-4">Instructor's Info</h2>

                    <div class="card">
                        <div class="card-body">
                        <form action="{{Route('i_store')}}" method="POST" enctype ="multipart/form-data" >
                            @csrf


            <!--I_Name -->
            <div class="mb-3">
                <label for="name" class="form-label"> Name</label>
                <input type="text" name ="i_name" class="form-control" id="name" placeholder="Enter instructor's name" required>
            </div>
            

            <!-- course's name -->
            <!-- <div class="mb-3">
                <label for="name" class="form-label"> Course's name</label>
                <input type="text" name ="c_name" class="form-control" id="name" placeholder="" required>
            </div> -->


            <!-- Gender -->
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="i_gender" id="male" value="male" required>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="i_gender" id="female" value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone </label>
                <input type="tel"name ="i_phone" class="form-control" id="phone" placeholder="Enter phone number" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email </label>
                <input type="email" name="i_email" class="form-control" id="email" placeholder="Enter email" required>
            </div>

            <!-- Date of Birth -->
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" name="i_dob" class="form-control" id="dob" required>
            </div>
                 <!-- biography -->

                 <div class="mb-3">
                <label for="bio" class="form-label">Bio</label>
                <input type="text" name="i_bio" class="form-control" id="" required>
            </div>

            <!-- status -->
            <div class="mb-3">
                <label class="form-label">Status</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="male" value="active" required>
                    <label class="form-check-label" for="active">Active</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="female" value="inactive">
                    <label class="form-check-label" for="inactive">Inactive</label>
                </div>
            </div>

       

           <!-- image file -->
            <div class="mb-3 mt-3">
                <label for="Image" class="form-label">Image file </label>
                <input type="file" name="Image" class="" id="" required>

            </div>


             <!-- Submit Button -->
            <button type="submit" class="btn btn-primary  w-20">Submit</button>
           </form>

        <!-- <a href="{{Route('instructor')}}" class="btn btn-secondary w-20">Back to list</a> -->
    </div>

                 
                    </div>

                </div> <!-- End col -->
            </div> <!-- End row -->
        </div> <!-- End container-fluid -->
    </div> <!-- End content -->
</div> <!-- End content-page -->
@endsection
