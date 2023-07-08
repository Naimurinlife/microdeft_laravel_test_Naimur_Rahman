<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->phone = $request->phone;
        $post->designation = $request->designation;
        
        $post->save();
        return redirect('form')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
