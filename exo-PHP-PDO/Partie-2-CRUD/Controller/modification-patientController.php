<?php
session_start();
require "../Models/Database.php";
require "../Models/Patients.php";

$Patient = new Patients();

// Si on arrive sur la page modif patient avec un id provenant du profil patient en méthode POST,
// Alors on va vérifier cet id, le valider, et le stocker dans une variable qui nous servira à récupérer toutes les informations actuelles d'un patient
// Ce qui nous permettra de préremplir les champs du formulaire grâce aux données récupérées
if(isset($_POST["modifyPatientId"]) && !empty($_POST["modifyPatientId"])) {
    $regexId = "/^[0-9]+$/";

    $id = htmlspecialchars($_POST["modifyPatientId"]);
    if(preg_match($regexId, $id)) {
        $verifiedId = (int)$id;
        $patientInformations = $Patient->getOnePatientInformations($verifiedId);
    } else {
        $errorMessage = "Arrête de toucher à mes POST";
    }
}

// Si le POST de modification est présent alors on va effectuer la modification avec toutes les validations de champs, comme fait précédemment dans l'ajout de patient
if(isset($_POST["submitModifPatient"])) {
    $regexName = "/^[a-zA-Zéèäë -]+$/";
    $regexPhone = "/^[0-9]{10}$/";
    $regexBirthdate = "/^[1-2][0-9]{3}[-][0-1][0-9][-]([0-2][0-9]|[3][0-1])$/";
    $regexId = "/^[0-9]+$/";
    $arrayErrors = [];

    $lastname = isset($_POST["lastname"]) ? htmlspecialchars($_POST["lastname"]) : "";
    $firstname = isset($_POST["firstname"]) ? htmlspecialchars($_POST["firstname"]) : "";
    $birthdate = isset($_POST["birthdate"]) ? htmlspecialchars($_POST["birthdate"]) : "";
    $phone = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : "";
    $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
    $id = isset($_POST["submitModifPatient"]) ? htmlspecialchars($_POST["submitModifPatient"]) : "";

    if(preg_match($regexName, $lastname)){
        $verifiedLastname = $lastname;
    } else {
        $arrayErrors['lastname'] = "Veuillez renseigner une valeur correcte";
    }
    
    if(preg_match($regexName, $firstname)){
        $verifiedFirstname = $firstname;
    } else {
        $arrayErrors['firstname'] = "Veuillez renseigner une valeur correcte";
    }

    if(preg_match($regexBirthdate, $birthdate)){
        $verifiedBirthdate = $birthdate;
    } else {
        $arrayErrors['birthdate'] = "Veuillez renseigner une valeur correcte";
    }

    if(preg_match($regexPhone, $phone)){
        $verifiedPhone = $phone;
    } else {
        $arrayErrors['phone'] = "Veuillez renseigner une valeur correcte";
    }

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $verifiedEmail = $email;
    } else {
        $arrayErrors['email'] = "Veuillez renseigner une valeur correcte";
    }

    if(preg_match($regexId, $id)) {
        $verifiedId = (int)$id;
    } else {
        $errorMessage = "Arrête de toucher à mes POST";
    }

    if(empty($arrayErrors)){

        // On fera bien attention ici à rajouter l'id du patient concerné par la modification dans le tableau de paramètres à envoyer à la méthode de modification
        $arrayParameters = [
            "lastname" => $verifiedLastname,
            "firstname" => $verifiedFirstname,
            "birthdate" => $verifiedBirthdate,
            "phone" => $verifiedPhone,
            "mail" => $verifiedEmail,
            "id" => $verifiedId
        ];

        // Si la méthode de modification renvoie true, alors on stockera un message de succès en session et on redirigera sur la page profil patient avec l'id du patient en paramètre d'URL
        if($Patient->updatePatient($arrayParameters)) {
            $_SESSION["successMessage"] = "Le patient a bien été modifié";
            header("Location: profil-patient.php?idPatient=" . $verifiedId);
        } else {
            $message = "Il y a eu une erreur lors de la modification du patient";
        }
    }
}