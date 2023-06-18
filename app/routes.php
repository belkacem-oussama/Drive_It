<?php

$controllersNamespace = '\App\controllers\\';

/**
 * GET
 */

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
    '/order_new',
    [
      'method'      => 'NewOrder',
      'controller'  => $controllersNamespace . 'OrderController'
    ],
    'order_new'
);
  
  $router->map(
      'GET', 
      '/order_current',
      [
        'method'      => 'showCurrentOrders',
        'controller'  => $controllersNamespace . 'OrderController'
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
        'method'      => 'showComingOrders',
        'controller'  => $controllersNamespace . 'OrderController'
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

/**
 * POST
 */

 $router->map(
  'POST', 
  '/order_new',
  [
    'method'      => 'NewOrder',
    'controller'  => $controllersNamespace . 'OrderController'
  ],
  'order_new_post'
);