<?php

namespace App\controllers;

use App\models\Cars;

class CarsController extends CoreController{
    public function showCarsList(){
        $car = new Cars;
        $cars = $car->findAll();
        $this->show('cars', ['cars' => $cars]);
    }
}