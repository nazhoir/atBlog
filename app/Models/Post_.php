<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Blog Pertama",
            "slug" => "judul-blog-pertama",
            "author" => "Nazhoir",
            "artikel" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis esse nobis enim ullam. Suscipit laboriosam repellat consectetur explicabo sunt et veritatis vel sequi sed. Voluptatum eos ducimus qui in dolores deserunt odit enim quae rem veniam, voluptatem repellendus tempora soluta incidunt. Ex amet accusamus, reiciendis vel totam illum sequi quisquam?"
        ],
        [
            "title" => "Judul Blog Kedua",
            "slug" => "judul-blog-kedua",
            "author" => "Nazhoir",
            "artikel" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis esse nobis enim ullam. Suscipit laboriosam repellat consectetur explicabo sunt et veritatis vel sequi sed. Voluptatum eos ducimus qui in dolores deserunt odit enim quae rem veniam, voluptatem repellendus tempora soluta incidunt. Ex amet accusamus, reiciendis vel totam illum sequi quisquam?"
        ],
        [
            "title" => "Judul Blog Ketiga",
            "slug" => "judul-blog-ketiga",
            "author" => "Nazhoir",
            "artikel" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis esse nobis enim ullam. Suscipit laboriosam repellat consectetur explicabo sunt et veritatis vel sequi sed. Voluptatum eos ducimus qui in dolores deserunt odit enim quae rem veniam, voluptatem repellendus tempora soluta incidunt. Ex amet accusamus, reiciendis vel totam illum sequi quisquam?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts) ;
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}
