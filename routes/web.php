<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Models\Post;


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
    return view('posts', [
        'posts' => Post::latest()->with('category', 'author')->get()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
       'post' => $post
    ]);

});

Route::get('categories/{category:slug}', function (App\Models\Category $category){
   return view('posts', [
       'posts' => $category->posts->load(['category', 'author'])
   ]);
});

Route::get('authors/{author:username}', function (App\Models\User $author){
    return view('posts', [
        'posts' => $author->posts->load(['category', 'author'])
    ]);
});
