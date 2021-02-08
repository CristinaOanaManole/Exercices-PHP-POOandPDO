<?php

require "Models/Database.php";
$sql = "SELECT * FROM clients";

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
     <?php while($row = $sth->fetch(PDO::FETCH_OBJ)) : ?>
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

     
 </body>
 </html>