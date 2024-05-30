<?php

use Illuminate\Support\Facades\Route;
use Src\Home\Infrastructure\HomeController;

Route::get('/', function () {
    return redirect()->route('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
