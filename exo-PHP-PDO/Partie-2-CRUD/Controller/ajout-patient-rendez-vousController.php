<?php
require "../Views/ajout-patient-rendez-vous.php";
require "../database/Database.php";
require "../Models/Patients.php";
require "../Models/Appointment.php";

$patient = new Patient();
$appointment = new Rendezvous();

$patientList = $patient->getPatients();

var_dump($_POST);

if(isset($_POST) && !empty($_POST) ){
    if(isset($_POST["dateHour"])){
        $dateHour = $_POST["dateHour"];
    }

    if(isset($_POST["idPatient"]) && !empty($_POST["idPatient"])){
        $idPatient = $_POST["idPatient"];
    }

    if(isset($dateHour) && !empty($dateHour) && isset($idPatient) && !empty($idPatient)){
        $appointment->createAppointment($dateHour , $idPatient);
    }

}



