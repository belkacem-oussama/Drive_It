<?php

namespace App\models;
use App\Utils\Database;

use PDO;

class Order{
    private $id;
    private $order_date;
    private $rent_start;
    private $rend_end;
    private $km_start;
    private $km_end;
    private $comments;
    private $status;
    private $DriverId;
    private $CarsId;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of order_date
     */ 
    public function getOrder_date()
    {
        return $this->order_date;
    }

    /**
     * Set the value of order_date
     *
     * @return  self
     */ 
    public function setOrder_date($order_date)
    {
        $this->order_date = $order_date;

        return $this;
    }

    /**
     * Get the value of rent_start
     */ 
    public function getRent_start()
    {
        return $this->rent_start;
    }

    /**
     * Set the value of rent_start
     *
     * @return  self
     */ 
    public function setRent_start($rent_start)
    {
        $this->rent_start = $rent_start;

        return $this;
    }

    /**
     * Get the value of rend_end
     */ 
    public function getRend_end()
    {
        return $this->rend_end;
    }

    /**
     * Set the value of rend_end
     *
     * @return  self
     */ 
    public function setRend_end($rend_end)
    {
        $this->rend_end = $rend_end;

        return $this;
    }

    /**
     * Get the value of km_start
     */ 
    public function getKm_start()
    {
        return $this->km_start;
    }

    /**
     * Set the value of km_start
     *
     * @return  self
     */ 
    public function setKm_start($km_start)
    {
        $this->km_start = $km_start;

        return $this;
    }

    /**
     * Get the value of km_end
     */ 
    public function getKm_end()
    {
        return $this->km_end;
    }

    /**
     * Set the value of km_end
     *
     * @return  self
     */ 
    public function setKm_end($km_end)
    {
        $this->km_end = $km_end;

        return $this;
    }

    /**
     * Get the value of comments
     */ 
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set the value of comments
     *
     * @return  self
     */ 
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    

    /**
     * Get the value of DriverId
     */ 
    public function getDriverId()
    {
        return $this->DriverId;
    }

    /**
     * Set the value of DriverId
     *
     * @return  self
     */ 
    public function setDriverId($DriverId)
    {
        $this->DriverId = $DriverId;

        return $this;
    }

    /**
     * Get the value of CarsId
     */ 
    public function getCarsId()
    {
        return $this->CarsId;
    }

    /**
     * Set the value of CarsId
     *
     * @return  self
     */ 
    public function setCarsId($CarsId)
    {
        $this->CarsId = $CarsId;

        return $this;
    }


    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**GET */

    public function findAll(){
        try{
            $pdo = Database::getPDO();
            $sql = 'SELECT * FROM `order`';
            $query = $pdo->prepare($sql);
            $query->execute();
            $orders = $query->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            echo 'Erreur : '.$e->getMessage();
        }

        return $orders;
    }

    public function findFinishedOrder(){
        try{
            $pdo = Database::getPDO();
            $sql =
            'SELECT `order_date` AS date, DATEDIFF(`rent_end`, `rent_start`) as location_duration_days, `km_end` - `km_start` AS location_duration, `status`, `comments`, `firstname`, `lastname`, `brand`,`model`
            FROM `order`
            JOIN `driver` ON `order`.`DriverId` = `driver`.`DriverId`
            JOIN `cars` ON `order`.`CarsId` = `cars`.`CarsId`
            WHERE `status` = 0;';
            $query = $pdo->prepare($sql);
            $query->execute();
            $orders_finished = $query->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            echo 'Erreur : '.$e->getMessage();
        }
        return $orders_finished;
    }

    public function findComingOrder(){
        try{
            $pdo = Database::getPDO();
            $sql =
            'SELECT `rent_start` AS dateStart, `rent_end` AS dateEnd, DATEDIFF(`rent_end`, `rent_start`) as location_duration_days, `status`, `comments`, `firstname`, `lastname`, `brand`,`model`,`km_start`
            FROM `order`
            JOIN `driver` ON `order`.`DriverId` = `driver`.`DriverId`
            JOIN `cars` ON `order`.`CarsId` = `cars`.`CarsId`
            WHERE `status` = 1;';
            $query = $pdo->prepare($sql);
            $query->execute();
            $orders_coming = $query->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            echo 'Erreur : '.$e->getMessage();
        }
        return $orders_coming;
    }

    public function findCurrentOrder(){
        try{
            $pdo = Database::getPDO();
            $sql =
            'SELECT `rent_start` AS dateStart, `rent_end` AS dateEnd, DATEDIFF(`rent_end`, `rent_start`) as location_duration_days, `status`, `comments`, `firstname`, `lastname`, `brand`,`model`,`km_start`
            FROM `order`
            JOIN `driver` ON `order`.`DriverId` = `driver`.`DriverId`
            JOIN `cars` ON `order`.`CarsId` = `cars`.`CarsId`
            WHERE `status` = 2;';
            $query = $pdo->prepare($sql);
            $query->execute();
            $orders_coming = $query->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            echo 'Erreur : '.$e->getMessage();
        }
        return $orders_coming;
    }

    /** POST */

    public function addNewOrder($orderData){
        try{
            $pdo = Databas::getPDO();
            $sql = "INSERT INTO orders (column1, column2, column3) VALUES (:value1, :value2, :value3)";
            $stmt = $pdo->prepare($sql);
            
            // Bind the parameter values
            $stmt->bindValue(':value1', $orderData['value1']);
            $stmt->bindValue(':value2', $orderData['value2']);
            $stmt->bindValue(':value3', $orderData['value3']);
            
            $stmt->execute();
            
            // Optionally, you can check the affected rows
            $rowCount = $stmt->rowCount();
            if ($rowCount > 0) {
                echo 'Order added successfully.';
            } else {
                echo 'Failed to add order.';
            }
            
        } catch(PDOException $e){
            echo 'Erreur : '.$e->getMessage();
        }
    }    
}