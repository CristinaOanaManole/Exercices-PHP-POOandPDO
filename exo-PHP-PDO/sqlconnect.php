<?php
/*
$servername = 'localhost';
$username = 'root';
$password = '';
/* Connexion avec la base de donnée 
 $connexion = new PDO("mysql:host=$servername;dbname=sql_colyseum", $username, $password);*/
class Database {
    private $database;

    /**
     * Get the value of database
     */ 
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Set the value of database
     *
     * @return  self
     */ 
    public function setDatabase($database)
    {
        $this->database = $database;

        return $this;
    }
    public function __construct() {
$this->setDB(new PDO('mysql:dbname=sql_colyseum;host=localhost;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]));
    }
}



 ?>