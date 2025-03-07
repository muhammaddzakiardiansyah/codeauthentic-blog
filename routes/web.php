<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MusicaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home",
//         "active" => "home"
//     ]);
// });

Route::get('/', [HomeController::class, 'index'])->name('page home');

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard' 
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');







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

