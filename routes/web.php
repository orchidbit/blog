<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SongGenController;
use App\Http\Controllers\PlaylistsController;
use App\Http\Controllers\ReviewsController;

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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/songgen',  [\App\Http\Controllers\SongGenController::class, 'index']);

Route::get('/playlists',  [\App\Http\Controllers\PlaylistsController::class, 'index']);

Route::get('/reviews',  [\App\Http\Controllers\ReviewsController::class, 'index']);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/blog/{slug}/like', [PostsController::class, 'like'])->name('posts.like');