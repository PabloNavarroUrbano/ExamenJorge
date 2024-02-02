<?php
class listadoClientes{

//Funcion que mediante una query sql mostraremos todos los registros de clientes de la base de datos

public function mostrarClientes(){

    $modal = new Database();

    $conn = $modal->conexionBBDD();

    $sql = "SELECT  CLIENTE_COD, NOMBRE, CIUDAD FROM CLIENTE";
    $result = $conn->query($sql);

    $resultado = [];

    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultado[] = $row;
            }

            return $resultado;

        } else {
            echo "No se encontraron registros en la tabla 'tareas'.";
        }
    } else {
        echo "Error en la consulta: " . $conn->error;
    }

    $conn->close();
}

//Funcion que mediante una query sql mostraremos los registros a partir de una id de la base de datos

public function mostrarClientesId($id){
    $modal = new Database();

    $conn = $modal->conexionBBDD();

    $sql = "SELECT * FROM CLIENTE WHERE CLIENTE_COD = $id";
    $result = $conn->query($sql);

    $resultado = [];

    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultado[] = $row;
            }

            return $resultado;

        } else {
            echo "No se encontraron registros en la tabla 'tareas'.";
        }
    } else {
        echo "Error en la consulta: " . $conn->error;
    }

    $conn->close();
}


}
?>