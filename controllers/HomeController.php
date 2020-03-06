<?php

class HomeController{
    public function index(){
        
        if(Auth::isAuthenticated()){
            require_once 'views/home/home.php';
        }else{
            require_once 'views/home/landing.php';
        }
    }
}

?>