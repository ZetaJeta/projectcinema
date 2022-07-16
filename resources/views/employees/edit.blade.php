@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')
<section class="formEdit" id="formEdit">
    <div class="container">
        <div class="header d-flex flex-row mb-3 justify-content-between">
            <h1 class="heading">Edit Employee</h1>
        </div>

        <div class="row">
            <div class="col-3">
                <img src="/assets/img/{{$employee->photo}}" alt="">
            </div>
            <div class="col">
                <form action="{{route('employees.update',['employee'=>$employee->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="editEmployeeName" class="employeeName form-label">Name</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" value="{{$employee->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="editEmployeeNik" class="employeeName form-label">NIK</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nik" value="{{$employee->nik}}">
                    </div>
                    <div class="mb-3">
                        <label for="editEmployeeNumber" class="employeeName form-label">Phone Number</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone_number" value="{{$employee->phone_number}}">
                    </div>
                    <div class="mb-3">
                        <label for="editemployeeImage" class="employeeImage form-label">Photo</label>
                    </div>
                    <div class="mb-3">
                        <input type="file" name="photo">
                    </div>

                    <input class="btn" type="submit" value="Save">

                </form>
            </div>

        </div>


    </div>
</section>
@endsection