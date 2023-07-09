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
            $sql = 'SELECT * FROM `order_table`';
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
            'SELECT
            `order_date` AS date,
            julianday(`rent_end`) - julianday(`rent_start`) as location_duration_days,
            `km_end` - `km_start` AS location_duration,
            `status`,
            `comments`,
            `firstname`,
            `lastname`,
            `brand`,
            `model`
            FROM `order_table`
            JOIN `driver` ON `order_table`.`DriverId` = `driver`.`DriverId`
            JOIN `cars` ON `order_table`.`CarsId` = `cars`.`CarsId`
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
            'SELECT `rent_start` AS dateStart, `rent_end` AS dateEnd, julianday(`rent_end`) - julianday(`rent_start`) as location_duration_days, `status`, `comments`, `firstname`, `lastname`, `brand`,`model`,`km_start`
            FROM `order_table`
            JOIN `driver` ON `order_table`.`DriverId` = `driver`.`DriverId`
            JOIN `cars` ON `order_table`.`CarsId` = `cars`.`CarsId`
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
            'SELECT `rent_start` AS dateStart, `rent_end` AS dateEnd, julianday(`rent_end`) - julianday(`rent_start`) as location_duration_days, `status`, `comments`, `firstname`, `lastname`, `brand`,`model`,`km_start`
            FROM `order_table`
            JOIN `driver` ON `order_table`.`DriverId` = `driver`.`DriverId`
            JOIN `cars` ON `order_table`.`CarsId` = `cars`.`CarsId`
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

    public function addNewOrder($data_array)
{
    try {
        $pdo = Database::getPDO();
        $pdo->beginTransaction();

        $checkClientSql = "SELECT DriverId FROM driver WHERE firstname || ' ' || lastname = :name";
        $checkClientStmt = $pdo->prepare($checkClientSql);
        $checkClientStmt->bindValue(':name', $data_array['name']);
        $checkClientStmt->execute();

        $driverId = $checkClientStmt->fetchColumn();

        if (!$driverId) {
            $nameParts = explode(' ', $data_array['name']);
            $data_array['firstname'] = isset($nameParts[0]) ? $nameParts[0] : '';
            $data_array['lastname'] = isset($nameParts[1]) ? $nameParts[1] : '';
            $data_array['age'] = isset($data_array['age']) ? $data_array['age'] : '';
            $data_array['address'] = isset($data_array['address']) ? $data_array['address'] : '';
            $data_array['phone'] = isset($data_array['phone']) ? $data_array['phone'] : '';
            $data_array['mail'] = isset($data_array['mail']) ? $data_array['mail'] : '';
            $data_array['licence_number'] = isset($data_array['licence_number']) ? $data_array['licence_number'] : '';

            $createClientSql = "INSERT INTO driver (firstname, lastname, age, address, phone, mail, licence_number) 
                                VALUES (:firstname, :lastname, :age, :address, :phone, :mail, :licence_number)";

            $createClientStmt = $pdo->prepare($createClientSql);
            $createClientStmt->bindValue(':firstname', $data_array['firstname']);
            $createClientStmt->bindValue(':lastname', $data_array['lastname']);
            $createClientStmt->bindValue(':age', $data_array['age']);
            $createClientStmt->bindValue(':address', $data_array['address']);
            $createClientStmt->bindValue(':phone', $data_array['phone']);
            $createClientStmt->bindValue(':mail', $data_array['mail']);
            $createClientStmt->bindValue(':licence_number', $data_array['licence_number']);
            $createClientStmt->execute();

            $driverId = $pdo->lastInsertId();
        }

        $sql = "INSERT INTO `order_table` (rent_start, rent_end, km_start, km_end, comments, status, DriverId, CarsId) 
                VALUES (:rent_start, :rent_end, :km_start, :km_end, :comments, :status, :DriverId, :cars)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':rent_start', $data_array['start_date']);
        $stmt->bindValue(':rent_end', $data_array['end_date']);
        $stmt->bindValue(':km_start', $data_array['km_start']);
        $stmt->bindValue(':km_end', $data_array['km_end']);
        $stmt->bindValue(':comments', $data_array['comments']);
        $stmt->bindValue(':status', 1);
        $stmt->bindValue(':DriverId', $driverId);
        $stmt->bindValue(':cars', $data_array['cars']);

        $stmt->execute();

        $pdo->commit();
        return true;
    } catch (PDOException $e) {
        $pdo->rollBack();
        echo 'Erreur : ' . $e->getMessage();
        return false;
    }
}

}