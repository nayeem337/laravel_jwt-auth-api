<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))

// by default--> before api 

    // ->withRouting(
    //     web: __DIR__.'/../routes/web.php',
    //     commands: __DIR__.'/../routes/console.php',
    //     health: '/up',
    // )

// by default--> before api 

// after api ---> changes

->withRouting(
    web: __DIR__.'/../routes/web.php',

    api: __DIR__.'/../routes/api.php',

    commands: __DIR__.'/../routes/console.php',

    health: '/up',

    apiPrefix: 'api',
)

// after api ---> changes


    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
