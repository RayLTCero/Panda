<?php

require_once 'models/User.php';

class UserController{


    public function register(){
        if(!Auth::isAuthenticated()){
            require_once 'views/user/register.php';
        }else{
            header('Location:'.MAIN_URL);
        }
    }

    public function signin(){
        if(!Auth::isAuthenticated()){
            require_once 'views/user/signin.php';
        }else{
            header('Location:'.MAIN_URL);
        }
    }

    public function logout(){
        Auth::logout();
        header('Location:'.MAIN_URL);
    }

    public function login(){
        if(isset($_POST)){
            $error = array();
            $email = isset($_POST["inputEmail"])  ? filter_var(trim($_POST["inputEmail"]), FILTER_SANITIZE_EMAIL) : false;
            $password = isset($_POST["inputPassword"])  ? filter_var(trim($_POST["inputPassword"]), FILTER_SANITIZE_STRING) : false;

            if(empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)) array_push($error, "Error: Empty or not Valid Email");
            if(empty($password)) array_push($error, "Error: Cant be Empty");

            if(empty($error)){
                $user = new User();
                $user->setEmail(strtolower($email));
                $response = $user->getUserByEmail();
                if($response && password_verify($password, $response['password'])){
                    Auth::setAuth($response);
                    $data = array(
                        "url" => MAIN_URL
                    );

                    echo json_encode($data);
                }else{
                    $message = array(
                        "Error" => "Invalid Credetials"
                    );

                    echo json_encode($message);
                }
            }else{
                echo json_encode($error);
            }
        }
    }

    
    public function save(){
        if(isset($_POST)){
            $error = array();
            $name = isset($_POST["inputName"]) ? filter_var(trim($_POST["inputName"]), FILTER_SANITIZE_STRING) : false;
            $surname = isset($_POST["inputSurname"]) ? filter_var(trim($_POST["inputSurname"]), FILTER_SANITIZE_STRING) : false;
            $birthdate = isset($_POST["inputBirthdate"]) ? $_POST["inputBirthdate"] : false;
            $gender = isset($_POST["radioGender"]) ? filter_var(trim($_POST["radioGender"]), FILTER_SANITIZE_STRING) : false;
            $email = isset($_POST["inputEmail"])  ? filter_var(trim($_POST["inputEmail"]), FILTER_SANITIZE_EMAIL) : false;
            $password = isset($_POST["inputPassword"])  ? filter_var(trim($_POST["inputPassword"]), FILTER_SANITIZE_STRING) : false;
            $passwordC = isset($_POST["inputPasswordC"])  ? filter_var(trim($_POST["inputPasswordC"]), FILTER_SANITIZE_STRING) : false;
            unset($_POST);
            
            if($password != $passwordC)  array_push($error["password"], "Error: Password Doesnt Match");
            if(empty($name) || is_numeric($name) || preg_match("/[0-9]/",$name)) array_push($error["name"], "Error: Empty or Not allowed values");
            if(empty($surname) || is_numeric($surname) || preg_match("/[0-9]/",$surname) ) array_push($error["surname"], "Error: Empty or Not allowed values");
            if(empty($birthdate)) array_push($error["birthdate"], "Error: Cant be Empty ");
            if(empty($gender)) array_push($error["gender"], "Error: Cant be Empty ");
            if(empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)) array_push($error["email"], "Error: Empty or not Valid E mail");
            if(empty($password)) array_push($error["password"], "Error: Cant be Empty");
            if(empty($passwordC)) array_push($error["password confirm"], "Error: Cant be Empty");
            
            if(empty($error)){
                $user = new User();
                $user->setName(strtolower($name));
                $user->setSurname(strtolower($surname));
                $user->setBirthdate(strtolower($birthdate));
                $user->setGender(strtolower($gender));
                $user->setEmail(strtolower($email));
                $user->setPassword($password);
                $response = $user->save();
                
                if($response){
                    $response = $user->getUserByEmail();
                    Auth::setAuth($response);
                    $data = array(
                        "url" => MAIN_URL
                    );
                    echo json_encode($data);
                }else{
                    $error = array(
                        "Error" => "Something Wrong...".$response
                    );
                    echo json_encode($error);
                }
            }else{
                echo json_encode($error);
            }
        }else{
            echo "perro";
            header('Location:'.MAIN_URL);
        }
    }

    public function verify_email(){
        if(isset($_POST["email"])){
            $email = isset($_POST["email"])  ? filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL) : false;
            if($email){
                $user = new User();
                $user->setEmail($email);
                $response = $user->matchEmail();
                
                if($response){
                    echo true;
                }else{
                    echo false;
                }
            }

        }else{
            echo "no seteada";
        }
    }
    
}


?>