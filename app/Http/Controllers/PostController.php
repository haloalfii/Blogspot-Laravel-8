<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $tittle = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $tittle = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $tittle = ' by ' . $author->name;
        }

        return view('posts', [
            "tittle" => "All Posts" . $tittle,
            'active' => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get()
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
