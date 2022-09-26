<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fahmi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Expedita alias perferendis optio reprehenderit architecto in explicabo dolore, sequi aut, quam ullam ab velit.
        Iure excepturi dolore sed? Quibusdam, suscipit temporibus?"
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Expedita alias perferendis optio reprehenderit architecto in explicabo dolore, sequi aut, quam ullam ab velit.
        Iure excepturi dolore sed? Quibusdam, suscipit temporibus?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

    
}
