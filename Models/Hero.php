<?php
require 'Models/Character.php';
## Exercice 4
# Dans un nouveau fichier **Hero.php**, créer la classe **Hero héritant de Character** et ayant pour attributs **weapon**, **weaponDamage**, **shield** et **shieldValue**.  
# * L'attribut **weapon** permettra de définir le nom de l'arme équipée,  
#* **weaponDamage** indiquera les dégâts basiques de l'arme,  
#* **shield** définira le nom du bouclier équipée,
#* **shieldValue** idiquera la nombre de dégâts que le bouclier encaisse à la place du héros.  

#Les attributs ne doivent être accessibles **pour personne !**

class Hero {
private $weapon;
private $weaponDamage;
private $shield;
private $shieldValue;
}