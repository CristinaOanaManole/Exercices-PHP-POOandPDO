<?php

class AddPatient extends Database {
    
    private $id;
    private $lastName;
    private $firstName;
    private $birthDate;
    private $phone;
    private $mail;

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

    public function addPatient($lastname, $firstname, $birthdate, $phone, $mail) {
        $query = "INSERT INTO patients (lastname, firstname, birthdate, phone, mail) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)";
        $queryAddPatient = parent::getDb()->prepare($query);
        $queryAddPatient->bindValue("lastname", $lastname, PDO::PARAM_STR);
        $queryAddPatient->bindValue("firstname", $firstname, PDO::PARAM_STR);
        $queryAddPatient->bindValue("birthdate", $birthdate, PDO::PARAM_STR);
        $queryAddPatient->bindValue("phone", $phone, PDO::PARAM_STR);
        $queryAddPatient->bindValue("mail", $mail, PDO::PARAM_STR);


        if($queryAddPatient->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function displayPatients() {
        $query = "SELECT * FROM `patients`";
        $buildQuery = $this->getDb()->prepare($query);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }
    
}