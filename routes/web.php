<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'ujang',
        'email' => 'ujang@mail.com',
        'image' => '1.jpg'
    ]);
});



Route::get('/blog', function () {
    return view('posts', [
        $blog_post = [
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
    ],
        'title' => 'Posts',
        'posts' => $blog_post
    ]);
});

// halaman single posts
Route::get('/posts/{slug}', function ($slug) {
    $blog_post = [
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

    $new_post = [];
    foreach ($blog_post as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});