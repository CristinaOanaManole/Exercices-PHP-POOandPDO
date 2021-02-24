<?php 
require "../Controller/liste-patientsController.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Liste patients</title>
</head>
<body>
    <div class="container">
    <h1>Liste de patients</h1>


    <div class="container">
        <table class="table">
            <th>Prénom</th>
            <th>Nom</th>
            <th>lien vers fiche</th>
            <th>Modifier</th>
            <?php
            foreach ($patientList as $key => $value) {
            ?>
                <tr>
                    <form action="../Views/ajout-patient.php" method="post">
                        <td><?= $value['firstname'] ?></td>
                        <td><?= $value['lastname'] ?></td>
                        <td><a href="<?= "../Views/profil-patient.php?id=" . htmlspecialchars($value['id']) ?>" class="btn btn-primary">Plus d'informations</a></td>
                        <td><button type="submit" name="id" value="<?= $value['id'] ?>" class="btn btn-primary">Modifier</button></td>
                    </form>
                </tr>
            <?php

            }
            ?>
        </table>

        <a href="../index.php" class="btn btn-primary">Accueil</a>
        <a href="../Views/ajout-patient.php" class="btn btn-primary">Ajouter un patient</a>
        <a href="../Views/liste-patients.php" class="btn btn-primary">Voir la liste des patients</a>
    </div>


 <?php
foreach ($resultQueryShowPatients as $value) {
    ?>
<p><a href="profil-patient.php?id=<?=$value["id"]?><?= $value["lastname"] . " " . $value["firstname"] . " " . $value["birthdate"] . " " . $value["phone"] . " " . $value["mail"] ?>"</a></p>
<?php
}
?>
    </div>

    <p>Trouvez un patient</p>

    <form method="post">
    	<label for="location">Recherche</label>
    	<input type="text" id="location" name="location">
    	<input type="submit" name="submit" value="Voir les résultats">
    </form>

    <a href="../index.php">Retour à l'accueil</a>

</body>
</html>