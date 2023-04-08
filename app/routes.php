<?php

$router->map(
    'GET', 
    '/',
    [
      'controller'  => 'CarsController',
      'method'      => 'showCarsList'
    ],
    'cars_list'
);