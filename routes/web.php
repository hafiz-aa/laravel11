<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Muhammad Hafiz']);
});

// Buat 2 rute baru
// 1. /blog
// 2 buah artikel, judul dan isi bebas
// 2. /contact
// email & social media


Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});

