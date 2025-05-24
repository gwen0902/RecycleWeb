<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\BlogDetail;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'posts' => Blog::all()]);
});

Route::get('/blog/{post}', function (Blog $post) {
    return view('blog-detail', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});