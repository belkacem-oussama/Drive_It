<?php

require __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter;

$router->setBasePath($_SERVER['BASE_URI']);

$match = $router->match();

if($match !== false) {
	$routeInfos = $match['target'];

    $controllerToUse = $routeInfos['controller'];
    $methodToCall = $routeInfos['method'];

    $urlParams = $match['params'];
    
    $controller = new $controllerToUse; 

    $controller->$methodToCall($urlParams);
} else {
    $controller = new MainController; 
    $controller->pageNotFound();
}