<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\BlogDetail;
use App\Http\Controllers\ContactController;
use App\Models\Waste;
use App\Models\WasteCategory;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;



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

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/product', function () {
    $categories = WasteCategory::with('wastes')->get();
    return view('product', compact('categories'));
});

Route::get('/product', [ProductController::class, 'index']);

Route::get('/admin/login', [LoginController::class, 'showAdminLogin']);
Route::post('/admin/login', [LoginController::class, 'adminLogin']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');
})->middleware('auth');