<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
//$posts=Post::all(); //取出posts資料表所有貼文
//$posts=Post::find(1); //找尋posts資料表id=1的貼文

Route::get('/', function () {
    $allPosts =Post::all(); //多筆貼文的集合
    dd($allPosts);
    //取得is_feature欄位值為1的資料集合
    $featuredPosts = Post::where('is_feature',1)->get();    //多筆貼文的集合
    dd($featuredPosts);
});

Route::get('posts',[PostController::class, 'index'])
    ->name('posts.index');
Route::get('post',[PostController::class, 'show'])
    ->name('posts.show');
Route::get('contact',[PostController::class, 'contact'])
    -> name('posts.contact');
Route::get('about',[PostController::class, 'about'])
    ->name('posts.about');
