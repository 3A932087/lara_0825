<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Comment;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|s
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comment=Comment::find(2);
    echo $comment->content.'<br>';
    echo '******************'.'<br>';
    $post = $comment->post()->first(); //$comment->post
    echo $post->id.'<br>';
    echo $post->title.'<br>';
    echo $post->content.'<br>';
});

Route::get('posts',[PostController::class, 'index'])
    ->name('posts.index');
Route::get('post',[PostController::class, 'show'])
    ->name('posts.show');
Route::get('contact',[PostController::class, 'contact'])
    -> name('posts.contact');
Route::get('about',[PostController::class, 'about'])
    ->name('posts.about');
