<?php

namespace App\controllers;


class HomeController extends CoreController{
    public function showHome(){
        $home = 'test';
        $this->show('home', ['home' => $home]);
    }
}