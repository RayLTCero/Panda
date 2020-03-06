<?php

function loadController($controller){
    $controller = ucwords($controller)."Controller";
    $fileController = 'controllers/'.$controller.'.php';
    require_once($fileController);
    $objController = new $controller();
    return $objController;
}

function loadAction($controller, $action){
    $controller->$action();
}

function shootAction($controller){
    if(isset($_GET['action']) && method_exists($controller,$_GET['action'])){
        loadAction($controller, $_GET['action']);
    }
     else{
         loadAction($controller, DEFAULT_ACTION);
     }
}

?>