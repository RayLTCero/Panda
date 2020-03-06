<?php

class User{

    private $id;
    private $name;
    private $surname;
    private $birthdate;
    private $gender;
    private $email;
    private $password;
    private $image;
    private $creationDate;
    private $updatedDate;
    private $conn;

    public function __construct(){
        $this->conn = new Connection();
        $this->creationDate = date('Y-m-d H:i:s');
        
    }

    /**SETTERS */
    public function setId($id){
        $this->id = $id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setSurname($surname){
        $this->surname = $surname;
    }

    public function setBirthdate($birthdate){
        $this->birthdate = $birthdate;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setImage($image){
        $this->image = $image;
    }

    
    /**GETTERS */
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getBirthdate(){
        return $this->birthdate;
    }
    public function getGender(){
        return $this->gender;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        $op = ['cost' => 4];
        
        return password_hash($this->password, PASSWORD_BCRYPT, $op);
    }
    public function getImage(){
        return $this->image;
    }
    public function getCreationDate(){
        return $this->creationDate;
    }
    /**Metohds */

    public function getUser(){
        $sql = "SELECT * FROM users WHERE id = $this->id;";
        $db = $this->conn->conexion();
        $statement = $db->prepare($sql);
        $statement->execute();
        $result = $statement->fetch();
        if(empty($result)){
            $result = false;
        }
        return $result;
    }

    public function getUserByEmail(){
        $sql = "SELECT * FROM users WHERE email = '$this->email';";
        $db = $this->conn->conexion();
        $statement = $db->prepare($sql);
        $statement->execute();
        $result = $statement->fetch();
        
       
        return $result;
    }

    public function matchEmail(){
        $sql = "SELECT 'email' FROM users WHERE email = '{$this->getEmail()}';";
        $db = $this->conn->conexion();
        $statement = $db->prepare($sql);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
    }

    public function save(){
        
        $sql= "INSERT INTO users (name, surname, birthdate, gender, email, password, creation_date) VALUES('{$this->getName()}', '{$this->getSurname()}', '{$this->getBirthdate()}','{$this->getGender()}', '{$this->getEmail()}', '{$this->getPassword()}', '{$this->getCreationDate()}');";
        $db = $this->conn->conexion();
        $statement = $db->prepare($sql);
        $result = $statement->execute();
        
        return $result;
    }
}

?>