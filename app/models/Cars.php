<?php

namespace App\models;
use App\Utils\database;

use PDO;

class Cars{
    private $id;
    private $registration;
    private $brand;
    private $model;
    private $year;
    private $caution;
    private $price;
    private $availability;
    

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
     * Get the value of registration
     */ 
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * Set the value of registration
     *
     * @return  self
     */ 
    public function setRegistration($registration)
    {
        $this->registration = $registration;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of model
     */ 
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of year
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of caution
     */ 
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Set the value of caution
     *
     * @return  self
     */ 
    public function setCaution($caution)
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of availability
     */ 
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set the value of availability
     *
     * @return  self
     */ 
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    public function findAll(){
        try{
            $pdo = Database::getPDO();
            $sql = 'SELECT * from `cars`';
            $query =  $pdo->prepare($sql);
            $query->execute();
            $cars = $query->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            echo 'Erreur : '.$e->getMessage();
        }

        return $cars;
    }
}