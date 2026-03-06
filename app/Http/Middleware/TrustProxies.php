<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * Les proxies de confiance.
     *
     * @var array|string|null
     */
    protected $proxies = '*';

    /**
     * Les en-têtes à utiliser pour détecter les proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_FOR | 
                            Request::HEADER_X_FORWARDED_HOST | 
                            Request::HEADER_X_FORWARDED_PORT | 
                            Request::HEADER_X_FORWARDED_PROTO;
}