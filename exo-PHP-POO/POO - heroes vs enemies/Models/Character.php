<?php

class Character {
    // Attributs
    private $health;
    private $rage;
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;
    private $role;

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

    /**
     * Get the value of weapon
     */ 
    public function getWeapon() {
        return $this->weapon;
    }

    /**
     * Set the value of weapon
     *
     * @return  self
     */ 
    public function setWeapon($weapon) {
        $this->weapon = $weapon;
        return $this;
    }

    /**
     * Get the value of weaponDamage
     */ 
    public function getWeaponDamage() {
        return $this->weaponDamage;
    }

    /**
     * Set the value of weaponDamage
     *
     * @return  self
     */ 
    public function setWeaponDamage($weaponDamage) {
        $this->weaponDamage = $weaponDamage;
        return $this;
    }

    /**
     * Get the value of shield
     */ 
    public function getShield() {
        return $this->shield;
    }

    /**
     * Set the value of shield
     *
     * @return  self
     */ 
    public function setShield($shield) {
        $this->shield = $shield;
        return $this;
    }

    /**
     * Get the value of shieldValue
     */ 
    public function getShieldValue() {
        return $this->shieldValue;
    }

    /**
     * Set the value of shieldValue
     *
     * @return  self
     */ 
    public function setShieldValue($shieldValue) {
        $this->shieldValue = $shieldValue;
        return $this;
    }


    /**
     * Get the value of role
     */ 
    public function getRole() {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role) {
        $this->role = $role;
        return $this;
    }


    public function increaseRage () {
        if ($this->getRole() == "Paladin") {
            $this->setRage($this->getRage() + 30);
        } else if ($this->getRole() == "Mage") {
            $this->setRage($this->getRage() + 20);
        } else if ($this->getRole() == "Assassin") {
            $this->setRage($this->getRage() + 20);
        } else if ($this->getRole() == "Développeur Web") {
            $this->setRage($this->getRage() + 40);
        } else if ($this->getRole() == "Revenant") {
            $this->setRage($this->getRage() + 20);
        } else if ($this->getRole() == "Uruk Haï") {
            $this->setRage($this->getRage() + 20);
        } else if ($this->getRole() == "Coronuviras") {
            $this->setRage($this->getRage() + 20);
        } else {
            $this->setRage($this->getRage() + 5);
        } 
    }

    // Méthode magique construct permettant la création d'un nouveau personnage et doit donc définir les valeurs de health et de rage.
    public function __construct($role, $health, $rage, $shieldValue, $weaponDamage, $weaponName, $shieldName) {
        $this->setHealth($health);
        $this->setRage($rage);
        $this->setWeapon($weaponName);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shieldName);
        $this->setShieldValue($shieldValue);
        $this->setRole($role);
    }
}