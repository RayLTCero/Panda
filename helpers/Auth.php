<?php

Class Auth{
    

    public static function setAuth($user){
        
        $_SESSION["user"] = $user;
    }
    public static function getAuthUser(){
        return $_SESSION["user"];
    }
    public static function isAuthenticated(){
        if(isset($_SESSION["user"]) && !empty($_SESSION["user"])){
            
            return true;
            

        }else{
            return false;
        }
    }

    public static function logout(){
        $_SESSION["user"] = null;
        unset($_SESSION["user"]);
        
        
    }
}


?>