<?php

class Connection{

    private $driver;
    private $host;
    private $user;
    private $password;
    private $database;
    private $charset;

    public function __construct(){
        $dbConfig = require_once 'DbParamts.php';
        $this->driver = $dbConfig['driver'];
        $this->host = $dbConfig['host'];
        $this->user = $dbConfig['user'];
        $this->password = $dbConfig['password'];
        $this->database = $dbConfig['database'];
        $this->charset = $dbConfig['charset'];
    }

    public function conexion(){
        $conn = new PDO("$this->driver:host=$this->host;dbname=$this->database",$this->user,$this->password);
        $response = false;
        if($conn){
            $statement = $conn->prepare("SET NAMES $this->charset;");
            $statement->execute();
            $response = $conn;
        }
        return $response;
    }

    public function execute($sql){
        $conn = $this->conexion();
        $statement = $conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        $result = isset($result) ? $result : NULL;
        return $result;
    }
}

?>