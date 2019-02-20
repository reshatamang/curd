<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('back.post.index',compact('posts')) ;  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.post.create');
    }

    /**
     * Store a the created Posts.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the form data
        $validatedData = $request->validate([
            'title' => 'required|unique:posts',
            'description' => 'required|unique:posts',
        ]);
    
        // save the form data to database

        $post =new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = 1;
        $post->slug = str_slug($request->title);
        $post->save();

        // return 'successfull';    
     
        
        // return view or response
        
        return redirect()->back();
        // return redirect()->route('post.create');


        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('back.post.edit', compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($id);
        // find the postid from database
        $post = Post::findorFail($id);
        // if found update the post
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('post.index');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
