<?php
require "../Controller/profil-patientController.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Profil patient</title>
</head>
<body>
    
<form action="profil-patient.php" method="post">

<p>Prénom : <?= $fiche['firstname'] ?> </p>
    <p>Nom : <?= $fiche['lastname'] ?> </p>
    <p>Date de naissance : <?= $fiche['birthdate'] ?> </p>
    <p>Numéro dé téléphone : <?= $fiche['phone'] ?> </p>
    <p>Adresse mail : <?= $fiche['mail'] ?> </p>


<a href="../index.php">Accueil</a>
<a href="../view/ajout-patient.php">Ajouter Patient</a>
<a href="../view/liste-patients.php">Liste patients</a>
            <input type="submit" name="Valider" value="Envoyer">
        </form>

<a href="../index.php">Retour à l'accueil</a>


</body>
</html>