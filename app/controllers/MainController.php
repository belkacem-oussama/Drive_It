<?php

namespace App\controllers;

class MainController extends CoreController{
    public function home(){
        $this->show('home');
    }
    
    public function pageNotFound() {
        $this->show('404');
    }

}