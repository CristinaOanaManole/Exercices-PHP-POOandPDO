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


 /**
     * Méthode qui permet d'ajouter un patient en base de données
     * 
     * @param array
     * @return boolean
     */
    public function addPatient($arrayParameters) {
    $query = "INSERT INTO `patients` (`lastname`, `firstname`, `birthdate`, `phone`, `mail`)
              VALUES (:lastname, :firstname, :birthdate, :phone, :mail)";
    $buildQuery = parent::getDb()->prepare($query);
    $buildQuery->bindValue("lastname", $arrayParameters["lastname"], PDO::PARAM_STR);
    $buildQuery->bindValue("firstname", $arrayParameters["firstname"], PDO::PARAM_STR);
    $buildQuery->bindValue("birthdate", $arrayParameters["birthdate"], PDO::PARAM_STR);
    $buildQuery->bindValue("phone", $arrayParameters["phone"], PDO::PARAM_STR);
    $buildQuery->bindValue("mail", $arrayParameters["mail"], PDO::PARAM_STR);
    return $buildQuery->execute();
}

/**
     * Méthode qui permet de récupérer les informations de tous les patients
     * 
     * @return array|boolean
     */
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

/**
     * Méthode qui permet de récupérer les informations d'un patient en particulier
     * 
     * @param int
     * @return array|boolean
     */
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

       /**
     * Méthode permettant de récupérer tous les RDV de la base associés aux noms et prénoms des patients concernés
     * 
     * @return array|boolean
     */
    public function getAllAppointmentsWithLightPatientInformations() {
        $query = "SELECT `appointments`.`id`, `patients`.`lastname`, `patients`.`firstname`, `appointments`.`dateHour`
            FROM `patients`
            INNER JOIN `appointments`
            ON `patients`.`id` = `appointments`.`idPatients`;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    /**
     * Méthode permettant de récupérer toutes les informations d'un RDV en particulier (informations sur le RDV + informations sur le patient concerné)
     * 
     * @param int
     * @return array|boolean
     */
    public function getOneAppointmentWithPatientInformations(int $id) {
        $query = "SELECT `appointments`.`id` AS `appointmentId`, `appointments`.`dateHour`, `patients`.`id` AS `patientsId`, `patients`.`lastname`, `patients`.`firstname`, `patients`.`birthdate`, `patients`.`phone`, `patients`.`mail`
            FROM `patients`
            INNER JOIN `appointments`
            ON `patients`.`id` = `appointments`.`idPatients`
            WHERE `appointments`.`id` = :id;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("id", $id, PDO::PARAM_INT);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetch(PDO::FETCH_ASSOC);
        if(!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    /**
     * Méthode qui permet de supprimer à la fois un patient et ses RDV via son Id
     * 
     * @param int
     * @return boolean
     */
    public function deletePatientById(int $id) {
        $query = "DELETE FROM `patients` WHERE `id` = :id;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("id", $id, PDO::PARAM_INT);
        return $buildQuery->execute();
    }

    /**
     * Méthode qui permet de rechercher un patient sur son prénom ou son nom
     * 
     * @param string
     * @return array|boolean
     */
    public function searchPatient(string $search) {
        $query = "SELECT * FROM `patients` WHERE `lastname` LIKE :search1 OR `firstname` LIKE :search2 ORDER BY `lastname`;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("search1", $search, PDO::PARAM_STR);
        $buildQuery->bindValue("search2", $search, PDO::PARAM_STR);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    /**
     * Méthode qui permet de compter le nombre de patients en base de données
     * 
     * @return array|boolean
     */
    public function countPatients() {
        $query = "SELECT COUNT(*) AS `countPatients` FROM `patients`;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->execute();
        $countPatients = $buildQuery->fetch(PDO::FETCH_ASSOC);
        if(!empty($countPatients)) {
            return $countPatients;
        } else {
            return false;
        }
    }

    /**
     * Méthode qui permet de récupérer 10 patients en fonction d'une valeur de début
     * 
     * @param int
     * @return array|boolean
     */
    public function getPatientsPaginate(int $startValue) {
        $query = "SELECT * FROM `patients` LIMIT :startValue, 10;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("startValue", $startValue, PDO::PARAM_INT);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }
}