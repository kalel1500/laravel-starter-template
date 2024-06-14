<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Middleware;
use Thehouseofel\Hexagonal\Infrastructure\Exceptions\ExceptionHandler;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withExceptions(ExceptionHandler::getUsingCallback())
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->create();
