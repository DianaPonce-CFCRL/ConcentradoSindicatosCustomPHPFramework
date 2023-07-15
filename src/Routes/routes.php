<?php

$routes = explode("/", $_SERVER["REQUEST_URI"]);
$routes = array_filter($routes);

const GET = "GET";
const POST = "POST";
const PUT = "PUT";
const PATCH = "PATCH";
const DELETE = "DELETE";

if (empty($routes)) {
    $json = array(
        'status' => 404,
        'result' => 'Not Found'
    );

    echo json_encode($json, http_response_code($json["status"]));
    return;
}

$http_request = $_SERVER["REQUEST_METHOD"];

/* Ingresa a la api */
if (in_array("api", $routes) && isset($http_request)) {
    if ($http_request == GET)
        include "./src/Routes/Services/Get.php";

    if ($http_request == POST)
        include "./src/Routes/Services/Post.php";

    if ($http_request == PUT)
        include "./src/Routes/Services/Put.php";

    if ($http_request == PATCH)
        include "./src/Routes/Services/Patch.php";

    if ($http_request == DELETE)
        include "./src/Routes/Services/Delete.php";
}

/* Ingresa a las Views */
if (!in_array("api", $routes) && isset($http_request)) {
    $json = array(
        'status' => 404,
        'result' => "It's a view",
        'params' => $routes
    );

    echo json_encode($json, http_response_code($json["status"]));
    return;
}
