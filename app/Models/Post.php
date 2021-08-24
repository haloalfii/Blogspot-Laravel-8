<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_post = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Alfian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil nam error deserunt saepe, fugiat commodi quasi possimus natus libero nesciunt non repellat nulla! Magni amet porro officia nisi. Minus eligendi magni voluptatum nihil odit error deleniti iure aperiam deserunt? Recusandae saepe sapiente sed doloribus aut perspiciatis culpa esse quod id odio. Hic exercitationem nemo, deleniti magnam laborum ad soluta beatae tempora, iste vitae recusandae, accusamus nulla laboriosam id nostrum eos distinctio tempore? In culpa, ipsam nihil modi quam at enim."
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Luthfi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil nam error deserunt saepe, fugiat commodi quasi possimus natus libero nesciunt non repellat nulla! Magni amet porro officia nisi. Minus eligendi magni voluptatum nihil odit error deleniti iure aperiam deserunt? Recusandae saepe sapiente sed doloribus aut perspiciatis culpa esse quod id odio."
        ],
    ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
