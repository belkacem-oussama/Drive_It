<?php

namespace App\models;
use App\Utils\Database;

use PDO;

class Dealer{
    private $id;
    private $brand;
    private $contact_name;
    private $address;
    private $phone;
    private $mail;

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
     * Get the value of contact_name
     */ 
    public function getContact_name()
    {
        return $this->contact_name;
    }

    /**
     * Set the value of contact_name
     *
     * @return  self
     */ 
    public function setContact_name($contact_name)
    {
        $this->contact_name = $contact_name;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    public function findDealers(){
            try{
                $pdo = Database::getPDO();
                $sql = 'SELECT * FROM `dealer`';
                $query = $pdo->prepare($sql);
                $query->execute();
                $dealers = $query->fetchAll(PDO::FETCH_OBJ);
            }catch(PDOException $e){
                echo 'Erreur : '.$e->getMessage();
            }
    
            return $dealers;
        } 
    }