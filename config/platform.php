<?php

return [
    'domain' => env('DASHBOARD_DOMAIN', null),

    'prefix' => env('DASHBOARD_PREFIX', '/manage'),

    'middleware' => [
        'public'  => ['web'],
        'private' => ['web', 'platform'],
    ],

    'guard' => config('auth.defaults.guard', 'web'),

    'auth'  => true,

    'index' => 'platform.main',


    'resource' => [
        'stylesheets' => [],
        'scripts'     => [],
    ],

    'template' => [
        'header' => '',
        'footer' => '',
    ],

    'attachment' => [
        'disk'      => 'public',
        'generator' => \Orchid\Attachment\Engines\Generator::class,
    ],

    'icons' => [
        'orc' => \Orchid\IconPack\Path::getFolder(),
    ],

    'notifications' => [
        'enabled'  => true,
        'interval' => 60,
    ],

    'search' => [
        // \App\Models\User::class
    ],

    'turbo' => [
        'cache' => false
    ],

    'fallback' => true,

    'provider' => \App\Orchid\PlatformProvider::class,

];
