<?php

//require "../Controller/indexController.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>Partie 2 - CRUD</title>
</head>
<body>
  
<h1 class="text-center mt-5">Accueil</h1>

<div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <a href="Views/ajout-patient.php"  class="btn btn-primary col-3 m-3">Enregistrer un patient</a>
            <a href="Views/liste-patients.php" class="btn btn-primary col-3 m-3">Liste des patients</a>
            <a href="Views/liste-rendezvous.php" class="btn btn-primary col-3 m-3">Liste RDV</a>

</div>
</div>

</body>
</html>