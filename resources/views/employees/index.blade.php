@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')
<!-- <table class="table">
@foreach($employees as $employee)
<tr>
    <td>{{$employee->name}}</td>
    <td>{{$employee->nik}}</td>
    <td>{{$employee->phone_number}}</td>
    <td><img src="{{$employee->photo}}" alt=""></td>
</tr>
@endforeach
</table>
{{$employees}} -->

<!-- Add modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/employees" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="employeeInputName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="employeeInputName" value="" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="nikInputName" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nikInputName" value="" name="nik">
                        </div>
                        <div class="mb-3">
                            <label for="phoneInputName" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phoneInputName" value="" name="phone_number">
                        </div>
                        <div class="mb-3">
                            <label for="employeeInputFile" class="form-label">Choose File</label>
                            <input type="text" class="form-control" value="" name="cover">
                            <input type="file" name="image">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" />
                            <!-- <submit class="btn btn-success">Save</submit> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete modal -->
    <div class="modal" tabindex="-1" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <section class="movielist" id="movielist">

        <div class="container" data-aos="fade-up">
            <div class="header d-flex flex-row mb-3 justify-content-between">
                <h1 class="heading">Employee List</h1>
                <!-- Button trigger modal -->

                <!-- add modal -->
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addModal">Add Employee</button>
            </div>
            <div class="row gy-4">
                @foreach($employees as $employee)

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="movielist-member">
                        <div class="member-img">
                            <img src="/assets/img/{{$employee->photo}}" class="img-fluid" alt="">
                            <div class="button">
                                <a href="{{route('employees.edit',['employee'=>$employee->id])}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{route('employees.destroy',['employee'=>$employee->id])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="#" onclick12312="alert('test')" onclick="$(this).closest('form').submit();"><i class="fa-solid fa-trash-can"></i></a>
                                </form>


                            </div>
                        </div>
                        <div class="member-info">
                            <h4>{{$employee->name}}</h4>
                            <h5>{{$employee->nik}}</h4>
                            <h5>{{$employee->phone_number}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection