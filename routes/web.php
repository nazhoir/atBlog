<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "Home"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route :: get('/dashboard/posts/checkSlug',[DashboardPostController :: class,'checkSlug'])
->middleware('auth');




Route::get('/posts', [PostController::class, 'index']);

Route::get('/about', function () {
    return view('single/about', [
        "title" => "About",
        "active" => "About"
    ]);
});

Route::get('/profile', function () {
    return view('single/profile', [
        "title" => "Profile",
        "active" => "Profile",
        "name" => "Nazhoir",
        "img" => "nazhoir.png"
    ]);
});

// List Posts By Author Page
Route::get('/author/{author:username}', function (User $author) {
    return view('posts', [
        "title" => "Posts $author->name",
        "posts" => $author->posts->load('category', 'author'),
    ]);
});

// List Categories Page
Route::get('/categories', function () {
    return view('categories', [
        "title" => "Category",
        "active" => "Category",
        "categories" => Category::all()
    ]);
});

// Single Post Page
Route::get('/{post:slug}', [PostController::class,'show']);


