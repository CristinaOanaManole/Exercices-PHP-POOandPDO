<?php
require "../Controller/ajout-patientController.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de patient</title>
</head>
<body>
    <div>
        <p><?= isset($message) ? $message : "" ?></p>
    </div>
    <form action="ajout-patient.php" method="post">
        <div>
            <label for="lastname">Nom de famille :</label>
            <input id="lastname" name="lastname" type="text" required>
        </div>
        <div>
            <label for="firstname">Prénom :</label>
            <input id="firstname" name="firstname" type="text" required>
        </div>
        <div>
            <label for="birthdate">Date de naissance :</label>
            <input id="birthdate" name="birthdate" type="date" required>
        </div>
        <div>
            <label for="phone">Numéro de téléphone :</label>
            <input id="phone" name="phone" type="tel" required>
        </div>
        <div>
            <label for="email">Adresse mail :</label>
            <input id="email" name="email" type="email" required>
        </div>
        <button name="submitAddPatient" type="submit">Ajouter le patient</button>
    </form>

    <div class="mt-5">
    <button name="submit" type="submit"><a href="../index.php">Retour à l'accueil</a></button>
    </div>

</body>
</html>