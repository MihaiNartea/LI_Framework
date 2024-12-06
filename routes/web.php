<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::Get('/posts', [PostController::class, 'index'])->name('posts.home');
Route::Get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/categories/{category}', [PostController::class, 'filterByCategory'])->name('categories.filter');