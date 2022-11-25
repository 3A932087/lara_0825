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
    $post=Post::find(1);
    $post->delete();
});

Route::get('posts',[PostController::class, 'index'])
    ->name('posts.index');
Route::get('post',[PostController::class, 'show'])
    ->name('posts.show');
Route::get('contact',[PostController::class, 'contact'])
    -> name('posts.contact');
Route::get('about',[PostController::class, 'about'])
    ->name('posts.about');
