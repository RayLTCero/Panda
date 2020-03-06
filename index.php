<?php
session_start();
require_once 'configuration/Connection.php';
require_once 'configuration/Global.php';
require_once 'helpers/ControladorFrontal.php';
require_once 'helpers/Auth.php';
require_once 'helpers/helpers.php';
if (isset($_GET['controller'])) {
    # code...
    $controller = loadController($_GET['controller']);
}else{
    $controller = loadController(DEFAULT_CONTROLLER);
}
shootAction($controller);


?>