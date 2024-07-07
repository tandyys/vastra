<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\newsController;

Route::get('/register', [UserController::class, 'create'])->name('user.register');
Route::post('/register', [UserController::class, 'store'])->name('user.store');
Route::post('/login', [UserController::class, 'loginUser'])->name('login.post');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/home', [UserController::class, 'home'])->name('home');
Route::get('/', function() {
    return view('home');
});
Route::get('/news', function() {
    return view('news');
});

Route::get('/newscontent', [newsController::class, 'index']);

Route::get('/insert-news', [newsController::class, 'insertNewsData']);

Route::get('/stories', function() {
    return view('stories');
});

Route::get('/storycontent', function() {
    return view('batik7rupa');
});

Route::get('/product', function() {
    return view('product');
});

Route::get('/cart', function() {
    return view('cart');
});