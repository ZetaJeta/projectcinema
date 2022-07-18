@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')
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
        </div>
        <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="mb-3">
                    <div class="dropdown">
                        <form>
                            <select name="audience" class="form-control">
                                @foreach($audiences as $id => $name)
                                <option value="{{$id}}">{{$name}}</option>
                                @endforeach
                            </select>

                            <select name="employees" class="form-control">
                                @foreach($employees as $id => $name)
                                <option value="{{$id}}">{{$name}}</option>
                                @endforeach
                            </select>

                            <select name="cinemas" class="form-control">
                                @foreach($cinemas as $id => $name)
                                <option value="{{$id}}">{{$name}}</option>
                                @endforeach
                            </select>

                            <select name="movies" class="form-control">
                                @foreach($movies as $id => $name)
                                <option value="{{$id}}">{{$name}}</option>
                                @endforeach
                            </select>

                            <input class="btn" type="submit" value="Save">
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="" alt="">
            </div>
        </div>
    </div>
</section>
@endsection