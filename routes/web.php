<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Muhammad Hafiz', 'age' => 22, 'title' => 'About Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

