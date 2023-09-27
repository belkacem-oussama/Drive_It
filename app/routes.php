<?php

$controllersNamespace = '\App\controllers\\';

/**
 * GET
 */

$router->map(
    'GET', 
    '/',
    [
      'method'      => 'showHome',
      'controller'  => $controllersNamespace . 'HomeController'
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
      'method'      => 'showDealers',
      'controller'  => $controllersNamespace . 'DealerController'
    ],
    'dealer'
);

$router->map(
    'GET', 
    '/available',
    [
      'method'      => 'available',
      'controller'  => $controllersNamespace . 'MainController'
    ],
    'available'
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