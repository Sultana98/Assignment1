<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/Books',[BooksController::class, 'index']);
Route::get('/Books/{Book}',[BooksController::class, 'show']);
