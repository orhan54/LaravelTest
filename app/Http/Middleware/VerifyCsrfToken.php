<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Les routes à exclure du CSRF.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}