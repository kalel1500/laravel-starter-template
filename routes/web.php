<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('home.example0'));

Route::get('/compare',       [\Src\Shared\Infrastructure\TestController::class, 'compare'])->name('shared.compare');
Route::get('/home/example0', [\Src\Home\Infrastructure\HomeController::class, 'example0'])->name('home.example0');
Route::get('/home/example1', [\Src\Home\Infrastructure\HomeController::class, 'example1'])->name('home.example1');
Route::get('/home/example2', [\Src\Home\Infrastructure\HomeController::class, 'example2'])->name('home.example2');
Route::get('/home/example3', [\Src\Home\Infrastructure\HomeController::class, 'example3'])->name('home.example3');
