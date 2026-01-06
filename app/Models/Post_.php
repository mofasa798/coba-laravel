<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }
class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ujang",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus explicabo, atque nemo autem unde perferendis culpa magnam odio ex fugit, soluta sit qui distinctio consequuntur natus voluptate aperiam praesentium error!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dudung",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, vero illo accusamus excepturi necessitatibus perferendis fugiat quis itaque perspiciatis et expedita nihil doloremque similique unde id, aspernatur dolor aut velit quibusdam? Eum, corrupti?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {   
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}