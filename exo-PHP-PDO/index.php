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

