<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * Les cookies à ne pas chiffrer.
     *
     * @var array
     */
    protected $except = [];
}