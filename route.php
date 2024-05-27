<?php
require_once "APP/controller/songsController.php";
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/'); // Define la URL base para construir rutas

if (empty($_GET['action'])) {
    $_GET['action'] = 'home'; // Si no se proporciona una acción en la URL, establece "home" como acción predeterminada
}

$action = $_GET['action']; // Obtiene la acción de la URL
$parametro = explode('/', $action); // Divide la acción en partes utilizando "/" como separador


switch($parametro[0]){
case 'home':
    $controller = new sonsgController();
    $controller->mostrarCanciones();
    break;

    default:
    echo "error";
    break;
}

?>