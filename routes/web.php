<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
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



Route::get('/',[PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/support', [PagesController::class, 'support']);
Route::get('/myPosts', [PagesController::class, 'myPosts']);
Route::get('/userControl', [PagesController::class, 'userControl']);

Route::resource('users', AdminController::class);
Route::resource('posts', PostController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
