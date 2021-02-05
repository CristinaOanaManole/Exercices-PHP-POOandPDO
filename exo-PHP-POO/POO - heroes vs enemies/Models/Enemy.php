<?php

class Enemy extends Character {

    // Attributs
    private $damage;

    
    /**
     * Set the value of damage
     *
     * @return  self
     */ 
    public function setDamage($damage) {
        $this->damage = $damage;
        return $this;
    }

    /**
     * Get the value of damage
     */ 
    public function getDamage() {
        return $this->damage;
    }


    public function __construct($role, $health, $rage, $shieldValue, $weaponDamage, $weaponName, $shieldName) {
        parent::__construct($role, $health, $rage, $shieldValue, $weaponDamage, $weaponName, $shieldName);
    }

    // public function attack() {
    //     $this->setDamage(rand(600, 800));
    // }
}