<?php

namespace App\controllers;

class CoreController
{
    protected function show($viewName, $viewData = [])
    {
        global $router;

        $absoluteURL = $_SERVER['BASE_URI'];

        extract($viewData);

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}
