<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::get();
        // dd($movies);
        return view('movies.index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMovieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');

        $x = $image->move(public_path('assets/img'), $image->getClientOriginalName());
        // $x = $image->move(public_path('images'),uniqid().".jpg");
        //  dd($x);
        $movie = new Movie();
        $movie->name = $request->name;
        $movie->cover = $x->getFilename();
        $movie->save();
        return redirect('/movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        // dd($movie);
        return view('movies.edit', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMovieRequest  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $isinya = $request->all();
        // dd($isinya);
        $movie->name = $request->name;
        if ($request->file('image')) {
            // $movie->cover=$request->file('image');
            $image = $request->file('image');
            $movie->cover = $image->getClientOriginalName();
            $x = $image->move(public_path('assets/img'), $image->getClientOriginalName());
        }
        $movie->save();
        return redirect('/movies');
        // dd($movie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('/movies');
        // dd($movie);
    }
}
