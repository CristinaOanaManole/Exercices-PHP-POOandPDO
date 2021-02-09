<?php

class Cards extends Database {

    private $id;
    private $cardNumber;
    private $cardTypesId;

    public function __construct() {
        parent::__construct();
    }

    

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
     * Get the value of cardNumber
     */ 
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */ 
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get the value of cardTypesId
     */ 
    public function getCardTypesId()
    {
        return $this->cardTypesId;
    }

    /**
     * Set the value of cardTypesId
     *
     * @return  self
     */ 
    public function setCardTypesId($cardTypesId)
    {
        $this->cardTypesId = $cardTypesId;

        return $this;
    }


}