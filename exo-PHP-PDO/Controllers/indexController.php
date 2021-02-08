<?php
require "Models/Database.php";
require "Models/Users.php";
require "Models/ShowTypes.php";

$Users = new Users();
$showTypes = new ShowTypes();

$resultShowTypes = $showTypes->getAllShowTypes();