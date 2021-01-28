<?php
require 'Models/Character.php';
## Exercice 4
# Dans un nouveau fichier **Hero.php**, créer la classe **Hero héritant de Character** et ayant pour attributs **weapon**, **weaponDamage**, **shield** et **shieldValue**.  
# * L'attribut **weapon** permettra de définir le nom de l'arme équipée,  
#* **weaponDamage** indiquera les dégâts basiques de l'arme,  
#* **shield** définira le nom du bouclier équipée,
#* **shieldValue** idiquera la nombre de dégâts que le bouclier encaisse à la place du héros.  

#Les attributs ne doivent être accessibles **pour personne !**


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
}