<?php

$controllersNamespace = '\App\controllers\\';

$router->map(
    'GET', 
    '/',
    [
      'method'      => 'home',
      'controller'  => $controllersNamespace . 'MainController'
    ],
    'home'
);