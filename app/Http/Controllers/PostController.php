<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function feed()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'content' => 'required|max:255',
            // other fields
        ]);
        $user = auth()->user()->id;
        dd($user);
        // Store the post
        $post = new Post();
        $post->user_id = $user;
        $post->content = $request->content;
        // fill other fields
        $post->save();

        return redirect()->route('posts.index');
    }
}
