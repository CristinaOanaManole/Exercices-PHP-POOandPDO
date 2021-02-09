<?php

require "Controllers/indexController.php";

//Exercice 2 : Afficher tous les types de spectacles possibles.
foreach ($ShowTypes as $key => $value) {
    ?>
<p><?= $value['type'] ?></p>
    <?php 
}
?>

<?php
//Exercise 3 : Afficher les 20 premiers clients.
foreach($resultsFirst_20_clients as $key => $value) {
  ?>
<p><?= $value['lastName'] . "" . $value['firstName'] ?></p>
<?php
}
?>

<?php
//Exercice 4 : N'afficher que les clients possédant une carte de fidélité.
foreach ($resultsCardFidelity as $key => $value) {
    ?>
    <p><?= $value["lastName"] . " " . $value["firstName"] ?></p>
    <?php
}
?>

<?php 
//Exercice 5 : Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
//Les afficher comme ceci : **Nom :** *Nom du client* **Prénom :** *Prénom du client*  Trier les noms par ordre alphabétique.
foreach ($resultsClientsM as $key => $value) {
  ?>
  <p><?= $value["lastName"] . " " . $value["firstName"] ?></p>
  <?php
}
?>

<?php 
//Exercice 6 : Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : *Spectacle* par *artiste*, le *date* à *heure*.
foreach ($resultsgetShows as $key => $value) {
  ?>
  <p><?= $value["title"] . " " . $value["performer"] . " " . $value["date"] . " " . $value["startTime"] ?></p>
  <?php
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDO exercice 7</title>
</head>
<body>
  

<?php
//Exercice 7 : Afficher tous les clients comme ceci : **Nom :** *Nom de famille du client*
//**Prénom :** *Prénom du client* **Date de naissance :** *Date de naissance du client*
//**Carte de fidélité :** *Oui (Si le client en possède une) ou Non (s'il n'en possède pas)*
//**Numéro de carte :** *Numéro de la carte fidélité du client s'il en possède une.*

foreach ($resultsClients as $key => $value) { 
?>
<table>
<tr>
<th>Nom : <?= $value["lastName"] ?></th>
</tr>
&nbsp;
<tr>
<th>Prénom : <?= $value["firstName"]?></th>
</tr>
<tr>
<th>Date de naissance : <?= $value['birthDate'] ?></th>
</tr>
<tr>
<th>Carte de fidélité : <?= $value['card'] == 1 ? 'Oui' : 'Non'?></th>
</tr>
<tr>
<th>Numéro de carte : <?= $value['cardNumber'] == !null ? 'Numéro de carte : ' . $value['cardNumber'] : '' ?></th>
</tr>
<?php
}
?>

</body>
</html>