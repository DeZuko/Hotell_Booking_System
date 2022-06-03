<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{

    public function index()
    {
        // Declare $posts to all method() in Post
        $posts = Post::all();

        // return view('posts.index');
        return view('posts.index')->with('posts', $posts);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this -> validate($request, [
            'title'=>'required',
            'body'=>'required'
       ]);
       
        // Input to database
        $post = new Post;
        $post -> title = $request->input('title');
        $post -> body = $request->input('body');
        $post -> save();

        // Redirect to /posts.index auto after submit and display success message
        return redirect('/posts')->with('success', 'Post Created');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

/*     public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    } */
}
