<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use Illuminate\Http\Request;

class AudienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $audiences = Audience::get();
        // dd ($audience);
        // dd($movies);
        return view('audiences.index', ['audiences' => $audiences]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreaudienceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $image = $request->file('image');

        // $x = $image->move(public_path('assets/img'), $image->getClientOriginalName());
        // $x = $image->move(public_path('images'),uniqid().".jpg");
        //  dd($x);
        $audiences = new audience();
        $audiences->name = $request->name;
        $audiences->phone_number = $request->phone_number;
        $audiences->save();
        return redirect('/audiences');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\audience  $audience
     * @return \Illuminate\Http\Response
     */
    public function show(audience $audience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\audience  $audience
     * @return \Illuminate\Http\Response
     */
    public function edit(audience $audience)
    {
        //
        return view('audiences.edit', ['audiences' => $audience]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaudienceRequest  $request
     * @param  \App\Models\audience  $audience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, audience $audience)
    {
        //
        $isinya = $request->all();
        // dd($isinya);
        $audience->name = $request->name;
        $audience->phone_number = $request->phone_number;
        $audience->save();
        return redirect('/audiences');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\audience  $audience
     * @return \Illuminate\Http\Response
     */
    public function destroy(audience $audience)
    {
        //
        $audience->delete();
        return redirect('/audiences');
    }
}
