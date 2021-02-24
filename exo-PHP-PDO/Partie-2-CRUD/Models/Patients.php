<?php

class Patients extends Database {

private $id;
private $lastname;
private $firstname;
private $mail;
private $phone;
private $birthdate;


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
 * Get the value of lastname
 */ 
public function getLastname()
{
    return $this->lastname;
}

/**
 * Set the value of lastname
 *
 * @return  self
 */ 
public function setLastname($lastname)
{
    $this->lastname = $lastname;

    return $this;
}

/**
 * Get the value of firstname
 */ 
public function getFirstname()
{
    return $this->firstname;
}

/**
 * Set the value of firstname
 *
 * @return  self
 */ 
public function setFirstname($firstname)
{
    $this->firstname = $firstname;

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
 * Get the value of birthdate
 */ 
public function getBirthdate()
{
    return $this->birthdate;
}

/**
 * Set the value of birthdate
 *
 * @return  self
 */ 
public function setBirthdate($birthdate)
{
    $this->birthdate = $birthdate;

    return $this;
}

public function __construct() {
    parent::__construct();
}

public function addPatient($arrayParameters) {
    $query = "INSERT INTO `patients` (`lastname`, `firstname`, `birthdate`, `phone`, `mail`) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)";
    $buildQuery = parent::getDb()->prepare($query);
    $buildQuery->bindValue("lastname", $arrayParameters["lastname"], PDO::PARAM_STR);
    $buildQuery->bindValue("firstname", $arrayParameters["firstname"], PDO::PARAM_STR);
    $buildQuery->bindValue("birthdate", $arrayParameters["birthdate"], PDO::PARAM_STR);
    $buildQuery->bindValue("phone", $arrayParameters["phone"], PDO::PARAM_STR);
    $buildQuery->bindValue("mail", $arrayParameters["mail"], PDO::PARAM_STR);
    return $buildQuery->execute();
}

    public function displayPatients() {
        $query = "SELECT * FROM `patients`";
        $buildQuery = $this->getDb()->prepare($query);
        $buildQuery->execute();
        $resultQueryShowPatients = $buildQuery->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultQueryShowPatients)) {
            return $resultQueryShowPatients;
        } else {
            return false;
        }
    }

    public function getOnePatients($patientId) {
        $query = "SELECT * FROM Patients WHERE id = :patientId";
        $queryGetOnePatients = parent::getDb()->prepare($query);
        $queryGetOnePatients->bindValue("patientId", $patientId, PDO::PARAM_INT);
        $queryGetOnePatients->execute();
        $resultsQuery = $queryGetOnePatients->fetch();
        if(!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }

   /**
     * Méthode qui permet de modifier un patient existant
     * 
     * @param array
     * @return boolean
     */
    public function updatePatient($arrayParameters) {
        $query = "UPDATE `patients` SET `lastname` = :lastname, `firstname` = :firstname, `birthdate` = :birthdate, `phone` = :phone, `mail` = :mail WHERE `id` = :id;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("lastname", $arrayParameters["lastname"], PDO::PARAM_STR);
        $buildQuery->bindValue("firstname", $arrayParameters["firstname"], PDO::PARAM_STR);
        $buildQuery->bindValue("birthdate", $arrayParameters["birthdate"], PDO::PARAM_STR);
        $buildQuery->bindValue("phone", $arrayParameters["phone"], PDO::PARAM_STR);
        $buildQuery->bindValue("mail", $arrayParameters["mail"], PDO::PARAM_STR);
        $buildQuery->bindValue("id", $arrayParameters["id"], PDO::PARAM_INT);
        return $buildQuery->execute();
    }

    public function getPatients()
    {
        $query = "SELECT * FROM `patients`";
        $getPatients = parent::getDb()->prepare($query);
        $getPatients->execute();
        $resultQuery = $getPatients->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    public function deletePatient($id){
        $query = "DELETE FROM `patients` WHERE `id` = :id";
        $deletePatient = parent::getDb()->prepare($query);
        $deletePatient->bindValue("id" , $id , PDO::PARAM_STR); 
        return $deletePatient->execute();
    }
}
 