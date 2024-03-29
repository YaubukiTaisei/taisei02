<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
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
Route::get('/', [PostController::class, 'top'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/', [PostController::class, 'list']); 
    Route::get('posts/index',[PostController::class, 'index'])->name('index');
    Route::get('posts/create',[PostController::class, 'create'])->name('create');
    Route::get('/posts/search',[PostController::class, 'search']);
    Route::get('/posts/{post}', [PostController::class, 'show']);
    Route::get('/posts/comment',[PostControoler::class, 'comment']);
    Route::post('/posts/comment/{post}', [CommentController::class, 'store']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts/edit/{post}', [PostController::class, 'edit']);
    Route::put('posts/{post}', [Postcontroller::class, 'update']);
    Route::delete('/posts/{post}',[PostController::class, 'delete']);
    Route::delete('/posts/comment/{comment}',[CommentController::class, 'delete']);
    Route::post('/posts/like', [PostController::class, 'like'])->name('posts.like');
    
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';