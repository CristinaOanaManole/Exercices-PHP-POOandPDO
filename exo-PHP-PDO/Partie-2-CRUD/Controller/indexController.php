<?php
require "database/Database.php";
require "Views/Ajout-patient.php";
require "Views/Liste-patients.php";
require "Views/Liste-rendezvous.php";

$patients = new Patients();

$resultsPatient = ($Patient->getAllPatient()); //Exercice 2 : Créer une page liste-patients.php et y afficher la liste des patients. Inclure dans la page, un lien vers la création de patients.