<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PostsController;
use App\Models\Posts;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return route('landing');
});

// Landing
Route::get('/landing', [LandingController::class, 'index'])->name('landing');

// Posts

Route::get('posts', [PostsController::class, 'index'])->name('posts');

Route::get('posts/create', [PostsController::class, 'create'])->name('create');
Route::get('posts/{slug}', [PostsController::class, 'show'])->name('show');
Route::post('posts', [PostsController::class, 'store'])->name('store');
Route::get('posts/{slug}/edit', [PostsController::class, 'edit'])->name('edit');
Route::patch('posts/{slug}', [PostsController::class, 'update'])->name('update');
Route::delete('posts/{slug}', [PostsController::class, 'destroy'])->name('delete');

// Comment

Route::post('comments', [CommentsController::class, 'comments'])->name('comment'); 