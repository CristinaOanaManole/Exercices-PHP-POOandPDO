<?php

class Orc extends Character {
    private $damage;

    /**
     * Get the value of damage
     */ 
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set the value of damage
     *
     * @return  self
     */ 
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }

    public function __construct($health, $rage) {
        parent::__construct($health, $rage);
        echo "Je suis méchant, j'ai " . parent::getHealth() . " points de vie.";
    }

    public function attack() {
        $this->setDamage(rand(600, 800));
    }
}