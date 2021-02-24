<?php
require "../Models/Database.php";
require "../Models/Patients.php";

if(!empty($_POST)) {
    $regexName = "/^[a-zA-Zéèäë -]+$/";
    $regexPhone = "/^[0-9]{10}$/";
    $regexBirthdate = "/^[1-2][0-9]{3}[-][0-1][0-9][-]([0-2][0-9]|[3][0-1])$/";
    $arrayErrors = [];

    $lastname = isset($_POST["lastname"]) ? htmlspecialchars($_POST["lastname"]) : "";
    $firstname = isset($_POST["firstname"]) ? htmlspecialchars($_POST["firstname"]) : "";
    $birthdate = isset($_POST["birthdate"]) ? htmlspecialchars($_POST["birthdate"]) : "";
    $phone = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : "";
    $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";

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

    if(empty($arrayErrors)){

        $arrayParameters = [
            "lastname" => $verifiedLastname,
            "firstname" => $verifiedFirstname,
            "birthdate" => $verifiedBirthdate,
            "phone" => $verifiedPhone,
            "mail" => $verifiedEmail
        ];

        $Patients = new Patients();

        if($Patients->addPatient($arrayParameters)) {
            $message = "Le patient a bien été ajouté";
        } else {
            $message = "Il y a eu une erreur lors de l'ajout du patient";
        }
    }
}