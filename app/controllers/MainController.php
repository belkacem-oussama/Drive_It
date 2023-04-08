<?php

namespace App\controllers;

class MainController extends CoreController{
    public function pageNotFound() {
        $this->show('404');
    }
}