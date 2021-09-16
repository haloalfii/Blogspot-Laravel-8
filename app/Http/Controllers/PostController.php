<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();

        if(request('search')) {
            $posts->where('tittle', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return view('posts', [
            "tittle" => "All Posts",
            'active' => 'posts',
            "posts" => $posts->get()
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
