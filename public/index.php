<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Set APP_KEY if not already set (for Railway deployment)
if (empty($_ENV['APP_KEY']) && empty($_SERVER['APP_KEY'])) {
    $_ENV['APP_KEY'] = 'base64:Rf7nSqTwsoipE2sWgtL3xWHklNxYVzqsNCX4PoDgjhs=';
    putenv('APP_KEY=base64:Rf7nSqTwsoipE2sWgtL3xWHklNxYVzqsNCX4PoDgjhs=');
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
