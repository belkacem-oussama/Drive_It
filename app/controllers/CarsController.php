<?php

namespace App\controllers;

use App\models\Cars;

class CarsController extends CoreController{
    public function showCarsList(){
        $car = new Cars;
        $cars = $car->findAll();
        $this->show('home', ['cars' => $cars]);
    }
}