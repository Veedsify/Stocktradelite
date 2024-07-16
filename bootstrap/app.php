<?php

use App\Http\Middleware\CheckUserIsAdmin;
use App\Http\Middleware\CheckUserKyc;
use App\Http\Middleware\CheckUsersVerified;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('admin', [
            'auth',
            CheckUserIsAdmin::class,
        ]);

        $middleware->appendToGroup('users', [
            'auth',
            CheckUsersVerified::class,
            CheckUserKyc::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
