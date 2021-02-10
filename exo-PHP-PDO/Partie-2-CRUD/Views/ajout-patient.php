<?php
//require "Controller/ajout-patientController.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un patient</title>
</head>
<body>
    
<form action="ajout-patient.php" method="post">
<div>
<label for="lastname">Votre nom : </label>
 <input type="text" name="lastname" id="lastname">
 </div>

              <div>
            <label for="firstname">Votre prénom : </label>
            <input type="text" name="firstname" id="firstname">
        </div>

<div>
            <label for="birthdate">Date de naissance : </label>
            <input type="number" name="birthdate" id="birthdate">
</div>
<div>
            <label for="phone">Numéro de téléphone : </label>
            <input type="tel" name="phone" id="phone">
</div>
<div>
            <label for="mail">Adresse mail : </label>
            <input type="mail" name="mail" id="mail">
            </div>
                
            <input type="submit" name="Valider" value="Envoyer">
        </form>

<a href="../index.php">Retour à l'accueil</a>

</body>
</html>