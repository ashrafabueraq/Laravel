<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // show all data 
    {
        $posts = post::all();  // select * from post
        
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create'); // to show create project
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
     
         
         $post = post::create($request->all());  // insert

        //  $post = new post;
        //  $post->name = $request->input('name');
        //  $post->email = $request->input('email');
        //  $post->age = $request->input('age');
        //  $post->password = $request->input('password');
        if($request->hasfile('profile_image')){

            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('uploads/posts/', $filename);
            $post->profile_image = $filename;
        }
        $post->save();

        return redirect()->route('posts.index')->with('success', 'post added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'age'=>'required',
            'password'=>'required',
            

        ]);
             
        $post->update($request->all());

        
        if($request->hasfile('profile_image')){

            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('uploads/posts/', $filename);
            $post->profile_image = $filename;
        }
        $post->save();

        
         return  redirect()->route('posts.index')->with('success', 'post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'post deleted successfully ');
    }
}
