<?php

use App\Http\Controllers\MusicaController;
use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about"
    ]);
});

Route::get('/musica', [MusicaController::class, 'pilih']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        "title" => "Post Categories",
        "active" => "categories",
        "categories" => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('category', [
//         "title" => $category->nama,
//         "active" => "categories",
//         "posts" => $category->posts->load('user', 'category'),
//         "category" => $category->nama
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         "title" => "User Posts by " . $author->name,
//         "active" => "User Post by " . $author->name, 
//         "posts" => $author->Posts->load('user', 'category')
//     ]);
// });

