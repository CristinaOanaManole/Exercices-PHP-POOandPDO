<?php

class Hero extends Character {

    public function __construct($role, $health, $rage, $shieldValue, $weaponDamage, $weaponName, $shieldName) {
        parent::__construct($role, $health, $rage, $shieldValue, $weaponDamage, $weaponName, $shieldName);
    }

    // le personnage perd 100pts de vie à chaque atk 
    // public function attacked($orcDamage) {
    //     $notProtectedDamage = $orcDamage - $this->getShieldValue();
    //     parent::setHealth(parent::getHealth() - $notProtectedDamage);
    //     $this->increaseRage();
    // }

    
}