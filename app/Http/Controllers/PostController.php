<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        // Load the flat view file: resources/views/posts.blade.php
        return view('posts', [
            'title' => 'Create New Post',
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        // Insert directly into database without validation and auth
        Post::create([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'category_id' => $request->input('category_id'),
            'body' => $request->input('body'),
            'author_id' => 1 // default user ID
        ]);

        return redirect('/posts')->with('success', 'Post created successfully!');
    }
}
