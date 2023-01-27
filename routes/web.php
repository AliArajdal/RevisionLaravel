<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/posts', [PostController::class, 'list'])->name('posts.list');
Route::get('/posts/add', [PostController::class, 'add'])->name('add.post');
Route::post('/post/save', [PostController::class, 'save']);
Route::get('/post/delete/{post}', [PostController::class, 'delete']);
Route::get('/post/edit/{post}', [PostController::class, 'edit']);
Route::post('/post/update', [PostController::class, 'update'])->name('update.post');
Route::get('/post/details/{post}', [PostController::class, 'details']);

Route::get('/tags', [TagController::class, 'list'])->name('tags.list');
Route::get('/tag/add', [TagController::class, 'add'])->name('add.tag');
Route::post('/tag/save', [TagController::class, 'save']);
Route::get('/tag/delete/{tag}', [TagController::class, 'delete']);
Route::get('/tag/edit/{tag}', [TagController::class, 'edit']);
Route::post('/tag/update', [TagController::class, 'update'])->name('update.tag');

Route::post('/post/add-comment', [CommentController::class, 'add']);
Route::post('/post/affect-tag', [PostController::class, 'affectTag']);
Route::post('/post/disaffecTag', [PostController::class, 'disaffecTag']);
