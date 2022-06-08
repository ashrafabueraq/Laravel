<?php

namespace App\Http\Controllers;

use App\Models\movie;
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
        $movie = movie:: all();

        return view('movie.index', compact('movie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = movie::create($request->all());

        if($request->hasfile('movie_img')){

            $file = $request->file('movie_img');
            $extention = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('uploads/movies/', $filename);
            $movie->movie_img = $filename;
        }
        $movie->save();

        return redirect()->route('movies.index')->with('success', 'your movie created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(movie $movie)
    {

        return view('movie.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(movie $movie)
    {
        return view('movie.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, movie $movie)
    {
        $movie->update($request->all());

        if($request->hasfile('movie_img')){

            $file = $request->file('movie_img');
            $extention = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('uploads/movies/', $filename);
            $movie->movie_img = $filename;
        }
        $movie->save();

        return redirect()->route('movies.index')->with('success', 'your movie CREATED successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'your movie DELETED successfully');
    }
}
