<?php

return [

    'enabled' => env('DEBUGBAR_ENABLED', true),

    'collectors' => [
        'phpinfo' => true,
        'messages' => true,
        'time' => true,
        'memory' => true,
        'exceptions' => true,
        'log' => true,
        'db' => true,
        'views' => true,
        'route' => true,
        'auth' => true,
        'gate' => true,
        'session' => true, // ✅ obligatoire pour le menu Session
        'request' => true,
        'mail' => true,
        'laravel' => true,
        'events' => true,
        'cache' => true,
        'models' => true,
        'livewire' => true,
    ],

    'storage' => [
        'enabled' => true,
        'driver' => 'file',
        'path' => storage_path('debugbar'),
    ],

    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => null,
];