@extends('backend.master')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">

            <table class="table table-striped table-bordered">
              <thead class="table-dark">

                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Phone</th>
                    <th scope="col">Total</th>
                    <th scope="col">Pay status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
               @foreach($enroll as $enrollment)
                    <tr>
                    <td>{{$enrollment->id}}</td>
                    <td>{{$enrollment->student_name}}</td>
                    <td>{{$enrollment->student_phone}}</td>
                    <td>{{$enrollment->total}}</td>
                    <td> @if($enrollment->pay_status=='Paid')
                                            <span class="badge bg-success">Paid</span>
                                            @else
                                             <span class="badge bg-danger">Unpaid</span>
                                             @endif
                    </td>
                    <td>
                       
                        <a class="btn btn-info btn-sm" href="">View</a>
                    </td>
                    </tr>
                    @endforeach
               
                </tbody>
            </table>


                
          </div>
        </div>
    </div>
 </div>

@endsection 