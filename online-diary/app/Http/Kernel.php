<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // Middleware-config
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\AuthenticateMiddleware::class,
    ];
}
