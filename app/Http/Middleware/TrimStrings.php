<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * Les champs à ne pas trim.
     *
     * @var array
     */
    protected $except = [
        'password',
        'password_confirmation',
    ];
}