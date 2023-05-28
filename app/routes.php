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

$router->map(
  'GET', 
  '/cars',
  [
      'method'      => 'showCarsList',
      'controller'  => $controllersNamespace . 'CarsController'
    ],
    'cars'
  );
  
  $router->map(
      'GET', 
      '/order_current',
      [
        'method'      => 'order_current',
        'controller'  => $controllersNamespace . 'MainController'
      ],
      'order_current'
  );
  
  $router->map(
      'GET', 
      '/order_finish',
      [
        'method'      => 'showFinishedOrders',
        'controller'  => $controllersNamespace . 'OrderController'
      ],
      'order_finish'
  );
  
  $router->map(
      'GET', 
      '/order_to_come',
      [
        'method'      => 'order_to_come',
        'controller'  => $controllersNamespace . 'MainController'
      ],
      'order_to_come'
  );
  $router->map(
    'GET', 
    '/dealer',
    [
      'method'      => 'dealer',
      'controller'  => $controllersNamespace . 'MainController'
    ],
    'dealer'
);

$router->map(
    'GET', 
    '/repair',
    [
      'method'      => 'repair',
      'controller'  => $controllersNamespace . 'MainController'
    ],
    'repair'
);
