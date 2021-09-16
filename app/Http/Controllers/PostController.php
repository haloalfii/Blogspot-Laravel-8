<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "tittle" => "All Posts",
            'active' => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category']))->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('single-post', [
            "tittle" => "Single Post",
            'active' => 'posts',
            "posts" => $post
        ]);
    }
}
