<?php
require "../Controllers/modification-patient-controller.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification du patient</title>
</head>
<body>
    <form action="modification-patient.php" method="post">
        <div>
            <label for="lastname">Nom de famille :</label>
            <input id="lastname" name="lastname" type="text" value="<?= isset($patientInformations["lastname"]) ? $patientInformations["lastname"] : "" ?>" required>
        </div>
        <div>
            <label for="firstname">Prénom :</label>
            <input id="firstname" name="firstname" type="text" value="<?= isset($patientInformations["firstname"]) ? $patientInformations["firstname"] : "" ?>" required>
        </div>
        <div>
            <label for="birthdate">Date de naissance :</label>
            <input id="birthdate" name="birthdate" type="date" value="<?= isset($patientInformations["birthdate"]) ? $patientInformations["birthdate"] : "" ?>" required>
        </div>
        <div>
            <label for="phone">Numéro de téléphone :</label>
            <input id="phone" name="phone" type="tel" value="<?= isset($patientInformations["phone"]) ? $patientInformations["phone"] : "" ?>" required>
        </div>
        <div>
            <label for="email">Adresse mail :</label>
            <input id="email" name="email" type="email" value="<?= isset($patientInformations["mail"]) ? $patientInformations["mail"] : "" ?>" required>
        </div>
        <button type="submit" name="submitModifPatient" value="<?= isset($verifiedId) ? $verifiedId : "" ?>">Valider la modification</button>
    </form>
</body>
</html>