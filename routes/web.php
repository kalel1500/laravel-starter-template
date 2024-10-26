<?php

use Illuminate\Support\Facades\Route;
use Src\Home\Infrastructure\HomeController;

Route::get('/', fn() => redirect()->route('home'));

Route::get('/home', [HomeController::class, 'index'])->name('home');
