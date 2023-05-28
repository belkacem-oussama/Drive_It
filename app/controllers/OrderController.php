<?php

namespace App\controllers;

use App\models\Order;

class OrderController extends CoreController{
    public function showOrders(){
        $order = new Order;
        $orders = $order->findAll();
        $this->show('order_finish',['orders'=>$orders]);
    }

    public function showFinishedOrders(){
        $order_finished = new Order;
        $orders_finished = $order_finished->findFinishedOrder();
        $this->show('order_finish',['orders_finished'=>$orders_finished]);
    }
}