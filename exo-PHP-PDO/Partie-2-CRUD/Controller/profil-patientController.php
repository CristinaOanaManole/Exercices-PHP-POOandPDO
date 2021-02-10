<?php
require "../database/Database.php";
require "../Models/Patient.php";
require "../Models/Appointments.php";

$patient = new Patients();
$appointment = new Appointements();

isset($_GET['id']) ? $patientId = $_GET['id'] : "";

$patientsList = $patient->getOnePatients($patientId);
    var_dump($patientsList);


        echo "Nom : " . $patientsList["lastname"] . "<br>";
        echo "prénom : " . $patientsList["firstname"] . "<br>";
        echo "Date de naissance : " . $patientsList["birthdate"] . "<br>";
        echo "numéro de téléphone : " . $patientsList["phone"] . "<br>";
        echo "mail : " . $patientsList["mail"] . "<br><br>";

