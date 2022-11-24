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

Route::get('/', function () {
    $post = new Post(); //先產生Post的物件$post,$post將代表posts資料表的偏貼文
    $post ->title = 'test title';   //指定貼文的title
    $post ->content = 'test content ';  //指定貼文的content
    $post ->save(); //將新貼文$post存入posts資料表
});

Route::get('posts',[PostController::class, 'index'])
    ->name('posts.index');
Route::get('post',[PostController::class, 'show'])
    ->name('posts.show');
Route::get('contact',[PostController::class, 'contact'])
    -> name('posts.contact');
Route::get('about',[PostController::class, 'about'])
    ->name('posts.about');
