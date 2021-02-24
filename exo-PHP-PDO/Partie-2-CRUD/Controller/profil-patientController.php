<?php
require "../database/Database.php";
require "../Models/Patients.php";
require "../Models/Appointments.php";

$patient = new Patients();
$appointment = new Appointements();

if(isset($_GET["idPatient"]) && !empty($_GET["idPatient"])) {
    $regexId = "/^[0-9]+$/";

    $id = htmlspecialchars($_GET["idPatient"]);
    if(preg_match($regexId, $id)) {
        $verifiedId = (int)$id;
        $patientInformations = $Patient->getOnePatientInformations($verifiedId);
    } else {
        $errorMessage = "Arrête de toucher à mon URL";
    }
}