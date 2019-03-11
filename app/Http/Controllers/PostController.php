<?php

namespace App\Http\Controllers;

use\App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::with('category')->get();
        // dd($posts);
        return view('back.post.index',compact('posts')) ;  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Category::latest()->get();
        $categories = Category::where('status',1)->get();
        return view('back.post.create',compact('categories'));
    }

    /**
     * Store a the created Posts.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // validate the form data
        $validatedData = $request->validate([
            'title' => 'required|unique:posts',
            'description' => 'required|unique:posts',
            'category_id' => 'required'
        ]);
        // dd($request->all());

        // save the form data to database

        $post =new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->user_id = 1;
        $post->slug = str_slug($request->title);
        $post->save();

        // return 'successfull';    
     
        
        // return view or response
        
        return redirect()->route('posts.create')->with('success','Successfully Created');
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
        $categories = Category::latest()->get();
        return view('back.post.edit', compact('post','categories'));

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
        // validate the form data
        $validation = $request->validation([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);
        // find the postid from database
        $post = Post::findorFail($id);
        // if found update the post
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->save();
        return redirect()->route('posts.index')->with('success','Successfully updated');
    
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // dd($post->id);
        $post->delete();
        return redirect()->back()->with('success','Successfully deleated');
}}