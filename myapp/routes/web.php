<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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
        "title" => "Home",
        'active' => 'categories'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Hervin Fakhrul",
        "email" => "203040097@mail.unpas.ac.id",
        "image" => "profile.jpg",
        'active' => 'categories'
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

// Halaman Single Post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
       'title' => 'Post Categories',
       'active' => 'categories',
       'categories' =>Category::all()
    ]);
});


