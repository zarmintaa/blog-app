<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'active' => 'about',
        'email' => 'mamangsagne@gmail.com',
        'name' => 'Mamang Sagne',
        'image' => 'https://source.unsplash.com/random/1080x720?person'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);


Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
   return view('categories', [
       'active' => 'categories',
       'title' => 'Post Categories',
       'categories' => Category::all(),
   ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'active' => 'categories',
        'title' => "Post by Category : " . $category->name,
        'posts' => $category->posts->load('category', 'author'),
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => 'Post by Author : ' . $author->name,
        'active' => '',
        'posts' => $author->posts->load('category', 'author'),
    ]);
});


Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('register', [RegisterController::class, 'store']);


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)
    ->middleware('auth');
