<?php 
require "Controller/liste-patientsController.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste patients</title>
</head>
<body>
    <div class="container">
    <h1>Liste de patients</h1>
    <?php
foreach ($resultQueryShowPatients as $value) {
    ?>
<p><a href="profil-patient.php?id=<?=$value["id"]?><?= $value["lastname"] . " " . $value["firstname"] . " " . $value["birthdate"] . " " . $value["phone"] . " " . $value["mail"] ?>"</a></p>
<?php
}
?>
    </div>
</body>
</html>