<?php

require "../Controllers/menu_controller.php";

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center mt-5">Warcraft 4</h1>
    <div class="container mt-5">
        <div class="row justify-content-center align-self-center">
                <div class="col-6">
                    <div class="card h-100">
                        <div class="card-body h-100">
                            <h1 class="card-title text-center h4"><?= isset($_SESSION["hero"]) ? $_SESSION["hero"]->getRole() : "" ?></h1>
                            <p>Points de vie : <?= $_SESSION["hero"]->getHealth() ?><p>
                            <p>Arme : <?= $_SESSION["hero"]->getWeapon() ?><p>
                            <p>Dégâts de l'arme: <?= $_SESSION["hero"]->getWeaponDamage() ?><p>
                            <p>Armure : <?= $_SESSION["hero"]->getShield() ?><p>
                            <p>Dégâts absorbés par l'armure : <?= $_SESSION["hero"]->getShieldValue() ?><p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card h-100">
                        <div class="card-body h-100">
                            <h1 class="card-title text-center h4"><?= $_SESSION["enemy"]->getRole()?></h1>
                            <p>Points de vie : <?= $_SESSION["enemy"]->getHealth() ?><p>
                            <p>Arme : <?= $_SESSION["enemy"]->getWeapon() ?><p>
                            <p>Dégâts de l'arme: <?= $_SESSION["enemy"]->getWeaponDamage() ?><p>
                            <p>Armure : <?= $_SESSION["enemy"]->getShield() ?><p>
                            <p>Dégâts absorbés par l'armure : <?= $_SESSION["enemy"]->getShieldValue() ?><p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row justify-content-center align-self-center">
            <button class="btn btn-primary mt-5" name="mage">FIGHT !</button>
        </div>
    </div>
</body>

</html>