<?php

namespace App\controllers;

use App\models\Order;

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
}