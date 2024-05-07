<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Muhammad Hafiz', 'age' => 22, 'title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'article-1',
            'title' => 'Article 1',
            'author' => 'Muhammad Hafiz',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed veritatis, beatae officia magnam et quasi provident inventore asperiores ea quas.',
        ],
        [
            'id' => 2,
            'slug' => 'article-2',
            'title' => 'Article 2',
            'author' => 'Muhammad Hafiz',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, voluptate. Unde cupiditate rerum deleniti, ducimus voluptates ipsam error. Aperiam dolorum amet voluptatibus neque vero!'
        ],
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'article-1',
            'title' => 'Article 1',
            'author' => 'Muhammad Hafiz',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed veritatis, beatae officia magnam et quasi provident inventore asperiores ea quas.',
        ],
        [
            'id' => 2,
            'slug' => 'article-2',
            'title' => 'Article 2',
            'author' => 'Muhammad Hafiz',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, voluptate. Unde cupiditate rerum deleniti, ducimus voluptates ipsam error. Aperiam dolorum amet voluptatibus neque vero!'
        ],
    ];

    $post = Arr::first($posts, function ($post) use($slug) { 
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

