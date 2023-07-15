<?php
use Controllers\RoutesController;
use Database\ConnectDB;

ini_set("display_errors", 1);
ini_set("log_errors", 1);
ini_set("error_log", "C:\xampp7\htdocs\concentradosindicatos\php_error_log");

require_once "./src/Controllers/RoutesController.php";
require_once "./src/Database/ConnectDB.php";

//echo "<pre>" . print_r(ConnectDB::infoDatabase(), true) . "<br/>";
//$query = "SELECT * FROM usuarios";
//echo "<pre>" . print_r(ConnectDB::select($query), true) . "<br/>";
//echo json_encode(ConnectDB::select($query), http_response_code(200));


$index = new RoutesController();
$index->index();