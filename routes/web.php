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

// Landing
Route::get('/',                         [LandingController::class, 'index'])->name('landing');
Route::get('landing/{slug}',                   [LandingController::class, 'show'])->name('landingShow');

// Posts

Route::get      ('posts',               [PostsController::class, 'index'])->name('index');
Route::get      ('posts/create',        [PostsController::class, 'create'])->name('create');
Route::get      ('posts/{slug}',        [PostsController::class, 'show'])->name('show');
Route::post     ('posts',               [PostsController::class, 'store'])->name('store');
Route::get      ('posts/{slug}/edit',   [PostsController::class, 'edit'])->name('edit');
Route::patch    ('posts/{slug}',        [PostsController::class, 'update'])->name('update');
Route::delete   ('posts/{slug}',        [PostsController::class, 'destroy'])->name('delete');

// Comment

Route::post('comments',                 [CommentsController::class, 'comments'])->name('comment'); 