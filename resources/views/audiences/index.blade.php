@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

<section class="audiences" id="audiences">
    <!--  id="audiences"<ol>
    @foreach ($audiences as $audience)
    <li>
        {{$audience->name}}
    </li>
    @endforeach
    </ol> -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Audience</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/audiences" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="audienceInputName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="audienceInputName" value="" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="phoneInputName" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phoneInputName" value="" name="phone_number">
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
                <h1 class="heading">Audience List</h1>
                <!-- Button trigger modal -->

                <!-- add modal -->
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addModal">Add Audience</button>
            </div>
            <div class="row gy-4">
                @foreach($audiences as $audience)

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="movielist-member">
                        <div class="member-info">
                            <h4>{{$audience->name}}</h4>
                            <h5>{{$audience->phone_number}}</h5>
                            <div class="button-audience">
                                <a href="{{route('audiences.edit',['audience'=>$audience->id])}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{route('audiences.destroy',['audience'=>$audience->id])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="#" onclick12312="alert('test')" onclick="$(this).closest('form').submit();"><i class="fa-solid fa-trash-can"></i></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
    </section>
    @endsection