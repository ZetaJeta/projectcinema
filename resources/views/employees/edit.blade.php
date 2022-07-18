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
            <div class="col">
                <form action="{{route('employees.update',['audience'=>$audience->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="editAudienceName" class="audienceName form-label">Name</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" value="{{$audience->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="editAudienceNumber" class="AudienceName form-label">Phone Number</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone_number" value="{{$audience->phone_number}}">
                    </div>

                    <input class="btn" type="submit" value="Save">

                </form>
            </div>

        </div>


    </div>
</section>
@endsection