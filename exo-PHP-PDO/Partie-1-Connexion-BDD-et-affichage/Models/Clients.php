<?php

class Clients extends Database {

    private $id;
    private $lastName;
    private $firstName;
    private $birthDate;
    private $card;
    private $cardNumber;

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
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of birthDate
     */ 
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     *
     * @return  self
     */ 
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get the value of card
     */ 
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set the value of card
     *
     * @return  self
     */ 
    public function setCard($card)
    {
        $this->card = $card;

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

    public function getAllClients() {
        $clients = "SELECT * FROM `clients`";
        $queryGetAllClients = parent::getDb()->prepare($clients);
        $queryGetAllClients->execute();
        $resultsClients = $queryGetAllClients->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($resultsClients)) {
            return $resultsClients;
        } else {
            return false;
        }
    }

public function getFirst_20_clients() {
    $client = "SELECT * FROM `clients` LIMIT 0, 20";
    $getFirst_20_clients = parent::getDb()->prepare($client);
        $getFirst_20_clients->execute();
        $resultsFirst_20_clients = $getFirst_20_clients->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($resultsFirst_20_clients)) {
            return $resultsFirst_20_clients;
        } else {
            return false;
        }
}

public function getCardFidelity() {
    $cardFidelity = "SELECT `clients`.`lastName`, `clients`.`firstName` 
    FROM `clients` 
    INNER JOIN `cards` 
    ON `clients`.`cardNumber` = `cards`.`cardNumber` 
    INNER JOIN `cardTypes` 
    ON `cards`.`cardTypesID` = `cardTypes`.`id` 
    WHERE `type` = 'Fidélité'";
    $getCardFidelity = parent::getDb()->prepare($cardFidelity);
        $getCardFidelity->execute();
        $resultsCardFidelity = $getCardFidelity->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($resultsCardFidelity)) {
            return $resultsCardFidelity;
        } else {
            return false;
        }
}

public function getClientsM() {
    $clientsM = "SELECT `clients`.`id`, `clients`.`lastName`, `clients`.`firstName`
    FROM clients 
    WHERE `lastName`
    LIKE 'M%' 
    ORDER BY `lastName`";
    $getClientsM = parent::getDb()->prepare($clientsM);
        $getClientsM->execute();
        $resultsClientsM = $getClientsM->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($resultsClientsM)) {
            return $resultsClientsM;
        } else {
            return false;
        }
}




}