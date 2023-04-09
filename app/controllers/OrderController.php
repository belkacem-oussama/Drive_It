<?php

namespace App\controllers;

use App\models\Order;

class OrderController extends CoreController{
    public function showOrders(){
        $order = new Order;
        $orders = $order->findAll();
        $this->show('order_finish',['orders'=>$orders]);
        dump($orders);
    }
}