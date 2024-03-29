<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [PostController::class, 'index'])->middleware('multi.auth');

Route::get('create', [PostController::class, 'create'])->middleware('multi.auth');

Route::post('save', [PostController::class, 'store'])->middleware('multi.auth');

Route::get('show/{id}', [PostController::class, 'show'])->middleware('multi.auth');

Route::post('comments', [CommentController::class, 'store'])->middleware('multi.auth');

