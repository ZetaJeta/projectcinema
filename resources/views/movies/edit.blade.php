@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')
<section class="formEdit" id="formEdit">
    <div class="container">
        <div class="header d-flex flex-row mb-3 justify-content-between">
            <h1 class="heading">Edit Movie</h1>
        </div>

        <div class="row">
            <div class="col-3">
                <img src="/assets/img/{{$movie->cover}}" alt="">
            </div>
            <div class="col">
            <form action="{{route('movies.update',['movie'=>$movie->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <!-- <img src="/assets/img/{{$movie->cover}}" alt=""> -->
                <div class="col">
                    <div class="mb-3">
                        <label for="editMovieName" class="movieName form-label">Name</label>
                        <!-- <input type="hidden" name="id" value="{{$movie->id}}"> -->
                        <input type="text" name="name" value="{{$movie->name}}">
                    </div>

                    <div class="mb-3">
                        <label for="editCoverImage" class="movieImage form-label">Image</label>
                        <input type="file" name="image">
                    </div>

                    <input class="btn" type="submit" value="Save">
                </div>
            </form>
            </div>
            
        </div>


    </div>
</section>
@endsection