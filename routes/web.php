<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Muhammad Hafiz', 'age' => 22, 'title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        'title' => 'Article 1',
        'author' => 'Muhammad Hafiz',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed veritatis, beatae officia magnam et quasi provident inventore asperiores ea quas.'
    ],
    [
        'title' => 'Article 2',
        'author' => 'Muhammad Hafiz',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, voluptate. Unde cupiditate rerum deleniti, ducimus voluptates ipsam error. Aperiam dolorum amet voluptatibus neque vero!'
    ]
]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

