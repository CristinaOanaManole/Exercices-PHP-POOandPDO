<?php

class Character {
    // Attributs
    private $health;
    private $rage;

    // Méthodes permettant d'accéder aux attributs de la classe Character et permettant de les définir
    public function setHealth($healthValue) {
        $this->health = $healthValue;
        return $this;
    }

    public function getHealth() {
        return $this->health;
    }


    /**
     * Set the value of rage
     *
     * @return  self
     */ 
    public function setRage($rageValue)
    {
        $this->rage = $rageValue;

        return $this;
    }

    /**
     * Get the value of rage
     */ 
    public function getRage()
    {
        return $this->rage;
    }

    
    // Méthode magique construct permettant la création d'un nouveau personnage et doit donc définir les valeurs de health et de rage.
    public function __construct($health, $rage) {
        $this->setHealth($health);
        $this->setRage($rage);
    }
}