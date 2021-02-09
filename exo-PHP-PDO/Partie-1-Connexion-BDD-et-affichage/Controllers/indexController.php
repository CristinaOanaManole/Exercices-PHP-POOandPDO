<?php
require "Models/Database.php";
require "Models/Clients.php";
require "Models/ShowTypes.php";
require "Models/Shows.php";

$Clients = new Clients();
$ShowTypes = new ShowTypes();
$Shows = new Shows();

$resultsClients = ($Clients->getAllClients()); //Exercice 1 : Afficher tous les clients.
$resultsQuery = ($ShowTypes->getAllShowsTypes());//Exercice 2 : Afficher tous les types de spectacles possibles.
$resultsFirst_20_clients = ($Clients->getFirst_20_clients());//Exercise 3 : Afficher les 20 premiers clients.
$resultsCardFidelity = ($Clients->getCardFidelity());//Exercice 4 : N'afficher que les clients possédant une carte de fidélité.
var_dump($Clients->getCardFidelity());
$resultsClientsM = ($Clients->getClientsM());//Exercice 5 : Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
$resultsgetShows = ($Shows->getShows());//Exercice 6 : Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : *Spectacle* par *artiste*, le *date* à *heure*.
