<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class,'index'])->name('index');

// Route::get('/register', [MainController::class, 'register'])->name('register');

Route::get('/book', [MainController::class,'book'])->name('book');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
