<?php

use Illuminate\Support\Facades\Route;
use Src\Home\Infrastructure\HomeController;
use Src\Shared\Infrastructure\TestController;

Route::get('/', fn() => redirect()->route('home.example1'));

Route::get('/test',             [TestController::class, 'test'])->name('shared.test');
Route::get('/testJsonErrors',   [TestController::class, 'testJsonErrors']);
Route::get('/tailwind',         [TestController::class, 'tailwind']);
Route::get('/testFlash',        [TestController::class, 'testFlash']);

Route::get('/home/example1', [HomeController::class, 'example1'])->name('home.example1');
Route::get('/home/example2', [HomeController::class, 'example2'])->name('home.example2');
Route::get('/home/example3', [HomeController::class, 'example3'])->name('home.example3');
