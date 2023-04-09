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
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
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
}