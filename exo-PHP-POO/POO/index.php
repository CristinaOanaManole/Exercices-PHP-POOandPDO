<?php
require 'Models/Character.php';
require 'Models/Hero.php';
require 'Models/Orc.php';

$hero = new Hero(2000, 0, 600, 250, "Excalibut", "Bouclier Hylien");
$orc = new Orc(500, 0);

while($hero->getHealth() > 0 && $orc->getHealth() > 0) {
    $orc->attack();
    $hero->attacked($orc->getDamage());
    if($hero->getRage() >= 100) {
        $orc->setHealth($orc->getHealth() - $hero->getWeaponDamage());
        echo "<p style=\"color:red;\">J'en ai marre</p>";
        $hero->setRage(0);
        echo $orc->getHealth();
    }

    if($hero->getHealth() <= 0) {
        echo "GAME OVER";
    } else {
        echo "Résultat : Le héros a maintenant : " . $hero->getHealth() . " points de vie
        il a également gagné 30 points de rage, il a maintenant : " . $hero->getRage() . " points de rage
        L'orc a infligé au total " . $orc->getDamage() . " points de dégâts
        heureusement, le bouclier a encaissé " . $hero->getShieldValue() . " points de dégâts.
        Au total, le héros aura encaissé " . ($orc->getDamage() - $hero->getShieldValue()) . " points de dégâts </br></br>";
    }
    if($orc->getHealth() <= 0) {
        echo "YOU WIN";
    }
}