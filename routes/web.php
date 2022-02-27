<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
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
    return view('about',[
        "title" => "About",
        "active" => "about"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/category/{category:slug}', function(Category $category){
    return view('blog', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load(['category', 'author']),
        "active" => "categories"
    ]);
});

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
        "active" => "categories"
    ]);
});

Route::get('/author/{author:username}', function(User $author){
    return view('blog', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load(['author', 'category']),
    ]);
});