<?php

namespace App\controllers;

class MainController extends CoreController{
    public function home(){
        $this->show('home');
    }

    public function cars(){
        $this->show('cars');
    }

    public function dealer(){
        $this->show('dealer');
    }

    public function available(){
        $this->show('available');
    }

    public function order_current(){
        $this->show('order_current');
    }

    public function order_to_come(){
        $this->show('order_coming');
    }

    public function order_finish(){
        $this->show('order_finish');
    } 

    public function pageNotFound() {
        $this->show('404');
    }

}