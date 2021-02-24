<?php

require "../Views/liste-patients.php";
require "../database/Database.php";
require "../Models/Patients.php";
require "../Models/Appointment.php";

$patient = new Patient();
$appointment = new Rendezvous();

$resultQueryShowPatients = $patient->displayPatients($_GET['id']);