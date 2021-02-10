<?php

class Appointment extends Database {
    
    private $id;
    private $dateHour;
    private $idPatients;

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
     * Get the value of dateHour
     */ 
    public function getDateHour()
    {
        return $this->dateHour;
    }

    /**
     * Set the value of dateHour
     *
     * @return  self
     */ 
    public function setDateHour($dateHour)
    {
        $this->dateHour = $dateHour;

        return $this;
    }

    /**
     * Get the value of idPatients
     */ 
    public function getIdPatients()
    {
        return $this->idPatients;
    }

    /**
     * Set the value of idPatients
     *
     * @return  self
     */ 
    public function setIdPatients($idPatients)
    {
        $this->idPatients = $idPatients;

        return $this;
    }


    public function addAppointment($dateHour, $idPatients) {
        $query = "INSERT INTO appointments (dateHour, idPatients) VALUES (:dateHour, :idPatients)";
        $queryAddAppointment = parent::getDb()->prepare($query);
        $queryAddAppointment->bindValue("dateHour", $dateHour, PDO::PARAM_STR);
        $queryAddAppointment->bindValue("idPatients", $idPatients, PDO::PARAM_STR);

        if($queryAddAppointment->execute()) {
            return true;
        } else {
            return false;
        }
    }

}

