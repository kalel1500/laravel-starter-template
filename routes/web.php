<?php

use Illuminate\Support\Facades\Route;
use Src\Home\Infrastructure\HomeController;
use Src\Shared\Infrastructure\TestController;

Route::get('/', fn() => redirect()->route('home.index'));

Route::get('/test', [TestController::class, 'test'])->name('shared.test');
Route::get('/testJsonErrors', [TestController::class, 'testJsonErrors']);
Route::get('/tailwind', [TestController::class, 'tailwind']);

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
