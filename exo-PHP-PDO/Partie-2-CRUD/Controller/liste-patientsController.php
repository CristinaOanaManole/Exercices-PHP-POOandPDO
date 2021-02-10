<?php

require "../database/Database.php";
require "../Models/Patients.php";


$patient = new Patient();
$resultQueryShowPatients = $patient->displayPatients();