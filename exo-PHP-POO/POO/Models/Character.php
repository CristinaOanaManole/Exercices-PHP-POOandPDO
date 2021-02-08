<?php

class Character {

    private $health;
    private $rage;

    public function setHealth($healthValue) {
        $this->health = $healthValue;
        return $this->health;
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

    public function __construct($health, $rage) {
        $this->setHealth($health);
        $this->setRage($rage);
    }


}