<?php

return [
    'modules' => [
        Vanilo\Category\Providers\ModuleServiceProvider::class,
        Vanilo\Product\Providers\ModuleServiceProvider::class,
        Vanilo\Properties\Providers\ModuleServiceProvider::class,
        Vanilo\Links\Providers\ModuleServiceProvider::class,
        Vanilo\MasterProduct\Providers\ModuleServiceProvider::class
    ],
    'register_route_models' => true
];
