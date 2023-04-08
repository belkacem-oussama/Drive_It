<?php

namespace App\controllers;
use App\models;

class CoreController{
    protected function show($viewName, $viewData = []) {
        global $router;

        $absoluteURL = $_SERVER['BASE_URI']; 

        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
    }
}