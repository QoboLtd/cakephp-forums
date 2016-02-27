<?php
use Cake\Routing\Router;

Router::plugin(
    'Forum',
    ['path' => '/forum'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);
