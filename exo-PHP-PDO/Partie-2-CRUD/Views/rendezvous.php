<?php
require "../Controller/appointmentController.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Rendez-vous</title>
</head>
<body>
    
    <h1>Votre rendez-vous</h1>

<?php
    $listeRendezvous = $rendezvous->getRendezvous($rendezvousId);
    foreach ($listeRendezvous as $key => $value) {
        echo "Date et heure du rendez-vous : " . $value["dateHour"] . "<br>";
        echo "Nom : " . $value["lastname"] . "<br>";
        echo "prénom : " . $value["firstname"] . "<br>";
        echo "Date de naissance : " . $value["birthdate"] . "<br>";
        echo "numéro de téléphone : " . $value["phone"] . "<br>";
        echo "mail : " . $value["mail"] . "<br><br>";
    
    }
    ?>

    <div><a href="modification-rendezvous.php?id=<?= $value['id'] ?>">Modifier le rendez-vous</a></div>
    <div><a href="suppression-rendezvous.php?id=<?= $value['id'] ?>">supprimer le rendez-vous</a></div>
    <div><a href="liste-rendezvous.php">Retour à la liste de rendez-vous</a></div>
    <div><a href="../index.php">Retour à l'accueil</a></div>



</body>
</html>