<?php

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
    return view('welcome');
});


// Posts

Route::get('posts', [PostsController::class, 'index'])->name('posts');

Route::get('posts/create', [PostController::class, 'create']);
Route::patch('posts/{slug}', [PostController::class, 'show']);
Route::post('posts/{slug}', [PostController::class, 'store']);

Route::get('posts/{slug}/edit', [PostController::class, 'edit']);
Route::patch('posts/{slug}', [PostController::class, 'update']);
Route::delete('posts/{slug}', [PostsController::class, 'delete']);

// Comment

