<?php

session_start();


require '../Models/Character.php';
require '../Models/Hero.php';
require '../Models/Enemy.php';

if (isset($_GET["hero"])) {
    if ($_GET["hero"] == "Paladin") {
        $hero = new Hero("Paladin", rand(2000, 3000), 0, rand(800, 1500), rand(400, 600), "espadon", "armure de plaques");
        $_SESSION["hero"] = $hero;
    }
    if ($_GET["hero"] == "Mage") {
        $hero = new Hero("Mage", rand(1000, 1500), 0, rand(500, 700), rand(600, 800), "bâton des flammes froides", "robe noire");
        $_SESSION["hero"] = $hero;
    }
    if ($_GET["hero"] == "Assassin") {
        $hero = new Hero("Assassin", rand(800, 1300), 0, rand(300, 400), rand(600, 800), "dague empoisonée", "cape de voleur");
        $_SESSION["hero"] = $hero;
    }
    if ($_GET["hero"] == "Développeur") {
        $hero = new Hero("Développeur", rand(1500, 1800), 0, rand(300, 500), rand(400, 700), "ordinateur vieillissant", "armure de câbles RJ-45");
        $_SESSION["hero"] = $hero;
    }


    $arrayEnemy = ["Revenant","Uruk Haï","Coronuviras","Le Bug"];
    $randomEnemy = $arrayEnemy[rand(0,3)];

    if ($randomEnemy == "Revenant") {
        $enemy = new Enemy("Revenant", rand(1000, 1300), 0, 0, rand(200, 400), "amas de chair et d'os", null);
        $_SESSION["enemy"] = $enemy;
    }
    if ($randomEnemy == "Uruk Haï") {
        $enemy = new Enemy("Uruk Haï", rand(1500, 2000), 0, rand(700, 1000), rand(500, 800), "fléau", "armure de piques");
        $_SESSION["enemy"] = $enemy;
    }
    if ($randomEnemy == "Coronuviras") {
        $enemy = new Enemy("Coronuviras", rand(2000, 3000), 0, rand(500, 700), rand(700, 1000), "masse", "armure en peau de chauve-souris");
        $_SESSION["enemy"] = $enemy;
    }
    if ($randomEnemy == "Le Bug") {
        $enemy = new Enemy("Le Bug", rand(1, 9999), 0, rand(10, 600), rand(500, 800), "AiremeTiréAireÉfÉToile ", "armure d'erreurs système");
        $_SESSION["enemy"] = $enemy;
    }
}


// while($hero->getHealth() > 0 && $orc->getHealth() > 0) {
//     $orc->attack();
//     $hero->attacked($orc->getDamage());
//     if($hero->getRage() >= 100) {
//         $orc->setHealth($orc->getHealth() - $hero->getWeaponDamage());
//         $hero->setRage(0);
//         echo $orc->getHealth();
//     }

//     if($hero->getHealth() <= 0) {
//         echo "GAME OVER";
//     } else {
//         echo "Résultat : Le héros a maintenant : " . $_SESSION["hero"]->getHealth() . " points de vie
//         il a également gagné 30 points de rage, il a maintenant : " . $_SESSION["hero"]->getRage() . " points de rage
//         L'orc a infligé au total " . $orc->getDamage() . " points de dégâts
//         heureusement, le bouclier a encaissé " . $hero->getShieldValue() . " points de dégâts.
//         Au total, le héros aura encaissé " . ($orc->getDamage() - $hero->getShieldValue()) . " points de dégâts </br></br>";
//     }
//     if($orc->getHealth() <= 0) {
//         echo "YOU WIN";
//     }


?>