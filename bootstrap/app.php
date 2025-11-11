<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// CRITICAL: Set APP_KEY before Laravel initialization
// This is needed for Railway deployment where env variables might not be accessible
if (empty($_ENV['APP_KEY']) && empty($_SERVER['APP_KEY'])) {
    $_ENV['APP_KEY'] = 'base64:Rf7nSqTwsoipE2sWgtL3xWHklNxYVzqsNCX4PoDgjhs=';
    putenv('APP_KEY=base64:Rf7nSqTwsoipE2sWgtL3xWHklNxYVzqsNCX4PoDgjhs=');
}

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
