<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PreventRequestsDuringMaintenance
{
    public function handle(Request $request, Closure $next)
    {
        if (app()->isDownForMaintenance()) {
            // Retourne une page 503 si l'application est en maintenance
            throw new HttpException(503, 'Le site est en maintenance.');
        }

        return $next($request);
    }
}