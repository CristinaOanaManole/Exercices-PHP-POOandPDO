<?php
require "../Models/Database.php";
require "../Models/Appointment.php";


$appointment = new Appointment();

//On test si les $_POST sont bien en place via des ternaires, si ils y sont, alors le $_POST = la variable correspondant

isset($_POST['dateHour']) ? $dateHour = $_POST['dateHour'] : "";
isset($_POST['idPatients']) ? $idPatients = $_POST['idPatients'] : "";

//si les variables existent, alors on lance la requete

if (isset($dateHour) && isset($idPatients)) {
if ($appointment->addAppointment($dateHour, $idPatients)){
    echo "<script>alert('le rendez-vous a bien été enregistré')</script>";
};


}