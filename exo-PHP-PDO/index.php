<?php

require "Controllers/indexController.php";

foreach ($resultShowTypes as $key => $value) {
    ?>
<p><?= $value['type'] ?></p>
    <?php 
}
 ?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Partie 1 - PDO</title>
 </head>
 <body>

 <h1>Liste des clients</h1>
/** ## Exercice 1 - Afficher tous les clients.*/
 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Nom</th>
       <th>Prénom</th>
       <th>Date de naissance</th>
       <th>Card</th>
       <th>Numéro de card</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ALL)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['lastName']); ?></td>
       <td><?php echo htmlspecialchars($row['firstName']); ?></td>
       <td><?php echo htmlspecialchars($row['birthDate']); ?></td>
       <td><?php echo htmlspecialchars($row['card']); ?></td>
       <td><?php echo htmlspecialchars($row['cardNumber']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>

 /** ## Exercice 2 - Afficher tous les types de spectacles possibles.*/

 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Title</th>
       <th>Artiste</th>
       <th>Date</th>
       <th>Type de spectacle</th>
       <th>Le plus visioné</th>
       <th>Le second le plus visioné</th>
       <th>Durée</th>
       <th>Date du début</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $sqlS->fetch(PDO::FETCH_OBJ)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['title']); ?></td>
       <td><?php echo htmlspecialchars($row['performer']); ?></td>
       <td><?php echo htmlspecialchars($row['date']); ?></td>
       <td><?php echo htmlspecialchars($row['showTypeId']); ?></td>
       <td><?php echo htmlspecialchars($row['firstGenresId']); ?></td>
       <td><?php echo htmlspecialchars($row['secondGenresId']); ?></td>
       <td><?php echo htmlspecialchars($row['duration']); ?></td>
       <td><?php echo htmlspecialchars($row['startTime']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
     
/** ## Exercice 3 - Afficher les 20 premiers clients. */

 </body>
 </html>