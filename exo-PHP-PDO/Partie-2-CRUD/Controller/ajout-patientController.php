<?php

require "Views/ajout-patient.php";

$patients = new Patients();

//On test si les $_POST sont bien en place via des ternaires, si ils y sont, alors le $_POST = la variable correspondant

isset($_POST['lastname']) ? $lastname = $_POST['lastname'] : "";
isset($_POST['firstname']) ? $firstname = $_POST['firstname'] : "";
isset($_POST['birthdate']) ? $birthdate = $_POST['birthdate'] : "";
isset($_POST['phone']) ? $phone = $_POST['phone'] : "";
isset($_POST['mail']) ? $mail = $_POST['mail'] : "";

//si les variables existent, alors on lance la requete

if (isset($lastname) && isset($firstname) && isset($birthdate) && isset($phone) && isset($mail)) {
if ($patient->addPatient($lastname, $firstname, $birthdate, $phone, $mail)){
    echo "<script>alert('le patient a bien été enregistré')</script>";
};

}