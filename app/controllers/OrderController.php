<?php

namespace App\controllers;

use App\models\Order;
use App\models\Cars;


class OrderController extends CoreController{

    public function showFinishedOrders(){
        $order_finished = new Order;
        $orders_finished = $order_finished->findFinishedOrder();
        $this->show('order_finish',['orders_finished'=>$orders_finished]);
    }

    public function showComingOrders(){
        $order_coming = new Order;
        $orders_coming = $order_coming->findComingOrder();
        $this->show('order_coming',['orders_coming'=>$orders_coming]);
    }

    public function showCurrentOrders(){
        $order_current = new Order;
        $orders_current = $order_current->findCurrentOrder();
        $this->show('order_current',['orders_current'=>$orders_current]);
    }

    public function NewOrder(){

        $car_list = new Cars;
        $cars_list = $car_list->FindAll();
        $this->show('order_new',['cars_list'=>$cars_list]);

        
        $data_array = [
            'cars' => filter_input(INPUT_POST, 'cars', FILTER_SANITIZE_STRING),
            'start_date' => filter_input(INPUT_POST, 'start_date', FILTER_SANITIZE_STRING),
            'end_date' => filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_STRING),
            'phone' => filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING),
            'mail' => filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING),
            'name' => filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING),
            'surname' => filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING),
            'location' => filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING),
            'city' => filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING)
        ];
        
        $errorList = [];

        if(empty($data_array)){
            $errorList[]='Champ vide';
        }

        if(empty($errorList)){
            dump($data_array);
        }
    }
}