<?php

namespace Database;

class ConnectDB
{
    static public function infoDatabase() {
        $dataDb = array(
            "dbName" => "pruebaphp",
            "dbUser" => "postgres",
            "dbPass" => "17081989",
            "dbPort" => "5432",
            "dbHost" => "localhost"
        );

        return $dataDb;
    }

    static public function connect() {
        try {
            $connection = pg_connect(
                "host=" . ConnectDB::infoDatabase()["dbHost"] .
                " dbname=" . ConnectDB::infoDatabase()["dbName"] .
                " user=" . ConnectDB::infoDatabase()["dbUser"] .
                " password=" . ConnectDB::infoDatabase()["dbPass"]
            )
            or die("Falló la conexión a la Base de datos: " . pg_last_error() . "<br/>");
            //print("Conexión exitosa a la base de datos: " . ConnectDB::infoDatabase()["dbName"]);
        } catch (\PDOException $error) {
            print("Falló la conexión a la base de datos: " . ConnectDB::infoDatabase()["dbName"]);
        }

        return $connection;
    }

    static public function select($query) {
        $data = [];
        try {
            $result = pg_query(ConnectDB::connect(), $query)
            or die("Ocurrió un error al intentar ejecutar la sentencia sql: " . pg_last_error() . "<br/>");

            if (!$result) {
                print("No se obtuvieron resultados de la consulta");
                exit;
            }

            $data = pg_fetch_all($result);

            pg_close(ConnectDB::connect());

            return $data;

        } catch (\Exception $error) {

        }
        return $data;
    }
}