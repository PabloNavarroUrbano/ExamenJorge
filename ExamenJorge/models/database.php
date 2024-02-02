<?php
class Database{

    //Function de la conexion a la BBDD

    public function conexionBBDD() {

        $database = file_get_contents('./config/config.json');
        $json = json_decode($database, false);

        $host = $json->host;
        $user = $json->user;
        $password = $json->password;
        $bbdd = $json->database;

        $base = new mysqli($host, $user, $password, $bbdd);

        if ($base->connect_error) {
            die("Error de conexión: " . $base->connect_error);
        }

        return $base;
    }

}