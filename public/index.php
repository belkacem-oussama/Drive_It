<?php
require_once '../vendor/autoload.php';

error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    $router->setBasePath($_SERVER['BASE_URI']);
} else {
    $_SERVER['BASE_URI'] = '/';
}

require __DIR__ . '/../app/routes.php';

$match = $router->match();

$dispatcher = new Dispatcher($match, '\App\controllers\MainController::pageNotFound');
$dispatcher->dispatch();
