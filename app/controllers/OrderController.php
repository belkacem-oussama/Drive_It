<?php

namespace App\controllers;

use App\models\Order;
use App\models\Cars;
use App\models\Driver;


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

    public function NewOrder()
{
    /**
     * GET CARS
     */
    $car_list = new Cars;
    $cars_list = $car_list->FindAll();

    $drivers = new Driver;
    $drivers_list = $drivers->findAll();


    $data_array = [
        'cars' => $_POST['cars'] ?? '',
        'start_date' => $_POST['start_date'] ?? '',
        'end_date' => $_POST['end_date'] ?? '',
        'name' => $_POST['name'] ?? '',
        'km_start' => $_POST['km_start'] ?? '',
        'km_end' => $_POST['km_end'] ?? '',
        'comments' => $_POST['comments'] ?? '',
        'status' => $_POST['status'] ?? '',
        'DriverId' => $_POST['DriverId'] ?? '',
        'CarsId' => $_POST['cars_id'] ?? '',
    ];

    $errorList = [];

    if (empty($data_array)) {
        $errorList[] = 'Champ vide';
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($errorList)) {
        $order_new = new Order();
        $order_new->setRent_start($data_array['start_date']);
        $order_new->setRend_end($data_array['end_date']);
        $order_new->setKm_start($data_array['km_start']);
        $order_new->setKm_end($data_array['km_end']);
        $order_new->setComments($data_array['comments']);

        if ($order_new->addNewOrder($data_array)) {
            header('Location: /order_to_come');
            exit();
        } else {
            $errorList[] = 'La sauvegarde a échoué';
            dump($errorList);
        }
    }

    /**
     * View+data
     */
    $this->show('order_new', ['cars_list' => $cars_list, 'drivers_list' => $drivers_list, 'errorList' => $errorList]);
    dump($data_array);
}

}