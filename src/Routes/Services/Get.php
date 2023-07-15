<?php

namespace Services;

use Controllers\Usuarios\ListarController;
require_once "./src/Controllers/Usuarios/ListarController.php";

global $json;

$controllerName = $routes[2];
$actionName = $routes[3];

$classController = "Controllers" . "\\" . ucfirst($controllerName) . "\\" . ucfirst($actionName) . "Controller";

if (class_exists($classController)) {
    $controller = new $classController();
    $result = $controller::execute();

    $json = array(
        'status' => 200,
        'httpMethod' => 'GET',
        'result' => $result
    );
} else {
    $json = array(
        'status' => 404,
        'httpMethod' => 'GET',
        'result' => 'Route Not Found'
    );
}

echo json_encode($json, http_response_code($json["status"]));