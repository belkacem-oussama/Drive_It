<?php

$controllersNamespace = '\App\controllers\\';

$router->map(
    'GET', 
    '/',
    [
      'method'      => 'showCarsList',
      'controller'  => $controllersNamespace . 'CarsController'
    ],
    'cars-list'
);