<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PostController;
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


Route::view('/', 'welcome') -> name('home');

Route::view('/contact', 'contact') -> name('contact');

//Route::group(['prefix' => 'blog'], function(){
//    Route::get('/', [PostController::class, 'index']) -> name('posts.index');
//
//    Route::get('/create', [PostController::class, 'create']) -> name('posts.create');
//
//    Route::post('/', [PostController::class, 'store']) -> name('posts.store');
//
//    Route::get('/{post}', [PostController::class, 'show']) -> name('posts.show');
//
//    Route::get('/{post}/edit', [PostController::class, 'edit']) -> name('posts.edit');
//
//    Route::put('/{post}', [PostController::class, 'update']) -> name('posts.update');
//
//    Route::delete('/{post}', [PostController::class, 'destroy']) -> name('posts.destroy');
//});

Route::resource('posts', PostController::class);

Route::view('/about', 'about') -> name('about');

Route::view('/login', 'auth.login') -> name('login');
Route::post('/login', [AuthenticatedSessionController::Class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::Class, 'destroy']) -> name('logout');

Route::view('/register', 'auth.register') -> name('register');
Route::post('/register',[RegisteredUserController::Class, 'store']);

