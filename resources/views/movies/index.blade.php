@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')
<!-- BANNER -->
<section class="home" id="home">
    <div class="container home-wrapper">
        <div class="content-left" data-aos="fade-right">
            <!-- <img src="assets/img/textLogo.png" alt=""> -->
            <h1 class="heading">Ms. Marvel</h1>
            <p class="subheading">EPISODE BARU SETIAP RABU. Kamala Khan, remaja Muslim Amerika dan penggemar berat pahlawan super,
                merasa dirinya tak membaur, sampai akhirnya dia mendapatkan kekuatan super</p>

            <div class="form-panel">
                <div class="kotak">
                    <p class="text">See More</p>
                    <svg width="224" height="238">
                    </svg>
                </div>

            </div>
        </div>
        <div class="content-right" data-aos="fade-left">
            <div class="img-wrapper">
                <img src="assets/img/msmarvelBanner1.jpg" alt="">
            </div>
        </div>

    </div>

    <!-- Add modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Movie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/movies" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="movieInputName" class="form-label">Movie Name</label>
                            <input type="text" class="form-control" id="movieInputName" value="" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="movieInputFile" class="form-label">Choose File</label>
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
                <h1 class="heading">Now Showing on Cinema </h1>
                <!-- Button trigger modal -->

                <!-- add modal -->
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addModal">Add Movie</button>
            </div>
            <div class="row gy-4">
                @foreach($movies as $movie)

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="movielist-member">
                        <div class="member-img">
                            <img src="/assets/img/{{$movie->cover}}" class="img-fluid" alt="">
                            <div class="button">
                                <a href="{{route('movies.edit',['movie'=>$movie->id])}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <!-- <a href="{{route('movies.edit',['movie'=>$movie->id])}}">Edit {{$movie->id}}</a> -->
                                <form action="{{route('movies.destroy',['movie'=>$movie->id])}}" method="POST">
                                    <!-- edit button -->
                                    <!-- <a href="" class="" data-bs-toggle="modal" data-bs-target="#movieModal"><i class="fa-solid fa-pen-to-square"></i></a> -->

                                    <!-- delete button -->
                                    @csrf
                                    @method('delete')
                                    <!-- <input type="submit" value="Delete" class="fa-solid fa-trash-can"> -->
                                    <a href="#" onclick12312="alert('test')" onclick="$(this).closest('form').submit();"><i class="fa-solid fa-trash-can"></i></a>
                                </form>


                            </div>
                        </div>
                        <div class="member-info">
                            <h4>{{$movie->name}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endsection