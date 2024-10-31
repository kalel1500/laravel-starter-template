<?php

use Illuminate\Support\Facades\Route;
use Src\Home\Infrastructure\HomeController;

Route::get('/welcome', fn() => view('welcome'));
Route::get('/', fn() => redirect()->route('home'));
Route::get('/home', [HomeController::class, 'index'])->name('home');
