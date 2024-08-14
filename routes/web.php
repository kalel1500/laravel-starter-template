<?php

use Illuminate\Support\Facades\Route;
use Src\Home\Infrastructure\HomeController;
use Src\Tests\Infrastructure\TestController;

Route::get('/', fn() => redirect()->route('home.index'));

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/testJsonErrors', [TestController::class, 'testJsonErrors']);
