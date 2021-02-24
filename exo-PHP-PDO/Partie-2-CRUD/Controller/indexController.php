<?php
require "../Models/Database.php";
require "../Views/ajout-patient.php";
require "../Views/liste-patients.php";
require "../Views/profil-patient.php";
require "../Views/liste-rendezvous.php";
require "../Models/Appointment.php";
require "../Models/Patients.php";

$patients = new Patients();

$resultsPatient = ($Patient->getAllPatient()); //Exercice 2 : Créer une page liste-patients.php et y afficher la liste des patients. Inclure dans la page, un lien vers la création de patients.