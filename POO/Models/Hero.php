<?php

class Hero extends Character {

    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    

    /**
     * Get the value of weapon
     */ 
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * Set the value of weapon
     *
     * @return  self
     */ 
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;

        return $this;
    }

    /**
     * Get the value of weaponDamage
     */ 
    public function getWeaponDamage()
    {
        return $this->weaponDamage;
    }

    /**
     * Set the value of weaponDamage
     *
     * @return  self
     */ 
    public function setWeaponDamage($weaponDamage)
    {
        $this->weaponDamage = $weaponDamage;

        return $this;
    }

    /**
     * Get the value of shield
     */ 
    public function getShield()
    {
        return $this->shield;
    }

    /**
     * Set the value of shield
     *
     * @return  self
     */ 
    public function setShield($shield)
    {
        $this->shield = $shield;

        return $this;
    }

    /**
     * Get the value of shieldValue
     */ 
    public function getShieldValue()
    {
        return $this->shieldValue;
    }

    /**
     * Set the value of shieldValue
     *
     * @return  self
     */ 
    public function setShieldValue($shieldValue)
    {
        $this->shieldValue = $shieldValue;

        return $this;
    }

    public function __construct($health, $rage, $shieldValue, $weaponDamage, $weaponName, $shieldName) {
        parent::__construct($health, $rage);
        $this->setWeapon($weaponName);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shieldName);
        $this->setShieldValue($shieldValue);
        echo "Je possède l'arme" . $this->getWeapon() . ", qui fait " . $this->getWeaponDamage() . " dégâts, j'ai une armure " . $this->getShield() . ", qui bloque " . $this->getShieldValue() . " de dégâts";
        echo "J'ai " . parent::getHealth() . " points de vie, je suis énervé à " . parent::getRage() . "%";
    }

    public function attacked($orcDamage) {
        $notProtectedDamage = $orcDamage - $this->getShieldValue();
        parent::setHealth(parent::getHealth() - $notProtectedDamage);
        $this->addRage();
    }

    public function addRage() {
        parent::setRage(parent::getRage() + 30);
    }
}